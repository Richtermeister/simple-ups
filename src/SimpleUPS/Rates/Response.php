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

class Response extends \SimpleUPS\Api\Response
{
    private
        /* @var ShippingMethod[] $shippingMethods */
        $shippingMethods;

    /**
     * @internal
     *
     * @param ShippingMethod $shippingMethod
     *
     * @return Response
     */
    public function addShippingMethod(ShippingMethod $shippingMethod)
    {
        if ($this->shippingMethods === null) {
            $this->shippingMethods = array();
        }

        $this->shippingMethods[] = $shippingMethod;
        return $this;
    }

    /**
     * @return ShippingMethod[]|null
     */
    public function getShippingMethods()
    {
        return $this->shippingMethods;
    }

    /**
     * @param \SimpleXMLElement $xml
     *
     * @return Response
     */
    public function fromXml(\SimpleXMLElement $xml)
    {
        foreach ($xml->RatedShipment as $ratedShipment) {
            $this->addShippingMethod(ShippingMethod::fromXml($ratedShipment));
        }

        return $this;
    }
}