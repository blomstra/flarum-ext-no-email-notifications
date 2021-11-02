<?php

/*
 * This file is part of blomstra/noemail.
 *
 * Copyright (c) 2021 Blomstra Ltd.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

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
