<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidRevenueBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The avisDetailId
     * @var int|null
     */
    protected ?int $avisDetailId = null;
    /**
     * The preventProcessOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventProcessOrder = null;
    /**
     * Constructor method for VoidRevenueBookingRequest
     * @uses VoidRevenueBookingRequest::setRevenueId()
     * @uses VoidRevenueBookingRequest::setAvisDetailId()
     * @uses VoidRevenueBookingRequest::setPreventProcessOrder()
     * @param int $revenueId
     * @param int $avisDetailId
     * @param bool $preventProcessOrder
     */
    public function __construct(?int $revenueId = null, ?int $avisDetailId = null, ?bool $preventProcessOrder = false)
    {
        $this
            ->setRevenueId($revenueId)
            ->setAvisDetailId($avisDetailId)
            ->setPreventProcessOrder($preventProcessOrder);
    }
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\VoidRevenueBookingRequest
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get avisDetailId value
     * @return int|null
     */
    public function getAvisDetailId(): ?int
    {
        return $this->avisDetailId;
    }
    /**
     * Set avisDetailId value
     * @param int $avisDetailId
     * @return \Pggns\MidocoApi\Order\StructType\VoidRevenueBookingRequest
     */
    public function setAvisDetailId(?int $avisDetailId = null): self
    {
        // validation for constraint: int
        if (!is_null($avisDetailId) && !(is_int($avisDetailId) || ctype_digit($avisDetailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($avisDetailId, true), gettype($avisDetailId)), __LINE__);
        }
        $this->avisDetailId = $avisDetailId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoidRevenueBookingRequest
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
