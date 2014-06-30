<?php

/*
* This file is part of the SimpleUPS library.
*
* (c) Ben Kuhl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SimpleUPS\Track;

use SimpleUPS\Shipment;

/**
 * @internal
 */
abstract class Response extends \SimpleUPS\Api\Response
{

    private
        /* @var Shipment $shipments */
        $shipments;

    /**
     * @param Shipment $shipment
     *
     * @return Response
     */
    public function addShipment(Shipment $shipment)
    {
        if ($this->shipments === null) {
            $this->shipments = array();
        }

        $this->shipments[] = $shipment;
        return $this;
    }

    /**
     * @return Shipment[]|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    abstract public function fromXml(\SimpleXMLElement $xml);
}