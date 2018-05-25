<?php
namespace Goper\Websaper;

use Illuminate\Support\Facades\Facade;

class WebsaperFacade extends Facade
{
    /**
     * Get facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'websaper';
    }
}
