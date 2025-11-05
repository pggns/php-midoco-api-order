<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportDescriptionWithLanguageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportDescriptionWithLanguageResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportDescription
     * @var \Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO $MidocoAirportDescription = null;
    /**
     * Constructor method for GetAirportDescriptionWithLanguageResponse
     * @uses GetAirportDescriptionWithLanguageResponse::setMidocoAirportDescription()
     * @param \Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO $midocoAirportDescription
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO $midocoAirportDescription = null)
    {
        $this
            ->setMidocoAirportDescription($midocoAirportDescription);
    }
    /**
     * Get MidocoAirportDescription value
     * @return \Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO|null
     */
    public function getMidocoAirportDescription(): ?\Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO
    {
        return $this->MidocoAirportDescription;
    }
    /**
     * Set MidocoAirportDescription value
     * @param \Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO $midocoAirportDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetAirportDescriptionWithLanguageResponse
     */
    public function setMidocoAirportDescription(?\Pggns\MidocoApi\Order\StructType\AirportDescriptionDTO $midocoAirportDescription = null): self
    {
        $this->MidocoAirportDescription = $midocoAirportDescription;
        
        return $this;
    }
}
