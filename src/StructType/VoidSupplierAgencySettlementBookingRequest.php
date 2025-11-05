<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidSupplierAgencySettlementBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidSupplierAgencySettlementBookingRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The preventProcessOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventProcessOrder = null;
    /**
     * Constructor method for VoidSupplierAgencySettlementBookingRequest
     * @uses VoidSupplierAgencySettlementBookingRequest::setSettlementId()
     * @uses VoidSupplierAgencySettlementBookingRequest::setBookingPosition()
     * @uses VoidSupplierAgencySettlementBookingRequest::setPreventProcessOrder()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param bool $preventProcessOrder
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?bool $preventProcessOrder = false)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setPreventProcessOrder($preventProcessOrder);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementBookingRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementBookingRequest
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get preventProcessOrder value
     * @return bool|null
     */
    public function getPreventProcessOrder(): ?bool
    {
        return $this->preventProcessOrder;
    }
    /**
     * Set preventProcessOrder value
     * @param bool $preventProcessOrder
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementBookingRequest
     */
    public function setPreventProcessOrder(?bool $preventProcessOrder = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventProcessOrder) && !is_bool($preventProcessOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventProcessOrder, true), gettype($preventProcessOrder)), __LINE__);
        }
        $this->preventProcessOrder = $preventProcessOrder;
        
        return $this;
    }
}
