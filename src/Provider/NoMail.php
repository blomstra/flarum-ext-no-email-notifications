<?php

namespace Blomstra\NoEmail\Provider;

use Flarum\Foundation\AbstractServiceProvider;
use Illuminate\Support\Arr;

class NoMail extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->extend('flarum.notification.drivers', function ($existingDrivers) {
            Arr::pull($existingDrivers, 'email');
            return $existingDrivers;
        });
    }
}
