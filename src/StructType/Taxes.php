<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Taxes StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Taxes extends AbstractStructBase
{
    /**
     * The taxType
     * @var string|null
     */
    protected ?string $taxType = null;
    /**
     * The taxPercent
     * @var float|null
     */
    protected ?float $taxPercent = null;
    /**
     * The taxAmount
     * @var float|null
     */
    protected ?float $taxAmount = null;
    /**
     * Constructor method for Taxes
     * @uses Taxes::setTaxType()
     * @uses Taxes::setTaxPercent()
     * @uses Taxes::setTaxAmount()
     * @param string $taxType
     * @param float $taxPercent
     * @param float $taxAmount
     */
    public function __construct(?string $taxType = null, ?float $taxPercent = null, ?float $taxAmount = null)
    {
        $this
            ->setTaxType($taxType)
            ->setTaxPercent($taxPercent)
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get taxType value
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }
    /**
     * Set taxType value
     * @param string $taxType
     * @return \Pggns\MidocoApi\Order\StructType\Taxes
     */
    public function setTaxType(?string $taxType = null): self
    {
        // validation for constraint: string
        if (!is_null($taxType) && !is_string($taxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxType, true), gettype($taxType)), __LINE__);
        }
        $this->taxType = $taxType;
        
        return $this;
    }
    /**
     * Get taxPercent value
     * @return float|null
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }
    /**
     * Set taxPercent value
     * @param float $taxPercent
     * @return \Pggns\MidocoApi\Order\StructType\Taxes
     */
    public function setTaxPercent(?float $taxPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPercent) && !(is_float($taxPercent) || is_numeric($taxPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPercent, true), gettype($taxPercent)), __LINE__);
        }
        $this->taxPercent = $taxPercent;
        
        return $this;
    }
    /**
     * Get taxAmount value
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Set taxAmount value
     * @param float $taxAmount
     * @return \Pggns\MidocoApi\Order\StructType\Taxes
     */
    public function setTaxAmount(?float $taxAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxAmount) && !(is_float($taxAmount) || is_numeric($taxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->taxAmount = $taxAmount;
        
        return $this;
    }
}
