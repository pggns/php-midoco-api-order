<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookSupplierAgencySettlementBookingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookSupplierAgencySettlementBookingResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType $MidocoSupplierAgencySettlementBooking = null;
    /**
     * Constructor method for BookSupplierAgencySettlementBookingResponse
     * @uses BookSupplierAgencySettlementBookingResponse::setMidocoSupplierAgencySettlementBooking()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType $midocoSupplierAgencySettlementBooking
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType $midocoSupplierAgencySettlementBooking = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingResponse
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementBookingType $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
}
