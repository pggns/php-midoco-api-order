<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRevenueBookingVatDivRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteRevenueBookingVatDivRequest extends AbstractStructBase
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $MidocoRevenueBookingVatDiv = null;
    /**
     * Constructor method for DeleteRevenueBookingVatDivRequest
     * @uses DeleteRevenueBookingVatDivRequest::setMidocoRevenueBookingVatDiv()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv|null
     */
    public function getMidocoRevenueBookingVatDiv(): ?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\DeleteRevenueBookingVatDivRequest
     */
    public function setMidocoRevenueBookingVatDiv(?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv = null): self
    {
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
}
