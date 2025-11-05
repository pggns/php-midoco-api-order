<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessSMMRefundRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessSMMRefundRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The source
     * @var string|null
     */
    protected ?string $source = null;
    /**
     * The payout
     * @var float|null
     */
    protected ?float $payout = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The smmVoucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SMMVoucherType[]
     */
    protected ?array $smmVoucher = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for ProcessSMMRefundRequest
     * @uses ProcessSMMRefundRequest::setCustomerId()
     * @uses ProcessSMMRefundRequest::setSource()
     * @uses ProcessSMMRefundRequest::setPayout()
     * @uses ProcessSMMRefundRequest::setMediatorId()
     * @uses ProcessSMMRefundRequest::setSmmVoucher()
     * @uses ProcessSMMRefundRequest::setMidocoSellItem()
     * @param string $customerId
     * @param string $source
     * @param float $payout
     * @param string $mediatorId
     * @param \Pggns\MidocoApi\Order\StructType\SMMVoucherType[] $smmVoucher
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?string $customerId = null, ?string $source = null, ?float $payout = null, ?string $mediatorId = null, ?array $smmVoucher = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSource($source)
            ->setPayout($payout)
            ->setMediatorId($mediatorId)
            ->setSmmVoucher($smmVoucher)
            ->setMidocoSellItem($midocoSellItem);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        
        return $this;
    }
    /**
     * Get payout value
     * @return float|null
     */
    public function getPayout(): ?float
    {
        return $this->payout;
    }
    /**
     * Set payout value
     * @param float $payout
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setPayout(?float $payout = null): self
    {
        // validation for constraint: float
        if (!is_null($payout) && !(is_float($payout) || is_numeric($payout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payout, true), gettype($payout)), __LINE__);
        }
        $this->payout = $payout;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get smmVoucher value
     * @return \Pggns\MidocoApi\Order\StructType\SMMVoucherType[]
     */
    public function getSmmVoucher(): ?array
    {
        return $this->smmVoucher;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSmmVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmmVoucher method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSmmVoucherForArrayConstraintFromSetSmmVoucher(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $processSMMRefundRequestSmmVoucherItem) {
            // validation for constraint: itemType
            if (!$processSMMRefundRequestSmmVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\SMMVoucherType) {
                $invalidValues[] = is_object($processSMMRefundRequestSmmVoucherItem) ? get_class($processSMMRefundRequestSmmVoucherItem) : sprintf('%s(%s)', gettype($processSMMRefundRequestSmmVoucherItem), var_export($processSMMRefundRequestSmmVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The smmVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\SMMVoucherType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set smmVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SMMVoucherType[] $smmVoucher
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setSmmVoucher(?array $smmVoucher = null): self
    {
        // validation for constraint: array
        if ('' !== ($smmVoucherArrayErrorMessage = self::validateSmmVoucherForArrayConstraintFromSetSmmVoucher($smmVoucher))) {
            throw new InvalidArgumentException($smmVoucherArrayErrorMessage, __LINE__);
        }
        $this->smmVoucher = $smmVoucher;
        
        return $this;
    }
    /**
     * Add item to smmVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SMMVoucherType $item
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function addToSmmVoucher(\Pggns\MidocoApi\Order\StructType\SMMVoucherType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SMMVoucherType) {
            throw new InvalidArgumentException(sprintf('The smmVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\SMMVoucherType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->smmVoucher[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Order\StructType\ProcessSMMRefundRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
