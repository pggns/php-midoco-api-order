<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCountryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportCountryResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAirportCountry
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAirportCountry|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAirportCountry $MidocoAirportCountry = null;
    /**
     * Constructor method for GetAirportCountryResponse
     * @uses GetAirportCountryResponse::setMidocoAirportCountry()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCountry $midocoAirportCountry
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAirportCountry $midocoAirportCountry = null)
    {
        $this
            ->setMidocoAirportCountry($midocoAirportCountry);
    }
    /**
     * Get MidocoAirportCountry value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAirportCountry|null
     */
    public function getMidocoAirportCountry(): ?\Pggns\MidocoApi\Order\StructType\MidocoAirportCountry
    {
        return $this->MidocoAirportCountry;
    }
    /**
     * Set MidocoAirportCountry value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCountry $midocoAirportCountry
     * @return \Pggns\MidocoApi\Order\StructType\GetAirportCountryResponse
     */
    public function setMidocoAirportCountry(?\Pggns\MidocoApi\Order\StructType\MidocoAirportCountry $midocoAirportCountry = null): self
    {
        $this->MidocoAirportCountry = $midocoAirportCountry;
        
        return $this;
    }
}
