<?php

namespace Encore\Events;

use Encore\Container\Proxy as BaseProxy;

class Proxy extends BaseProxy
{
    /**
     * Get the name of the concrete binding in the container.
     *
     * @return string
     */
    public static function getConcreteBinding()
    {
        return 'events';
    }
}