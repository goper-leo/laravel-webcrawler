<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Chrome Path
    |--------------------------------------------------------------------------
    |
    | Example: '/usr/lib/node_modules/puppeteer/.local-chromium/linux-555668/chrome-linux/chrome'
    */
    'chrome_path' => env('CHROME_PATH', base_path('node_modules/puppeteer/.local-chromium/linux-884014/chrome-linux/chrome')),

    /*
    |--------------------------------------------------------------------------
    | Node Binary Path
    |--------------------------------------------------------------------------
    | To find the path run `which node`.
    | Example: '/usr/local/bin/node'
    */
    'node_binary' => env('NODE_BINARY', '/usr/local/bin/node'),

    /*
    |--------------------------------------------------------------------------
    | NPM Binary Path
    |--------------------------------------------------------------------------
    | To find the path run `which npm`.
    | Example: '/usr/local/bin/node'
    */
    'npm_binary' => env('NPM_BINARY', '/usr/local/bin/node'),

    /**
     * Set websaper timeout
     */
    'time_out' => env('WEBSAPER_TIMEOUT', 10000)

];
