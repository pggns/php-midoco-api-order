<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersContactHistoryForCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdersContactHistoryForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    protected ?array $MidocoOrderContactHistory = null;
    /**
     * Constructor method for GetOrdersContactHistoryForCustomerResponse
     * @uses GetOrdersContactHistoryForCustomerResponse::setMidocoOrderContactHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[] $midocoOrderContactHistory
     */
    public function __construct(?array $midocoOrderContactHistory = null)
    {
        $this
            ->setMidocoOrderContactHistory($midocoOrderContactHistory);
    }
    /**
     * Get MidocoOrderContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    public function getMidocoOrderContactHistory(): ?array
    {
        return $this->MidocoOrderContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderContactHistoryForArrayConstraintFromSetMidocoOrderContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem) {
            // validation for constraint: itemType
            if (!$getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory) {
                $invalidValues[] = is_object($getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem) ? get_class($getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem) : sprintf('%s(%s)', gettype($getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem), var_export($getOrdersContactHistoryForCustomerResponseMidocoOrderContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[] $midocoOrderContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersContactHistoryForCustomerResponse
     */
    public function setMidocoOrderContactHistory(?array $midocoOrderContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderContactHistoryArrayErrorMessage = self::validateMidocoOrderContactHistoryForArrayConstraintFromSetMidocoOrderContactHistory($midocoOrderContactHistory))) {
            throw new InvalidArgumentException($midocoOrderContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderContactHistory = $midocoOrderContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersContactHistoryForCustomerResponse
     */
    public function addToMidocoOrderContactHistory(\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderContactHistory[] = $item;
        
        return $this;
    }
}
