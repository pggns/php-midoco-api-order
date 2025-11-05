<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableAirlineDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableAirlineDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAirline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAirline
     * @var \Pggns\MidocoApi\Order\StructType\AirlineDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AirlineDTO $MidocoAirline = null;
    /**
     * Constructor method for GetAvailableAirlineDescriptionsRequest
     * @uses GetAvailableAirlineDescriptionsRequest::setMidocoAirline()
     * @param \Pggns\MidocoApi\Order\StructType\AirlineDTO $midocoAirline
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\AirlineDTO $midocoAirline = null)
    {
        $this
            ->setMidocoAirline($midocoAirline);
    }
    /**
     * Get MidocoAirline value
     * @return \Pggns\MidocoApi\Order\StructType\AirlineDTO|null
     */
    public function getMidocoAirline(): ?\Pggns\MidocoApi\Order\StructType\AirlineDTO
    {
        return $this->MidocoAirline;
    }
    /**
     * Set MidocoAirline value
     * @param \Pggns\MidocoApi\Order\StructType\AirlineDTO $midocoAirline
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableAirlineDescriptionsRequest
     */
    public function setMidocoAirline(?\Pggns\MidocoApi\Order\StructType\AirlineDTO $midocoAirline = null): self
    {
        $this->MidocoAirline = $midocoAirline;
        
        return $this;
    }
}
