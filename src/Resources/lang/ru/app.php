<?php

return [
    'shop' => [
        'subscription' => [
            'already-subscribed' => 'Вы уже подписаны на нашу рассылку.',
            'subscribe-success'  => 'Вы успешно подписались на нашу рассылку.',
        ],

        'customers' => [
            'no-login-customer' => 'Предупреждение: Не найден зарегистрированный пользователь.',
            'success-login'     => 'Успешно: Вход пользователя выполнен.',
            'success-logout'    => 'Успешно: Выход пользователя выполнен.',

            'signup' => [
                'error-registration' => 'Предупреждение: Регистрация пользователя не удалась.',
                'success-verify'     => 'Учетная запись успешно создана, на вашу электронную почту отправлено письмо для подтверждения.',
            ],

            'login' => [
                'invalid-creds' => 'Проверьте ваши учетные данные и попробуйте снова.',
                'not-activated' => 'Ваша активация требует одобрения администратора',
                'verify-first'  => 'Пожалуйста, сначала подтвердите свою электронную почту.',
                'suspended'     => 'Ваша учетная запись была приостановлена администратором.',

                'validation' => [
                    'required' => 'Поле :field обязательно для заполнения.',
                    'same'     => 'Поле :field и пароль должны совпадать.',
                    'unique'   => 'Это :field уже занято.',
                ],
            ],

            'forgot-password' => [
                'already-sent'    => 'Ссылка для сброса пароля уже отправлена на вашу электронную почту.',
                'email-not-exist' => 'Электронная почта не существует.',
                'reset-link-sent' => 'Ссылка для сброса пароля отправлена на вашу электронную почту.',
            ],

            'account' => [
                'profile' => [
                    'customer-details' => 'Успешно: Данные пользователя успешно получены.',
                    'delete-success'   => 'Успешно: Учетная запись успешно удалена.',
                    'password-unmatch' => 'Пароль не совпадает.',
                    'update-fail'      => 'Предупреждение: Профиль не обновлен',
                    'update-success'   => 'Успешно: Профиль успешно обновлен.',
                    'wrong-password'   => 'Неправильный пароль.',
                ],

                'addresses' => [
                    'create-success'         => 'Адрес успешно создан.',
                    'default-update-success' => 'Адрес установлен по умолчанию',
                    'delete-success'         => 'Адрес успешно удален',
                    'not-found'              => 'Предупреждение: Адрес не найден.',
                    'update-success'         => 'Адрес успешно обновлен.',
                ],

                'wishlist' => [
                    'product-removed' => 'Предупреждение: Продукт не найден.',
                    'success'         => 'Успешно: Продукт успешно добавлен в список желаний.',
                    'already-exist'   => 'Предупреждение: Уже добавлено в список желаний.',
                    'remove-success'  => 'Успешно: Элемент успешно удален из списка желаний.',
                    'not-found'       => 'Предупреждение: В списке желаний нет продуктов.',
                    'moved-success'   => 'Успешно: Выбранные элементы успешно перемещены в список желаний.',
                ],

                'orders' => [
                    'not-found'      => 'Предупреждение: Заказы не найдены.',
                    'cancel-error'   => 'Предупреждение: Заказ не может быть отменен.',
                    'cancel-success' => 'Успешно: Заказ успешно отменен.',

                    'shipment' => [
                        'not-found' => 'Предупреждение: Отгрузка не найдена.',
                    ],

                    'invoice' => [
                        'not-found' => 'Предупреждение: Счет-фактура не найдена.',
                    ],

                    'refund' => [
                        'not-found' => 'Предупреждение: Возврат не найден.',
                    ],
                ],

                'downloadable-products' => [
                    'not-found'      => 'Предупреждение: Загружаемый продукт не найден.',
                    'not-auth'       => 'Предупреждение: У вас нет прав для выполнения этого действия.',
                    'payment-error'  => 'Оплата не была произведена за эту загрузку.',
                    'download-error' => 'Ссылка для загрузки истекла.',
                ],
            ],

            'compare-product' => [
                'not-found'           => 'Предупреждение: Сравниваемый продукт не найден.',
                'product-not-found'   => 'Предупреждение: Продукт не найден.',
                'already-added'       => 'Предупреждение: Продукт уже добавлен в список сравнения.',
                'item-add-success'    => 'Успех: Продукт успешно добавлен в список сравнения.',
                'remove-success'      => 'Успех: Товар успешно удален из списка сравнения.',
                'mass-remove-success' => 'Успех: Выбранные элементы успешно удалены.',
            ],

            'reviews' => [
                'create-success'      => 'Успешно: Отзыв успешно создан.',
                'delete-success'      => 'Успешно: Отзыв успешно удален.',
                'not-found'           => 'Предупреждение: Отзыв не найден.',
                'mass-delete-success' => 'Успешно: Выбранные отзывы успешно удалены.',
            ],
        ],

        'checkout' => [
            'cart' => [
                'item' => [
                    'error' => [
                        'invalid-parameter' => 'Предупреждение: Предоставлены недопустимые параметры.',
                    ],

                    'success' => [
                        'add-to-cart'      => 'Успешно: Продукт успешно добавлен в корзину.',
                        'update-to-cart'   => 'Успешно: Продукт успешно обновлен в корзине.',
                        'delete-cart-item' => 'Успешно: Элемент успешно удален из корзины.',
                        'all-remove'       => 'Успешно: Все элементы удалены из корзины.',
                        'move-to-wishlist' => 'Успешно: Выбранные элементы успешно перемещены в список желаний.',
                    ],

                    'fail' => [
                        'all-remove'       => 'Предупреждение: Все элементы не удалены из корзины.',
                        'update-to-cart'   => 'Предупреждение: Продукт не обновлен в корзине.',
                        'delete-cart-item' => 'Предупреждение: Элемент не удален из корзины.',
                        'not-found'        => 'Предупреждение: Корзина не найдена.',
                        'item-not-found'   => 'Предупреждение: Элемент не найден.',
                        'all-remove'       => 'Предупреждение: Все элементы не удалены из корзины.',
                        'move-to-wishlist' => 'Предупреждение: Выбранные элементы не перемещены в список желаний.',
                    ],
                ],
            ],

            'addresses' => [
                'guest-address-warning'     => 'Предупреждение: Гостевой пользователь не может добавлять адрес.',
                'guest-checkout-warning'    => 'Предупреждение: Гостевой пользователь не может оформить заказ.',
                'no-billing-address-found'  => 'Предупреждение: Не найден адрес для выставления счета.',
                'no-shipping-address-found' => 'Предупреждение: Не найден адрес доставки.',
                'address-save-success'      => 'Успешно: Адрес успешно сохранен.',
            ],

            'shipping' => [
                'method-not-found' => 'Предупреждение: Способ доставки не найден.',
                'method-fetched'   => 'Успешно: Способ доставки успешно получен.',
                'save-failed'      => 'Предупреждение: Способ доставки не сохранен.',
                'save-success'     => 'Успешно: Способ доставки успешно сохранен.',
            ],

            'payment' => [
                'method-not-found' => 'Предупреждение: Способ оплаты не найден.',
                'method-fetched'   => 'Успешно: Способ оплаты успешно получен.',
                'save-failed'      => 'Предупреждение: Способ оплаты не сохранен.',
                'save-success'     => 'Успешно: Способ оплаты успешно сохранен.',
            ],

            'coupon' => [
                'apply-success'   => 'Успешно: Код купона успешно применен.',
                'already-applied' => 'Предупреждение: Код купона уже применен.',
                'invalid-code'    => 'Предупреждение: Код купона недействителен.',
                'remove-success'  => 'Успешно: Код купона успешно удален.',
                'remove-failed'   => 'Предупреждение: Код купона не удален.',
            ],

            'something-wrong'          => 'Предупреждение: Что-то пошло не так.',
            'invalid-guest-user'       => 'Предупреждение: Недопустимый гостевой пользователь.',
            'empty-cart'               => 'Предупреждение: Корзина пуста.',
            'missing-billing-address'  => 'Предупреждение: Отсутствует адрес для выставления счета.',
            'missing-shipping-address' => 'Предупреждение: Отсутствует адрес доставки.',
            'missing-shipping-method'  => 'Предупреждение: Отсутствует способ доставки.',
            'missing-payment-method'   => 'Предупреждение: Отсутствует способ оплаты.',
            'no-address-found'         => 'Предупреждение: Не найдены адреса для выставления счета и доставки.',
        ],
    ],

    'admin' => [
        'acl' => [
            'create'            => 'Создать',
            'delete'            => 'Удалить',
            'edit'              => 'Редактировать',
            'mass-delete'       => 'Массовое удаление',
            'mass-update'       => 'Массовое обновление',
            'push-notification' => 'Push-уведомление',
            'send'              => 'Отправить',
        ],

        'components' => [
            'layouts' => [
                'sidebar' => [
                    'push-notification' => 'Push-уведомление',
                ],
            ],
        ],

        'configuration' => [
            'index' => [
                'general' => [
                    'graphql-api' => [
                        'notification-topic'              => 'Тема уведомления',
                        'info'                            => 'Настройки, связанные с уведомлениями',
                        'push-notification-configuration' => 'Настройка Push-уведомлений FCM',
                        'title'                           => 'GraphQL API',
                        'private-key'                     => 'Содержимое файла JSON с закрытым ключом',
                        'info-get-private-key'            => 'Информация: Чтобы получить содержимое файла JSON с закрытым ключом FCM: <a href="https://console.firebase.google.com/" target="_blank">Нажмите здесь</a>',
                    ],

                    'content' => [
                        'custom-script' => [
                            'update-success' => 'Успех: Пользовательские скрипты успешно обновлены.',
                        ],
                    ],
                ],
            ],
        ],

        'sales' => [
            'orders' => [
                'cancel-error'   => 'Внимание: Заказ не может быть отменен.',
                'cancel-success' => 'Успех: Заказ успешно отменен.',
                'not-found'      => 'Внимание: Заказ не найден.',
            ],

            'shipments' => [
                'creation-error'   => 'Внимание: Отгрузка не создана.',
                'not-found'        => 'Внимание: Отгрузка не найдена.',
                'quantity-invalid' => 'Внимание: Указано недопустимое количество.',
                'shipment-error'   => 'Внимание: Отгрузка не создана.',
                'create-success'   => 'Успех: Отгрузка успешно создана.',
            ],

            'invoices' => [
                'creation-error' => 'Внимание: Счет-фактура не создана.',
                'not-found'      => 'Внимание: Счет-фактура не найдена.',
                'product-error'  => 'Внимание: Указан недопустимый продукт.',
                'create-success' => 'Успех: Счет-фактура успешно создана.',
            ],

            'refunds' => [
                'creation-error'      => 'Внимание: Возврат не создан.',
                'refund-amount-error' => 'Внимание: Указана недопустимая сумма возврата.',
                'refund-limit-error'  => 'Внимание: Сумма возврата превышает лимит в размере :amount',
                'not-found'           => 'Внимание: Возврат не найден.',
                'create-success'      => 'Успех: Возврат успешно создан.',
            ],

            'transactions' => [
                'already-paid'   => 'Внимание: Счет-фактура уже оплачен.',
                'amount-exceed'  => 'Внимание: Сумма транзакции превышает лимит.',
                'zero-amount'    => 'Внимание: Сумма транзакции должна быть больше нуля.',
                'create-success' => 'Успех: Транзакция успешно создана.',
            ],

            'reorder' => [
                'cart-not-found'           => 'Внимание: Корзина не найдена.',
                'cart-item-not-found'      => 'Внимание: Элемент корзины не найден.',
                'cart-create-success'      => 'Успех: Корзина успешно создана.',
                'cart-item-add-success'    => 'Успех: Продукт успешно добавлен в корзину.',
                'cart-item-remove-success' => 'Успех: Элемент успешно удален из корзины.',
                'cart-item-update-success' => 'Успех: Продукт успешно обновлен в корзине.',
                'something-wrong'          => 'Внимание: Что-то пошло не так.',
                'address-save-success'     => 'Успех: Адрес успешно сохранен.',
                'shipping-save-success'    => 'Успех: Способ доставки успешно сохранен.',
                'payment-save-success'     => 'Успех: Способ оплаты успешно сохранен.',
                'order-placed-success'     => 'Успех: Заказ успешно размещен.',
                'payment-method-not-found' => 'Внимание: Способ оплаты не найден.',
                'minimum-order-amount-err' => 'Внимание: Минимальная сумма заказа должна быть :amount',
                'check-shipping-address'   => 'Внимание: Пожалуйста, проверьте адрес доставки.',
                'check-billing-address'    => 'Внимание: Пожалуйста, проверьте адрес выставления счета.',
                'specify-shipping-method'  => 'Внимание: Пожалуйста, укажите способ доставки.',
                'specify-payment-method'   => 'Внимание: Пожалуйста, укажите способ оплаты.',
                'coupon-not-valid'         => 'Внимание: Код купона недействителен.',
                'coupon-already-applied'   => 'Внимание: Код купона уже применен.',
                'coupon-applied'           => 'Успех: Код купона успешно применен.',
                'coupon-removed'           => 'Успех: Код купона успешно удален.',
            ],
        ],

        'catalog' => [
            'products' => [
                'create-success'            => 'Продукт успешно создан.',
                'delete-success'            => 'Продукт успешно удален.',
                'not-found'                 => 'Внимание: Продукт не найден.',
                'update-success'            => 'Продукт успешно обновлен.',
                'configurable-attr-missing' => 'Внимание: Отсутствует настраиваемый атрибут.',
                'simple-products-error'     => 'Внимание: Отсутствуют простые продукты.',
            ],

            'categories' => [
                'already-taken'  => 'Внимание: Этот слаг уже занят.',
                'create-success' => 'Категория успешно создана.',
                'delete-success' => 'Категория успешно удалена.',
                'not-found'      => 'Внимание: Категория не найдена.',
                'update-success' => 'Категория успешно обновлена.',
                'root-delete'    => 'Внимание: Корневую категорию нельзя удалить.',
            ],

            'attributes' => [
                'create-success'    => 'Атрибут успешно создан.',
                'delete-success'    => 'Атрибут успешно удален.',
                'not-found'         => 'Внимание: Атрибут не найден.',
                'update-success'    => 'Атрибут успешно обновлен.',
                'user-define-error' => 'Внимание: У вас нет прав на удаление системного атрибута.',
            ],

            'attribute-groups' => [
                'create-success'    => 'Группа атрибутов успешно создана.',
                'delete-success'    => 'Группа атрибутов успешно удалена.',
                'not-found'         => 'Внимание: Группа атрибутов не найдена.',
                'update-success'    => 'Группа атрибутов успешно обновлена.',
                'user-define-error' => 'Внимание: У вас нет прав на удаление системной группы атрибутов.',
            ],

            'attribute-families' => [
                'create-success'          => 'Семейство атрибутов успешно создано.',
                'delete-success'          => 'Семейство атрибутов успешно удалено.',
                'not-found'               => 'Внимание: Семейство атрибутов не найдено.',
                'update-success'          => 'Семейство атрибутов успешно обновлено.',
                'last-delete-error'       => 'Внимание: Последнее семейство атрибутов нельзя удалить.',
                'attribute-product-error' => 'Внимание: Некоторые продукты связаны с этим семейством атрибутов.',
                'user-define-error'       => 'Внимание: У вас нет прав на удаление системного семейства атрибутов.',
            ],
        ],

        'customers' => [
            'customers' => [
                'create-success'       => 'Клиент успешно создан.',
                'delete-order-pending' => 'Невозможно удалить учетную запись клиента, так как есть ожидающие или обрабатываемые заказы.',
                'delete-success'       => 'Клиент успешно удален',
                'not-found'            => 'Внимание: Клиент не найден.',
                'note-created-success' => 'Примечание успешно создано',
                'update-success'       => 'Клиент успешно обновлен.',
                'login-success'        => 'Клиент успешно вошел в систему.',
            ],

            'addressess' => [
                'create-success'         => 'Адрес клиента успешно создан.',
                'default-update-success' => 'Адрес установлен как основной',
                'delete-success'         => 'Адрес клиента успешно удален',
                'not-found'              => 'Внимание: Адрес клиента не найден.',
                'update-success'         => 'Адрес клиента успешно обновлен.',
            ],

            'groups' => [
                'create-success'     => 'Группа клиентов успешно создана.',
                'customer-associate' => 'Внимание: Группу нельзя удалить, так как с ней связан клиент.',
                'delete-success'     => 'Группа клиентов успешно удалена',
                'not-found'          => 'Внимание: Группа клиентов не найдена.',
                'update-success'     => 'Группа клиентов успешно обновлена.',
                'user-define-error'  => 'Внимание: У вас нет прав на удаление системной группы клиентов.',
            ],

            'reviews' => [
                'delete-success' => 'Отзыв успешно удален',
                'not-found'      => 'Внимание: Отзыв не найден.',
                'update-success' => 'Отзыв успешно обновлен.',
            ],
        ],

        'cms' => [
            'already-taken'  => 'Внимание: Этот слаг уже занят.',
            'create-success' => 'CMS успешно создан.',
            'delete-success' => 'CMS успешно удален',
            'not-found'      => 'Внимание: CMS не найден.',
            'update-success' => 'CMS успешно обновлен.',
        ],

        'marketing' => [
            'promotions' => [
                'catalog-rules' => [
                    'create-success' => 'Правило каталога успешно создано.',
                    'delete-failed'  => 'Внимание: Правило каталога не удалено',
                    'delete-success' => 'Правило каталога успешно удалено',
                    'not-found'      => 'Внимание: Правило каталога не найдено.',
                    'update-success' => 'Правило каталога успешно обновлено.',
                ],

                'cart-rules' => [
                    'create-success' => 'Правило корзины успешно создано.',
                    'delete-failed'  => 'Внимание: Правило корзины не удалено',
                    'delete-success' => 'Правило корзины успешно удалено',
                    'not-found'      => 'Правило корзины не найдено',
                    'update-success' => 'Правило корзины успешно обновлено.',
                ],
            ],

            'communications' => [
                'email-templates' => [
                    'create-success' => 'Шаблон электронной почты успешно создан.',
                    'delete-success' => 'Шаблон электронной почты успешно удален',
                    'not-found'      => 'Внимание: Шаблон электронной почты не найден.',
                    'update-success' => 'Шаблон электронной почты успешно обновлен.',
                ],

                'events' => [
                    'create-success' => 'Событие успешно создано.',
                    'delete-success' => 'Событие успешно удалено',
                    'not-found'      => 'Внимание: Событие не найдено.',
                    'update-success' => 'Событие успешно обновлено.',
                ],

                'campaigns' => [
                    'create-success' => 'Кампания успешно создана.',
                    'delete-success' => 'Кампания успешно удалена',
                    'not-found'      => 'Внимание: Кампания не найдена.',
                    'update-success' => 'Кампания успешно обновлена.',
                ],

                'subscriptions' => [
                    'delete-success'      => 'Подписка успешно удалена',
                    'not-found'           => 'Внимание: Подписка не найдена.',
                    'unsubscribe-success' => 'Успех: Подписка успешно отменена.',
                ],
            ],

            'seo' => [
                'url-rewrites' => [
                    'create-success' => 'URL-перенаправление успешно создано.',
                    'delete-success' => 'URL-перенаправление успешно удалено',
                    'not-found'      => 'Внимание: URL-перенаправление не найдено.',
                    'update-success' => 'URL-перенаправление успешно обновлено.',
                ],

                'search-terms' => [
                    'create-success' => 'Поисковый запрос успешно создан.',
                    'delete-success' => 'Поисковый запрос успешно удален',
                    'not-found'      => 'Внимание: Поисковый запрос не найден.',
                    'update-success' => 'Поисковый запрос успешно обновлен.',
                ],

                'search-synonyms' => [
                    'create-success' => 'Синоним поискового запроса успешно создан.',
                    'delete-success' => 'Синоним поискового запроса успешно удален',
                    'not-found'      => 'Внимание: Синоним поискового запроса не найден.',
                    'update-success' => 'Синоним поискового запроса успешно обновлен.',
                ],

                'sitemaps' => [
                    'create-success' => 'Карта сайта успешно создана.',
                    'delete-success' => 'Карта сайта успешно удалена',
                    'not-found'      => 'Внимание: Карта сайта не найдена.',
                    'update-success' => 'Карта сайта успешно обновлена.',
                ],
            ],
        ],

        'settings' => [
            'locales' => [
                'create-success'       => 'Язык успешно создан.',
                'default-delete-error' => 'Невозможно удалить язык по умолчанию.',
                'delete-error'         => 'Ошибка удаления языка.',
                'delete-success'       => 'Язык успешно удален.',
                'last-delete-error'    => 'Ошибка удаления последнего языка.',
                'not-found'            => 'Внимание: Язык не найден.',
                'update-success'       => 'Язык успешно обновлен.',
            ],

            'currencies' => [
                'create-success'       => 'Валюта успешно создана.',
                'default-delete-error' => 'Невозможно удалить валюту по умолчанию.',
                'delete-error'         => 'Ошибка удаления валюты.',
                'delete-success'       => 'Валюта успешно удалена.',
                'last-delete-error'    => 'Ошибка удаления последней валюты.',
                'not-found'            => 'Внимание: Валюта не найдена.',
                'update-success'       => 'Валюта успешно обновлена.',
            ],

            'exchange-rates' => [
                'create-success'          => 'Курс обмена успешно создан.',
                'delete-error'            => 'Ошибка удаления курса обмена.',
                'delete-success'          => 'Курс обмена успешно удален.',
                'invalid-target-currency' => 'Внимание: Указана недопустимая целевая валюта.',
                'last-delete-error'       => 'Ошибка удаления последнего курса обмена.',
                'not-found'               => 'Внимание: Курс обмена не найден.',
                'update-success'          => 'Курс обмена успешно обновлен.',
            ],

            'inventory-sources' => [
                'create-success'    => 'Склад успешно создан.',
                'delete-error'      => 'Ошибка удаления склада.',
                'delete-success'    => 'Склад успешно удален.',
                'last-delete-error' => 'Ошибка удаления последнего склада.',
                'not-found'         => 'Внимание: Склад не найден.',
                'update-success'    => 'Склад успешно обновлен.',
            ],

            'channels' => [
                'create-success'       => 'Канал успешно создан.',
                'default-delete-error' => 'Невозможно удалить канал по умолчанию.',
                'delete-error'         => 'Ошибка удаления канала.',
                'delete-success'       => 'Канал успешно удален.',
                'last-delete-error'    => 'Ошибка удаления последнего канала.',
                'not-found'            => 'Внимание: Канал не найден.',
                'update-success'       => 'Канал успешно обновлен.',
            ],

            'users' => [
                'activate-warning'  => 'Ваша учетная запись еще не активирована, пожалуйста, свяжитесь с администратором.',
                'create-success'    => 'Пользователь успешно создан.',
                'delete-error'      => 'Ошибка удаления пользователя.',
                'delete-success'    => 'Пользователь успешно удален.',
                'last-delete-error' => 'Ошибка удаления последнего пользователя.',
                'login-error'       => 'Пожалуйста, проверьте ваши учетные данные и повторите попытку.',
                'not-found'         => 'Внимание: Пользователь не найден.',
                'success-login'     => 'Успех: Пользователь успешно вошел в систему.',
                'success-logout'    => 'Успех: Пользователь успешно вышел из системы.',
                'update-success'    => 'Пользователь успешно обновлен.',
            ],

            'roles' => [
                'create-success'    => 'Роль успешно создана.',
                'delete-error'      => 'Ошибка удаления роли.',
                'delete-success'    => 'Роль успешно удалена.',
                'last-delete-error' => 'Невозможно удалить последнюю роль.',
                'not-found'         => 'Внимание: Роль не найдена.',
                'update-success'    => 'Роль успешно обновлена.',
            ],

            'themes' => [
                'create-success' => 'Тема успешно создана.',
                'delete-success' => 'Тема успешно удалена.',
                'not-found'      => 'Внимание: Тема не найдена.',
                'update-success' => 'Тема успешно обновлена.',
            ],

            'tax-rates' => [
                'create-success' => 'Налоговая ставка успешно создана.',
                'delete-error'   => 'Ошибка удаления налоговой ставки.',
                'delete-success' => 'Налоговая ставка успешно удалена.',
                'not-found'      => 'Внимание: Налоговая ставка не найдена.',
                'update-success' => 'Налоговая ставка успешно обновлена.',
            ],

            'tax-category' => [
                'create-success'     => 'Категория налога успешно создана.',
                'delete-error'       => 'Ошибка удаления категории налога.',
                'delete-success'     => 'Категория налога успешно удалена.',
                'not-found'          => 'Внимание: Категория налога не найдена.',
                'tax-rate-not-found' => 'Указанные идентификаторы не найдены. Идентификаторы: :ids',
                'update-success'     => 'Категория налога успешно обновлена.',
            ],

            'notification' => [
                'index' => [
                    'add-title' => 'Добавить уведомление',
                    'general'   => 'Общие',
                    'title'     => 'Push-уведомление',

                    'datagrid' => [
                        'channel-name'         => 'Название канала',
                        'created-at'           => 'Время создания',
                        'delete'               => 'Удалить',
                        'id'                   => 'Идентификатор',
                        'image'                => 'Изображение',
                        'notification-content' => 'Содержание уведомления',
                        'notification-status'  => 'Статус уведомления',
                        'notification-type'    => 'Тип уведомления',
                        'text-title'           => 'Заголовок',
                        'update'               => 'Обновить',
                        'updated-at'           => 'Время обновления',

                        'status' => [
                            'disabled' => 'Отключено',
                            'enabled'  => 'Включено',
                        ],
                    ],
                ],

                'create' => [
                    'back-btn'             => 'Назад',
                    'content-and-image'    => 'Содержание и изображение уведомления',
                    'create-btn-title'     => 'Сохранить уведомление',
                    'general'              => 'Общие',
                    'image'                => 'Изображение',
                    'new-notification'     => 'Новое уведомление',
                    'notification-content' => 'Содержание уведомления',
                    'notification-type'    => 'Тип уведомления',
                    'product-cat-id'       => 'Идентификатор продукта/категории',
                    'settings'             => 'Настройки',
                    'status'               => 'Статус',
                    'store-view'           => 'Каналы',
                    'title'                => 'Push-уведомление',

                    'option-type' => [
                        'category' => 'Категория',
                        'others'   => 'Простое',
                        'product'  => 'Продукт',
                    ],
                ],

                'edit' => [
                    'back-btn'             => 'Назад',
                    'content-and-image'    => 'Содержание и изображение уведомления',
                    'edit-notification'    => 'Редактировать уведомление',
                    'general'              => 'Общие',
                    'image'                => 'Изображение',
                    'notification-content' => 'Содержание уведомления',
                    'notification-type'    => 'Тип уведомления',
                    'product-cat-id'       => 'Идентификатор продукта/категории',
                    'send-title'           => 'Отправить уведомление',
                    'settings'             => 'Настройки',
                    'status'               => 'Статус',
                    'store-view'           => 'Каналы',
                    'title'                => 'Push-уведомление',
                    'update-btn-title'     => 'Обновить',

                    'option-type' => [
                        'category' => 'Категория',
                        'others'   => 'Простое',
                        'product'  => 'Продукт',
                    ],
                ],

                'not-found'           => 'Внимание: Уведомление не найдено.',
                'create-success'      => 'Уведомление успешно создано.',
                'delete-failed'       => 'Ошибка удаления уведомления.',
                'delete-success'      => 'Уведомление успешно удалено.',
                'mass-update-success' => 'Выбранные уведомления успешно обновлены.',
                'mass-delete-success' => 'Выбранные уведомления успешно удалены.',
                'no-value-selected'   => 'нет выбранного значения.',
                'send-success'        => 'Уведомление успешно отправлено.',
                'update-success'      => 'Уведомление успешно обновлено.',
                'configuration-error' => 'Внимание: Не найдена конфигурация FCM.',
                'product-not-found'   => 'Внимание: Продукт не найден.',
                'category-not-found'  => 'Внимание: Категория не найдена.',
            ],
        ],

        'response' => [
            'error' => [
                'invalid-parameter' => 'Предупреждение: Указаны неверные параметры.',
            ],
        ],
    ],
];
