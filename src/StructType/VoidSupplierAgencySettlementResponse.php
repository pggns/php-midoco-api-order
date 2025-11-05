<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidSupplierAgencySettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidSupplierAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    protected ?array $MidocoFault = null;
    /**
     * The MidocoSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $MidocoSupplierAgencySettlement = null;
    /**
     * Constructor method for VoidSupplierAgencySettlementResponse
     * @uses VoidSupplierAgencySettlementResponse::setMidocoFault()
     * @uses VoidSupplierAgencySettlementResponse::setMidocoSupplierAgencySettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     */
    public function __construct(?array $midocoFault = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null)
    {
        $this
            ->setMidocoFault($midocoFault)
            ->setMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement);
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): ?array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintFromSetMidocoFault(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $voidSupplierAgencySettlementResponseMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$voidSupplierAgencySettlementResponseMidocoFaultItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($voidSupplierAgencySettlementResponseMidocoFaultItem) ? get_class($voidSupplierAgencySettlementResponseMidocoFaultItem) : sprintf('%s(%s)', gettype($voidSupplierAgencySettlementResponseMidocoFaultItem), var_export($voidSupplierAgencySettlementResponseMidocoFaultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementResponse
     */
    public function setMidocoFault(?array $midocoFault = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementResponse
     */
    public function addToMidocoFault(\Pggns\MidocoApi\Order\StructType\MidocoFaultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
            throw new InvalidArgumentException(sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFault[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAgencySettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    public function getMidocoSupplierAgencySettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement
    {
        return $this->MidocoSupplierAgencySettlement;
    }
    /**
     * Set MidocoSupplierAgencySettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     * @return \Pggns\MidocoApi\Order\StructType\VoidSupplierAgencySettlementResponse
     */
    public function setMidocoSupplierAgencySettlement(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null): self
    {
        $this->MidocoSupplierAgencySettlement = $midocoSupplierAgencySettlement;
        
        return $this;
    }
}
