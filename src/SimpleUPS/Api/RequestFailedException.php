<?php

/*
* This file is part of the SimpleUPS library.
*
* (c) Ben Kuhl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SimpleUPS\Api;

/**
 * A request either was not made, or an undesired response from the UPS API was received (ie - 500 Internal Server Error).
 * @since 1.0
 */
class RequestFailedException extends \Exception
{


}