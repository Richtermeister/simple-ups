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
 * The type of rate quote to get
 * @todo  elaborate on different types of quotes
 * @since 1.0
 */
class RateType
{
    const
        RATES_WITH_SHIPPER_NUMBER = '00',
        DAILY_RATES = '01',
        RETAIL_RATES = '04',
        STANDARD_RATES = '53';
}