<?php

namespace Webkul\GraphQLAPI\Mutations\Admin\Marketing\Promotion;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Core\Repositories\ChannelRepository;
use Webkul\CartRule\Repositories\CartRuleRepository;
use Webkul\Customer\Repositories\CustomerGroupRepository;
use Webkul\CartRule\Repositories\CartRuleCouponRepository;
use Webkul\GraphQLAPI\Validators\Admin\CustomException;

class CartRuleMutation extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected CartRuleRepository $cartRuleRepository,
        protected CartRuleCouponRepository $cartRuleCouponRepository,
        protected ChannelRepository $channelRepository,
        protected CustomerGroupRepository $customerGroupRepository
    ) {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($rootValue, array $args, GraphQLContext $context)
    {
        if (empty($args['input'])) {
            throw new CustomException(trans('bagisto_graphql::app.admin.response.error.invalid-parameter'));
        }

        $params = $args['input'];

        $params['use_auto_generation'] = $params['use_auto_generation'] ?? 0;

        $validator = Validator::make($params, [
            'name'                => 'required',
            'channels'            => 'required|array|min:1|in:'.implode(',', $this->channelRepository->pluck('id')->toArray()),
            'customer_groups'     => 'required|array|min:1|in:'.implode(',', $this->customerGroupRepository->pluck('id')->toArray()),
            'coupon_type'         => 'required',
            'use_auto_generation' => 'required_if:coupon_type,==,1',
            'coupon_code'         => 'required_if:use_auto_generation,==,0',
            'starts_from'         => 'nullable|date',
            'ends_till'           => 'nullable|date|after_or_equal:starts_from',
            'action_type'         => 'required',
            'discount_amount'     => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $errorMessage = [];

            foreach ($validator->messages()->toArray() as $field => $message) {
                $errorMessage[] = is_array($message) ? $field .': '. $message[0] : $field .': '. $message;
            }

            throw new CustomException(implode(", ", $errorMessage));
        }

        try {
            Event::dispatch('promotions.cart_rule.create.before');

            $cartRule = $this->cartRuleRepository->create($params);

            Event::dispatch('promotions.cart_rule.create.after', $cartRule);

            $cartRule->success = trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.create-success');

            return $cartRule;
        } catch (\Exception $e) {
            throw new CustomException($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($rootValue, array $args, GraphQLContext $context)
    {
        if (
            empty($args['id'])
            || empty($args['input'])
        ) {
            throw new CustomException(trans('bagisto_graphql::app.admin.response.error.invalid-parameter'));
        }

        $params = $args['input'];

        $id = $args['id'];

        $params['use_auto_generation'] = $params['use_auto_generation'] ?? 0;

        $validator = Validator::make($params, [
            'name'                => 'required',
            'channels'            => 'required|array|min:1|in:'.implode(',', $this->channelRepository->pluck('id')->toArray()),
            'customer_groups'     => 'required|array|min:1|in:'.implode(',', $this->customerGroupRepository->pluck('id')->toArray()),
            'coupon_type'         => 'required',
            'use_auto_generation' => 'required_if:coupon_type,==,1',
            'coupon_code'         => 'required_if:use_auto_generation,==,0',
            'starts_from'         => 'nullable|date',
            'ends_till'           => 'nullable|date|after_or_equal:starts_from',
            'action_type'         => 'required',
            'discount_amount'     => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $errorMessage = [];

            foreach ($validator->messages()->toArray() as $field => $message) {
                $errorMessage[] = is_array($message) ? $field .': '. $message[0] : $field .': '. $message;
            }

            throw new CustomException(implode(", ", $errorMessage));
        }

        $cartRule = $this->cartRuleRepository->find($id);

        if (! $cartRule) {
            throw new CustomException(trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.not-found'));
        }

        try {
            Event::dispatch('promotions.cart_rule.update.before', $cartRule);

            if (isset($params['autogenerated_coupons'])) {
                $this->generateCoupons($params['autogenerated_coupons'], $id);

                unset($params['autogenerated_coupons']);
            }

            $cartRule = $this->cartRuleRepository->update($params, $id);

            Event::dispatch('promotions.cart_rule.update.after', $cartRule);

            $cartRule->success = trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.update-success');

            return $cartRule;
        } catch (\Exception $e) {
            throw new CustomException($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($rootValue, array $args, GraphQLContext $context)
    {
        if (empty($args['id'])) {
            throw new CustomException(trans('bagisto_graphql::app.admin.response.error.invalid-parameter'));
        }

        $id = $args['id'];

        $cartRule = $this->cartRuleRepository->find($id);

        if (! $cartRule) {
            throw new CustomException(trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.not-found'));
        }

        try {
            Event::dispatch('promotions.cart_rule.delete.before', $id);

            $this->cartRuleRepository->delete($id);

            Event::dispatch('promotions.cart_rule.delete.after', $id);

            return ['success' => trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.delete-success')];
        } catch (\Exception $e) {
            throw new CustomException($e->getMessage());
        }
    }

    /**
     * Generate coupon code for cart rule
     *
     * @return Response
     */
    public function generateCoupons($params, $id)
    {
        $validator = Validator::make($params, [
            'coupon_qty'  => 'required|integer|min:1',
            'code_length' => 'required|integer|min:10',
            'code_format' => 'required',
        ]);

        if ($validator->fails()) {
            $errorMessage = [];

            foreach ($validator->messages()->toArray() as $field => $message) {
                $errorMessage[] = is_array($message) ? $field .': '. $message[0] : $field .': '. $message;
            }

            throw new CustomException(implode(", ", $errorMessage));
        }

        try {
            $cartRule = $this->cartRuleRepository->find($id);

            if (! $cartRule) {
                throw new CustomException(trans('bagisto_graphql::app.admin.marketing.promotions.cart-rules.not-found'));
            }

            $coupon = $this->cartRuleCouponRepository->generateCoupons($params, $id);

            return $coupon;
        } catch(\Exception $e) {
            throw new CustomException($e->getMessage());
        }
    }
}
