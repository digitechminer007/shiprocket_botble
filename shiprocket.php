<?php

return [
    'api_base_url' => env('SHIPROCKET_API_BASE_URL', 'https://apiv2.shiprocket.in/v1/external/'),

    // If using test/sandbox mode toggle
    'sandbox' => env('SHIPROCKET_SANDBOX', false),

    // Feature toggles
    'features' => [
        'wallet'      => true,
        'pickups'     => true,
        'dashboard'   => true,
        'apitools'    => true,
        'logs'        => true,
    ],

    // Default UI and system settings
    'default_currency' => 'INR',
    'default_pickup_location' => 'Primary',
];
