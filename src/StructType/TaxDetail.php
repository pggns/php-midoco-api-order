<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TaxDetail extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The taxAmount
     * @var float|null
     */
    protected ?float $taxAmount = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for TaxDetail
     * @uses TaxDetail::setPosition()
     * @uses TaxDetail::setCurrency()
     * @uses TaxDetail::setTaxAmount()
     * @uses TaxDetail::setType()
     * @param int $position
     * @param string $currency
     * @param float $taxAmount
     * @param string $type
     */
    public function __construct(?int $position = null, ?string $currency = null, ?float $taxAmount = null, ?string $type = null)
    {
        $this
            ->setPosition($position)
            ->setCurrency($currency)
            ->setTaxAmount($taxAmount)
            ->setType($type);
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\TaxDetail
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\TaxDetail
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TaxDetail
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
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\TaxDetail
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
