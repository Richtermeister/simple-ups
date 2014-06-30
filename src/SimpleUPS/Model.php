<?php

/*
* This file is part of the SimpleUPS library.
*
* (c) Ben Kuhl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SimpleUPS;

/**
 * @internal
 */
class Model
{

    private $isResponse = false;

    /**
     * @internal
     */
    public function setIsResponse()
    {
        $this->isResponse = true;
    }

    /**
     * @internal
     */
    public function isResponse()
    {
        return $this->isResponse;
    }
}