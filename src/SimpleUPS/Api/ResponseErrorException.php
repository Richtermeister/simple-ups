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
 * The UPS API responded successfully to the request, but stated
 * that it was unable to fulfill the request.  The exception description will
 * contain more detail.
 * @since 1.0
 */

class ResponseErrorException extends \ErrorException
{


}