<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalLine StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalLine extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Taxes[]
     */
    protected ?array $Taxes = null;
    /**
     * The AgeingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AgeingInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AgeingInfo $AgeingInfo = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The debitCreditIndicator
     * Meta information extracted from the WSDL
     * - documentation: D for debit side, C for credit side
     * @var string|null
     */
    protected ?string $debitCreditIndicator = null;
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
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The accountingPeriod
     * @var int|null
     */
    protected ?int $accountingPeriod = null;
    /**
     * The accountingYear
     * @var int|null
     */
    protected ?int $accountingYear = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The supplierBookingId
     * @var string|null
     */
    protected ?string $supplierBookingId = null;
    /**
     * Constructor method for JournalLine
     * @uses JournalLine::setTaxes()
     * @uses JournalLine::setAgeingInfo()
     * @uses JournalLine::setJournalId()
     * @uses JournalLine::setAccountId()
     * @uses JournalLine::setDebitCreditIndicator()
     * @uses JournalLine::setAmount()
     * @uses JournalLine::setCurrency()
     * @uses JournalLine::setFcyAmount()
     * @uses JournalLine::setFcyCurrency()
     * @uses JournalLine::setExchangeRate()
     * @uses JournalLine::setDescription()
     * @uses JournalLine::setCostCentre()
     * @uses JournalLine::setAccountingPeriod()
     * @uses JournalLine::setAccountingYear()
     * @uses JournalLine::setTravelDate()
     * @uses JournalLine::setSupplierBookingId()
     * @param \Pggns\MidocoApi\Order\StructType\Taxes[] $taxes
     * @param \Pggns\MidocoApi\Order\StructType\AgeingInfo $ageingInfo
     * @param int $journalId
     * @param string $accountId
     * @param string $debitCreditIndicator
     * @param float $amount
     * @param string $currency
     * @param float $fcyAmount
     * @param string $fcyCurrency
     * @param float $exchangeRate
     * @param string $description
     * @param string $costCentre
     * @param int $accountingPeriod
     * @param int $accountingYear
     * @param string $travelDate
     * @param string $supplierBookingId
     */
    public function __construct(?array $taxes = null, ?\Pggns\MidocoApi\Order\StructType\AgeingInfo $ageingInfo = null, ?int $journalId = null, ?string $accountId = null, ?string $debitCreditIndicator = null, ?float $amount = null, ?string $currency = null, ?float $fcyAmount = null, ?string $fcyCurrency = null, ?float $exchangeRate = null, ?string $description = null, ?string $costCentre = null, ?int $accountingPeriod = null, ?int $accountingYear = null, ?string $travelDate = null, ?string $supplierBookingId = null)
    {
        $this
            ->setTaxes($taxes)
            ->setAgeingInfo($ageingInfo)
            ->setJournalId($journalId)
            ->setAccountId($accountId)
            ->setDebitCreditIndicator($debitCreditIndicator)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setFcyAmount($fcyAmount)
            ->setFcyCurrency($fcyCurrency)
            ->setExchangeRate($exchangeRate)
            ->setDescription($description)
            ->setCostCentre($costCentre)
            ->setAccountingPeriod($accountingPeriod)
            ->setAccountingYear($accountingYear)
            ->setTravelDate($travelDate)
            ->setSupplierBookingId($supplierBookingId);
    }
    /**
     * Get Taxes value
     * @return \Pggns\MidocoApi\Order\StructType\Taxes[]
     */
    public function getTaxes(): ?array
    {
        return $this->Taxes;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTaxes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxesForArrayConstraintFromSetTaxes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $journalLineTaxesItem) {
            // validation for constraint: itemType
            if (!$journalLineTaxesItem instanceof \Pggns\MidocoApi\Order\StructType\Taxes) {
                $invalidValues[] = is_object($journalLineTaxesItem) ? get_class($journalLineTaxesItem) : sprintf('%s(%s)', gettype($journalLineTaxesItem), var_export($journalLineTaxesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Taxes property can only contain items of type \Pggns\MidocoApi\Order\StructType\Taxes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Taxes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Taxes[] $taxes
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setTaxes(?array $taxes = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxesArrayErrorMessage = self::validateTaxesForArrayConstraintFromSetTaxes($taxes))) {
            throw new InvalidArgumentException($taxesArrayErrorMessage, __LINE__);
        }
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Add item to Taxes value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Taxes $item
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function addToTaxes(\Pggns\MidocoApi\Order\StructType\Taxes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Taxes) {
            throw new InvalidArgumentException(sprintf('The Taxes property can only contain items of type \Pggns\MidocoApi\Order\StructType\Taxes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Taxes[] = $item;
        
        return $this;
    }
    /**
     * Get AgeingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AgeingInfo|null
     */
    public function getAgeingInfo(): ?\Pggns\MidocoApi\Order\StructType\AgeingInfo
    {
        return $this->AgeingInfo;
    }
    /**
     * Set AgeingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\AgeingInfo $ageingInfo
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setAgeingInfo(?\Pggns\MidocoApi\Order\StructType\AgeingInfo $ageingInfo = null): self
    {
        $this->AgeingInfo = $ageingInfo;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
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
     * Get debitCreditIndicator value
     * @return string|null
     */
    public function getDebitCreditIndicator(): ?string
    {
        return $this->debitCreditIndicator;
    }
    /**
     * Set debitCreditIndicator value
     * @param string $debitCreditIndicator
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setDebitCreditIndicator(?string $debitCreditIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCreditIndicator) && !is_string($debitCreditIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCreditIndicator, true), gettype($debitCreditIndicator)), __LINE__);
        }
        $this->debitCreditIndicator = $debitCreditIndicator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
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
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get accountingPeriod value
     * @return int|null
     */
    public function getAccountingPeriod(): ?int
    {
        return $this->accountingPeriod;
    }
    /**
     * Set accountingPeriod value
     * @param int $accountingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setAccountingPeriod(?int $accountingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($accountingPeriod) && !(is_int($accountingPeriod) || ctype_digit($accountingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountingPeriod, true), gettype($accountingPeriod)), __LINE__);
        }
        $this->accountingPeriod = $accountingPeriod;
        
        return $this;
    }
    /**
     * Get accountingYear value
     * @return int|null
     */
    public function getAccountingYear(): ?int
    {
        return $this->accountingYear;
    }
    /**
     * Set accountingYear value
     * @param int $accountingYear
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setAccountingYear(?int $accountingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($accountingYear) && !(is_int($accountingYear) || ctype_digit($accountingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountingYear, true), gettype($accountingYear)), __LINE__);
        }
        $this->accountingYear = $accountingYear;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get supplierBookingId value
     * @return string|null
     */
    public function getSupplierBookingId(): ?string
    {
        return $this->supplierBookingId;
    }
    /**
     * Set supplierBookingId value
     * @param string $supplierBookingId
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine
     */
    public function setSupplierBookingId(?string $supplierBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierBookingId) && !is_string($supplierBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierBookingId, true), gettype($supplierBookingId)), __LINE__);
        }
        $this->supplierBookingId = $supplierBookingId;
        
        return $this;
    }
}
