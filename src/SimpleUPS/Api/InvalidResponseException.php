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
 * A response from the UPS API was obtained, but did not contain valid XML
 * @since 1.0
 */
class InvalidResponseException extends \Exception
{


}