<?php

/*
 * This file is part of blomstra/noemail.
 *
 * Copyright (c) 2021 IanM.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Blomstra\NoEmail;

use Flarum\Extend;

return [
    (new Extend\ServiceProvider())
		->register(Provider\NoMail::class),
];
