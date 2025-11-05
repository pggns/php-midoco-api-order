<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookSupplierAgencySettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookSupplierAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The createMissingBooking
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $createMissingBooking = null;
    /**
     * The ignoreErrors
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreErrors = null;
    /**
     * The preventProcessOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventProcessOrder = null;
    /**
     * Constructor method for BookSupplierAgencySettlementRequest
     * @uses BookSupplierAgencySettlementRequest::setSettlementId()
     * @uses BookSupplierAgencySettlementRequest::setCreateMissingBooking()
     * @uses BookSupplierAgencySettlementRequest::setIgnoreErrors()
     * @uses BookSupplierAgencySettlementRequest::setPreventProcessOrder()
     * @param int $settlementId
     * @param bool $createMissingBooking
     * @param bool $ignoreErrors
     * @param bool $preventProcessOrder
     */
    public function __construct(?int $settlementId = null, ?bool $createMissingBooking = false, ?bool $ignoreErrors = false, ?bool $preventProcessOrder = false)
    {
        $this
            ->setSettlementId($settlementId)
            ->setCreateMissingBooking($createMissingBooking)
            ->setIgnoreErrors($ignoreErrors)
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
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementRequest
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
     * Get createMissingBooking value
     * @return bool|null
     */
    public function getCreateMissingBooking(): ?bool
    {
        return $this->createMissingBooking;
    }
    /**
     * Set createMissingBooking value
     * @param bool $createMissingBooking
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementRequest
     */
    public function setCreateMissingBooking(?bool $createMissingBooking = false): self
    {
        // validation for constraint: boolean
        if (!is_null($createMissingBooking) && !is_bool($createMissingBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createMissingBooking, true), gettype($createMissingBooking)), __LINE__);
        }
        $this->createMissingBooking = $createMissingBooking;
        
        return $this;
    }
    /**
     * Get ignoreErrors value
     * @return bool|null
     */
    public function getIgnoreErrors(): ?bool
    {
        return $this->ignoreErrors;
    }
    /**
     * Set ignoreErrors value
     * @param bool $ignoreErrors
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementRequest
     */
    public function setIgnoreErrors(?bool $ignoreErrors = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreErrors) && !is_bool($ignoreErrors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreErrors, true), gettype($ignoreErrors)), __LINE__);
        }
        $this->ignoreErrors = $ignoreErrors;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementRequest
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
