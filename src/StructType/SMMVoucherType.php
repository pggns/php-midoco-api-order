<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMMVoucherType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SMMVoucherType extends AbstractStructBase
{
    /**
     * The VoucherNumber
     * @var string|null
     */
    protected ?string $VoucherNumber = null;
    /**
     * The Amount
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * Constructor method for SMMVoucherType
     * @uses SMMVoucherType::setVoucherNumber()
     * @uses SMMVoucherType::setAmount()
     * @param string $voucherNumber
     * @param float $amount
     */
    public function __construct(?string $voucherNumber = null, ?float $amount = null)
    {
        $this
            ->setVoucherNumber($voucherNumber)
            ->setAmount($amount);
    }
    /**
     * Get VoucherNumber value
     * @return string|null
     */
    public function getVoucherNumber(): ?string
    {
        return $this->VoucherNumber;
    }
    /**
     * Set VoucherNumber value
     * @param string $voucherNumber
     * @return \Pggns\MidocoApi\Order\StructType\SMMVoucherType
     */
    public function setVoucherNumber(?string $voucherNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNumber) && !is_string($voucherNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNumber, true), gettype($voucherNumber)), __LINE__);
        }
        $this->VoucherNumber = $voucherNumber;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\SMMVoucherType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
}
