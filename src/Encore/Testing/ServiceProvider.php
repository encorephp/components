<?php

namespace Encore\Testing;

class ServiceProvider extends \Encore\Container\ServiceProvider
{
    public function commands()
    {
        return [new Command];
    }
}