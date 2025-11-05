<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeingInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgeingInfo extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The reference
     * @var string|null
     */
    protected ?string $reference = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The fcyAmount
     * @var float|null
     */
    protected ?float $fcyAmount = null;
    /**
     * The fcyCurrency
     * @var string|null
     */
    protected ?string $fcyCurrency = null;
    /**
     * The isInvoice
     * @var bool|null
     */
    protected ?bool $isInvoice = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * Constructor method for AgeingInfo
     * @uses AgeingInfo::setAccountId()
     * @uses AgeingInfo::setReference()
     * @uses AgeingInfo::setAmount()
     * @uses AgeingInfo::setCurrency()
     * @uses AgeingInfo::setFcyAmount()
     * @uses AgeingInfo::setFcyCurrency()
     * @uses AgeingInfo::setIsInvoice()
     * @uses AgeingInfo::setDueDate()
     * @param string $accountId
     * @param string $reference
     * @param float $amount
     * @param string $currency
     * @param float $fcyAmount
     * @param string $fcyCurrency
     * @param bool $isInvoice
     * @param string $dueDate
     */
    public function __construct(?string $accountId = null, ?string $reference = null, ?float $amount = null, ?string $currency = null, ?float $fcyAmount = null, ?string $fcyCurrency = null, ?bool $isInvoice = null, ?string $dueDate = null)
    {
        $this
            ->setAccountId($accountId)
            ->setReference($reference)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setFcyAmount($fcyAmount)
            ->setFcyCurrency($fcyCurrency)
            ->setIsInvoice($isInvoice)
            ->setDueDate($dueDate);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
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
     * Get fcyAmount value
     * @return float|null
     */
    public function getFcyAmount(): ?float
    {
        return $this->fcyAmount;
    }
    /**
     * Set fcyAmount value
     * @param float $fcyAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setFcyAmount(?float $fcyAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($fcyAmount) && !(is_float($fcyAmount) || is_numeric($fcyAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fcyAmount, true), gettype($fcyAmount)), __LINE__);
        }
        $this->fcyAmount = $fcyAmount;
        
        return $this;
    }
    /**
     * Get fcyCurrency value
     * @return string|null
     */
    public function getFcyCurrency(): ?string
    {
        return $this->fcyCurrency;
    }
    /**
     * Set fcyCurrency value
     * @param string $fcyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setFcyCurrency(?string $fcyCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($fcyCurrency) && !is_string($fcyCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fcyCurrency, true), gettype($fcyCurrency)), __LINE__);
        }
        $this->fcyCurrency = $fcyCurrency;
        
        return $this;
    }
    /**
     * Get isInvoice value
     * @return bool|null
     */
    public function getIsInvoice(): ?bool
    {
        return $this->isInvoice;
    }
    /**
     * Set isInvoice value
     * @param bool $isInvoice
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setIsInvoice(?bool $isInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInvoice) && !is_bool($isInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInvoice, true), gettype($isInvoice)), __LINE__);
        }
        $this->isInvoice = $isInvoice;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
}
