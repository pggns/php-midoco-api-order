<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderPaymentBalanceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderPaymentBalanceResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType[]
     */
    protected ?array $MidocoSupplierPayment = null;
    /**
     * The customerPaymentAmount
     * @var float|null
     */
    protected ?float $customerPaymentAmount = null;
    /**
     * The customerPaymentCurrency
     * @var string|null
     */
    protected ?string $customerPaymentCurrency = null;
    /**
     * The customerPaymentEquivAmount
     * @var float|null
     */
    protected ?float $customerPaymentEquivAmount = null;
    /**
     * The agencyPaidCommission
     * @var float|null
     */
    protected ?float $agencyPaidCommission = null;
    /**
     * The agencyPaidCommissionCurrency
     * @var string|null
     */
    protected ?string $agencyPaidCommissionCurrency = null;
    /**
     * The agencyPaidCommissionEquiv
     * @var float|null
     */
    protected ?float $agencyPaidCommissionEquiv = null;
    /**
     * The mediatorPaidCommission
     * @var float|null
     */
    protected ?float $mediatorPaidCommission = null;
    /**
     * The mediatorPaidCommissionCurrency
     * @var string|null
     */
    protected ?string $mediatorPaidCommissionCurrency = null;
    /**
     * The mediatorPaidCommissionEquiv
     * @var float|null
     */
    protected ?float $mediatorPaidCommissionEquiv = null;
    /**
     * The totalSupplierEquivPaymentAmount
     * @var float|null
     */
    protected ?float $totalSupplierEquivPaymentAmount = null;
    /**
     * Constructor method for GetOrderPaymentBalanceResponse
     * @uses GetOrderPaymentBalanceResponse::setMidocoSupplierPayment()
     * @uses GetOrderPaymentBalanceResponse::setCustomerPaymentAmount()
     * @uses GetOrderPaymentBalanceResponse::setCustomerPaymentCurrency()
     * @uses GetOrderPaymentBalanceResponse::setCustomerPaymentEquivAmount()
     * @uses GetOrderPaymentBalanceResponse::setAgencyPaidCommission()
     * @uses GetOrderPaymentBalanceResponse::setAgencyPaidCommissionCurrency()
     * @uses GetOrderPaymentBalanceResponse::setAgencyPaidCommissionEquiv()
     * @uses GetOrderPaymentBalanceResponse::setMediatorPaidCommission()
     * @uses GetOrderPaymentBalanceResponse::setMediatorPaidCommissionCurrency()
     * @uses GetOrderPaymentBalanceResponse::setMediatorPaidCommissionEquiv()
     * @uses GetOrderPaymentBalanceResponse::setTotalSupplierEquivPaymentAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType[] $midocoSupplierPayment
     * @param float $customerPaymentAmount
     * @param string $customerPaymentCurrency
     * @param float $customerPaymentEquivAmount
     * @param float $agencyPaidCommission
     * @param string $agencyPaidCommissionCurrency
     * @param float $agencyPaidCommissionEquiv
     * @param float $mediatorPaidCommission
     * @param string $mediatorPaidCommissionCurrency
     * @param float $mediatorPaidCommissionEquiv
     * @param float $totalSupplierEquivPaymentAmount
     */
    public function __construct(?array $midocoSupplierPayment = null, ?float $customerPaymentAmount = null, ?string $customerPaymentCurrency = null, ?float $customerPaymentEquivAmount = null, ?float $agencyPaidCommission = null, ?string $agencyPaidCommissionCurrency = null, ?float $agencyPaidCommissionEquiv = null, ?float $mediatorPaidCommission = null, ?string $mediatorPaidCommissionCurrency = null, ?float $mediatorPaidCommissionEquiv = null, ?float $totalSupplierEquivPaymentAmount = null)
    {
        $this
            ->setMidocoSupplierPayment($midocoSupplierPayment)
            ->setCustomerPaymentAmount($customerPaymentAmount)
            ->setCustomerPaymentCurrency($customerPaymentCurrency)
            ->setCustomerPaymentEquivAmount($customerPaymentEquivAmount)
            ->setAgencyPaidCommission($agencyPaidCommission)
            ->setAgencyPaidCommissionCurrency($agencyPaidCommissionCurrency)
            ->setAgencyPaidCommissionEquiv($agencyPaidCommissionEquiv)
            ->setMediatorPaidCommission($mediatorPaidCommission)
            ->setMediatorPaidCommissionCurrency($mediatorPaidCommissionCurrency)
            ->setMediatorPaidCommissionEquiv($mediatorPaidCommissionEquiv)
            ->setTotalSupplierEquivPaymentAmount($totalSupplierEquivPaymentAmount);
    }
    /**
     * Get MidocoSupplierPayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType[]
     */
    public function getMidocoSupplierPayment(): ?array
    {
        return $this->MidocoSupplierPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierPaymentForArrayConstraintFromSetMidocoSupplierPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderPaymentBalanceResponseMidocoSupplierPaymentItem) {
            // validation for constraint: itemType
            if (!$getOrderPaymentBalanceResponseMidocoSupplierPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType) {
                $invalidValues[] = is_object($getOrderPaymentBalanceResponseMidocoSupplierPaymentItem) ? get_class($getOrderPaymentBalanceResponseMidocoSupplierPaymentItem) : sprintf('%s(%s)', gettype($getOrderPaymentBalanceResponseMidocoSupplierPaymentItem), var_export($getOrderPaymentBalanceResponseMidocoSupplierPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType[] $midocoSupplierPayment
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setMidocoSupplierPayment(?array $midocoSupplierPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierPaymentArrayErrorMessage = self::validateMidocoSupplierPaymentForArrayConstraintFromSetMidocoSupplierPayment($midocoSupplierPayment))) {
            throw new InvalidArgumentException($midocoSupplierPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierPayment = $midocoSupplierPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function addToMidocoSupplierPayment(\Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierPayment[] = $item;
        
        return $this;
    }
    /**
     * Get customerPaymentAmount value
     * @return float|null
     */
    public function getCustomerPaymentAmount(): ?float
    {
        return $this->customerPaymentAmount;
    }
    /**
     * Set customerPaymentAmount value
     * @param float $customerPaymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setCustomerPaymentAmount(?float $customerPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($customerPaymentAmount) && !(is_float($customerPaymentAmount) || is_numeric($customerPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerPaymentAmount, true), gettype($customerPaymentAmount)), __LINE__);
        }
        $this->customerPaymentAmount = $customerPaymentAmount;
        
        return $this;
    }
    /**
     * Get customerPaymentCurrency value
     * @return string|null
     */
    public function getCustomerPaymentCurrency(): ?string
    {
        return $this->customerPaymentCurrency;
    }
    /**
     * Set customerPaymentCurrency value
     * @param string $customerPaymentCurrency
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setCustomerPaymentCurrency(?string $customerPaymentCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPaymentCurrency) && !is_string($customerPaymentCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPaymentCurrency, true), gettype($customerPaymentCurrency)), __LINE__);
        }
        $this->customerPaymentCurrency = $customerPaymentCurrency;
        
        return $this;
    }
    /**
     * Get customerPaymentEquivAmount value
     * @return float|null
     */
    public function getCustomerPaymentEquivAmount(): ?float
    {
        return $this->customerPaymentEquivAmount;
    }
    /**
     * Set customerPaymentEquivAmount value
     * @param float $customerPaymentEquivAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setCustomerPaymentEquivAmount(?float $customerPaymentEquivAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($customerPaymentEquivAmount) && !(is_float($customerPaymentEquivAmount) || is_numeric($customerPaymentEquivAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerPaymentEquivAmount, true), gettype($customerPaymentEquivAmount)), __LINE__);
        }
        $this->customerPaymentEquivAmount = $customerPaymentEquivAmount;
        
        return $this;
    }
    /**
     * Get agencyPaidCommission value
     * @return float|null
     */
    public function getAgencyPaidCommission(): ?float
    {
        return $this->agencyPaidCommission;
    }
    /**
     * Set agencyPaidCommission value
     * @param float $agencyPaidCommission
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setAgencyPaidCommission(?float $agencyPaidCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyPaidCommission) && !(is_float($agencyPaidCommission) || is_numeric($agencyPaidCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyPaidCommission, true), gettype($agencyPaidCommission)), __LINE__);
        }
        $this->agencyPaidCommission = $agencyPaidCommission;
        
        return $this;
    }
    /**
     * Get agencyPaidCommissionCurrency value
     * @return string|null
     */
    public function getAgencyPaidCommissionCurrency(): ?string
    {
        return $this->agencyPaidCommissionCurrency;
    }
    /**
     * Set agencyPaidCommissionCurrency value
     * @param string $agencyPaidCommissionCurrency
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setAgencyPaidCommissionCurrency(?string $agencyPaidCommissionCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyPaidCommissionCurrency) && !is_string($agencyPaidCommissionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyPaidCommissionCurrency, true), gettype($agencyPaidCommissionCurrency)), __LINE__);
        }
        $this->agencyPaidCommissionCurrency = $agencyPaidCommissionCurrency;
        
        return $this;
    }
    /**
     * Get agencyPaidCommissionEquiv value
     * @return float|null
     */
    public function getAgencyPaidCommissionEquiv(): ?float
    {
        return $this->agencyPaidCommissionEquiv;
    }
    /**
     * Set agencyPaidCommissionEquiv value
     * @param float $agencyPaidCommissionEquiv
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setAgencyPaidCommissionEquiv(?float $agencyPaidCommissionEquiv = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyPaidCommissionEquiv) && !(is_float($agencyPaidCommissionEquiv) || is_numeric($agencyPaidCommissionEquiv))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyPaidCommissionEquiv, true), gettype($agencyPaidCommissionEquiv)), __LINE__);
        }
        $this->agencyPaidCommissionEquiv = $agencyPaidCommissionEquiv;
        
        return $this;
    }
    /**
     * Get mediatorPaidCommission value
     * @return float|null
     */
    public function getMediatorPaidCommission(): ?float
    {
        return $this->mediatorPaidCommission;
    }
    /**
     * Set mediatorPaidCommission value
     * @param float $mediatorPaidCommission
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setMediatorPaidCommission(?float $mediatorPaidCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorPaidCommission) && !(is_float($mediatorPaidCommission) || is_numeric($mediatorPaidCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorPaidCommission, true), gettype($mediatorPaidCommission)), __LINE__);
        }
        $this->mediatorPaidCommission = $mediatorPaidCommission;
        
        return $this;
    }
    /**
     * Get mediatorPaidCommissionCurrency value
     * @return string|null
     */
    public function getMediatorPaidCommissionCurrency(): ?string
    {
        return $this->mediatorPaidCommissionCurrency;
    }
    /**
     * Set mediatorPaidCommissionCurrency value
     * @param string $mediatorPaidCommissionCurrency
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setMediatorPaidCommissionCurrency(?string $mediatorPaidCommissionCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorPaidCommissionCurrency) && !is_string($mediatorPaidCommissionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorPaidCommissionCurrency, true), gettype($mediatorPaidCommissionCurrency)), __LINE__);
        }
        $this->mediatorPaidCommissionCurrency = $mediatorPaidCommissionCurrency;
        
        return $this;
    }
    /**
     * Get mediatorPaidCommissionEquiv value
     * @return float|null
     */
    public function getMediatorPaidCommissionEquiv(): ?float
    {
        return $this->mediatorPaidCommissionEquiv;
    }
    /**
     * Set mediatorPaidCommissionEquiv value
     * @param float $mediatorPaidCommissionEquiv
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setMediatorPaidCommissionEquiv(?float $mediatorPaidCommissionEquiv = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorPaidCommissionEquiv) && !(is_float($mediatorPaidCommissionEquiv) || is_numeric($mediatorPaidCommissionEquiv))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorPaidCommissionEquiv, true), gettype($mediatorPaidCommissionEquiv)), __LINE__);
        }
        $this->mediatorPaidCommissionEquiv = $mediatorPaidCommissionEquiv;
        
        return $this;
    }
    /**
     * Get totalSupplierEquivPaymentAmount value
     * @return float|null
     */
    public function getTotalSupplierEquivPaymentAmount(): ?float
    {
        return $this->totalSupplierEquivPaymentAmount;
    }
    /**
     * Set totalSupplierEquivPaymentAmount value
     * @param float $totalSupplierEquivPaymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentBalanceResponse
     */
    public function setTotalSupplierEquivPaymentAmount(?float $totalSupplierEquivPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSupplierEquivPaymentAmount) && !(is_float($totalSupplierEquivPaymentAmount) || is_numeric($totalSupplierEquivPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSupplierEquivPaymentAmount, true), gettype($totalSupplierEquivPaymentAmount)), __LINE__);
        }
        $this->totalSupplierEquivPaymentAmount = $totalSupplierEquivPaymentAmount;
        
        return $this;
    }
}
