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
 * A parameter for the given request does not meet the requirements.  This
 * could mean it is too short, contains invalid characters, etc.
 * @since 1.0
 */
class InvalidParameterException extends \Exception
{


}