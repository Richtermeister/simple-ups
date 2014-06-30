<?php

/*
* This file is part of the SimpleUPS library.
*
* (c) Ben Kuhl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SimpleUPS\Track\SmallPackage;

/**
 * @internal
 */
class Response extends \SimpleUPS\Track\Response
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

    /**
     * @param \SimpleXMLElement $xml
     *
     * @return Response
     */
    public function fromXml(\SimpleXMLElement $xml)
    {
        foreach ($xml->Shipment as $xml) {
            $this->addShipment(Shipment::fromXml($xml));
        }

        return $this;
    }

}