<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierPaymentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierPaymentType extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierPaymentAmount
     * @var float|null
     */
    protected ?float $supplierPaymentAmount = null;
    /**
     * The supplierPaymentCurrency
     * @var string|null
     */
    protected ?string $supplierPaymentCurrency = null;
    /**
     * The supplierPaymentEquivAmount
     * @var float|null
     */
    protected ?float $supplierPaymentEquivAmount = null;
    /**
     * Constructor method for MidocoSupplierPaymentType
     * @uses MidocoSupplierPaymentType::setSupplierId()
     * @uses MidocoSupplierPaymentType::setSupplierPaymentAmount()
     * @uses MidocoSupplierPaymentType::setSupplierPaymentCurrency()
     * @uses MidocoSupplierPaymentType::setSupplierPaymentEquivAmount()
     * @param string $supplierId
     * @param float $supplierPaymentAmount
     * @param string $supplierPaymentCurrency
     * @param float $supplierPaymentEquivAmount
     */
    public function __construct(?string $supplierId = null, ?float $supplierPaymentAmount = null, ?string $supplierPaymentCurrency = null, ?float $supplierPaymentEquivAmount = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setSupplierPaymentAmount($supplierPaymentAmount)
            ->setSupplierPaymentCurrency($supplierPaymentCurrency)
            ->setSupplierPaymentEquivAmount($supplierPaymentEquivAmount);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get supplierPaymentAmount value
     * @return float|null
     */
    public function getSupplierPaymentAmount(): ?float
    {
        return $this->supplierPaymentAmount;
    }
    /**
     * Set supplierPaymentAmount value
     * @param float $supplierPaymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType
     */
    public function setSupplierPaymentAmount(?float $supplierPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierPaymentAmount) && !(is_float($supplierPaymentAmount) || is_numeric($supplierPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierPaymentAmount, true), gettype($supplierPaymentAmount)), __LINE__);
        }
        $this->supplierPaymentAmount = $supplierPaymentAmount;
        
        return $this;
    }
    /**
     * Get supplierPaymentCurrency value
     * @return string|null
     */
    public function getSupplierPaymentCurrency(): ?string
    {
        return $this->supplierPaymentCurrency;
    }
    /**
     * Set supplierPaymentCurrency value
     * @param string $supplierPaymentCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType
     */
    public function setSupplierPaymentCurrency(?string $supplierPaymentCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierPaymentCurrency) && !is_string($supplierPaymentCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierPaymentCurrency, true), gettype($supplierPaymentCurrency)), __LINE__);
        }
        $this->supplierPaymentCurrency = $supplierPaymentCurrency;
        
        return $this;
    }
    /**
     * Get supplierPaymentEquivAmount value
     * @return float|null
     */
    public function getSupplierPaymentEquivAmount(): ?float
    {
        return $this->supplierPaymentEquivAmount;
    }
    /**
     * Set supplierPaymentEquivAmount value
     * @param float $supplierPaymentEquivAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType
     */
    public function setSupplierPaymentEquivAmount(?float $supplierPaymentEquivAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierPaymentEquivAmount) && !(is_float($supplierPaymentEquivAmount) || is_numeric($supplierPaymentEquivAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierPaymentEquivAmount, true), gettype($supplierPaymentEquivAmount)), __LINE__);
        }
        $this->supplierPaymentEquivAmount = $supplierPaymentEquivAmount;
        
        return $this;
    }
}
