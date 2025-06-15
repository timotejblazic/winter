<?php
return [
    'default' => env('PAYMENT_DRIVER', 'stripe'),

    'drivers' => [
        'stripe' => [
            'sk' => env('STRIPE_SK'),
            'pk' => env('STRIPE_PK'),
        ],
    ],
];
