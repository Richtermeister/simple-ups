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
 * A shipment is made up of 1 or more packages
 * @since 1.0
 */
class Shipment extends \SimpleUPS\Shipment
{
    private
        /* @var bool $documentsOnly */
        $documentsOnly = false;

    /**
     * Indicate that this shipment contains only documents
     */
    public function documentsOnly()
    {
        $this->documentsOnly = true;
    }
}