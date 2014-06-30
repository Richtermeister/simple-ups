<?php

/*
* This file is part of the SimpleUPS library.
*
* (c) Ben Kuhl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SimpleUPS\Rates;

/**
 * The type of pickup service offered on a package
 * @since 1.0
 */
class PickupType
{
    const
        DAILY_PICKUP = '01',
        CUSTOMER_COUNTER = '03',
        ONE_TIME_PICKUP = '06',
        ON_CALL_AIR = '07',
        LETTER_CENTER = '19',
        AIR_SERVICE_CENTER = '20';
}