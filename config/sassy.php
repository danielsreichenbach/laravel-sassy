<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Recurly Keys
    |--------------------------------------------------------------------------
    |
    | The Recurly publishable key and secret key give you access to Recurly's
    | API. The "publishable" key is typically used when interacting with
    | Recurly.js while the "secret" key accesses private API endpoints.
    |
    */

    'subdomain' => env('RECURLY_SUBDOMAIN'),

    'api_key' => env('RECURLY_API_KEY'),

    'public_key' => env('RECURLY_PUBLIC_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Sassy Path
    |--------------------------------------------------------------------------
    |
    | This is the base URI path where Sassy's views, such as the payment
    | verification screen, will be available from. You're free to tweak
    | this path according to your preferences and application design.
    |
    */

    'path' => env('SASSY_PATH', 'recurly'),

    /*
    |--------------------------------------------------------------------------
    | Recurly Webhooks
    |--------------------------------------------------------------------------
    |
    | Your Recurly webhook allowlist is used to prevent unauthorized requests to
    | your Recurly webhook handling controllers. Since this list may be changed
    | by Recurly, make sure to check <https://docs.recurly.com/docs/ip-allowlist>
    | frequently.
    |
    */

    'webhook' => [
        'allowlist' => [
            "34.105.107.15",
            "34.86.231.208",
            "34.86.76.227",
            "35.185.253.62",
            "35.188.232.138",
            "35.194.77.56",
            "35.197.126.78",
            "35.199.174.181",
            "35.230.60.156",
            "35.233.168.62",
            "35.236.210.191",
            "35.245.149.42",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency that will be used when generating charges
    | from your application. Of course, you are welcome to use any of the
    | various world currencies that are currently supported via Recurly.
    |
    */

    'currency' => env('SASSY_CURRENCY', 'USD'),

    /*
    |--------------------------------------------------------------------------
    | Currency Locale
    |--------------------------------------------------------------------------
    |
    | This is the default locale in which your money values are formatted in
    | for display. To utilize other locales besides the default en locale
    | verify you have the "intl" PHP extension installed on the system.
    |
    */

    'currency_locale' => env('SASSY_CURRENCY_LOCALE', 'en'),

    /*
    |--------------------------------------------------------------------------
    | Invoice Paper Size
    |--------------------------------------------------------------------------
    |
    | This option is the default paper size for all invoices generated using
    | Sassy. You are free to customize this settings based on the usual
    | paper size used by the customers using your Laravel applications.
    |
    | Supported sizes: 'letter', 'legal', 'A4'
    |
    */

    'paper' => env('SASSY_PAPER', 'a4'),

    /*
    |--------------------------------------------------------------------------
    | Recurly Logger
    |--------------------------------------------------------------------------
    |
    | This setting defines which logging channel will be used by the Recurly
    | library to write log messages. You are free to specify any of your
    | logging channels listed inside the "logging" configuration file.
    |
    */

    'logger' => env('SASSY_LOGGER'),

];
