<?php

namespace Goper\Websaper\Traits;

use Exception;

trait Validation
{

    /**
     * Get observers
     * @TODO modify config pls
     * @return [type] [description]
     */
    public function validateConfig()
    {
        if ($this->config) {

        } else {
            // No config file found
            throw new Exception('No config file found. Run php artisan vendor:publish and publish the config.');
        }
    }

    /**
     * Get sample content
     * @return string
     */
    public function sampleContent()
    {
        return file_get_contents(__DIR__ . '/test.html', FILE_USE_INCLUDE_PATH);
    }
}
