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
 * The library was successfully able to communicate with the UPS API, and the
 * API determined that the authentication information provided is invalid.
 * @see   \SimpleUPS\UPS::setAuthentication()
 * @since 1.0
 */
class AuthenticationException extends \Exception
{


}