<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionsForOrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTransactionsForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoTransactionRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransactionRecord
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord[]
     */
    protected ?array $MidocoTransactionRecord = null;
    /**
     * Constructor method for GetTransactionsForOrderResponse
     * @uses GetTransactionsForOrderResponse::setMidocoTransactionRecord()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord[] $midocoTransactionRecord
     */
    public function __construct(?array $midocoTransactionRecord = null)
    {
        $this
            ->setMidocoTransactionRecord($midocoTransactionRecord);
    }
    /**
     * Get MidocoTransactionRecord value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord[]
     */
    public function getMidocoTransactionRecord(): ?array
    {
        return $this->MidocoTransactionRecord;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTransactionRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransactionRecord method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransactionRecordForArrayConstraintFromSetMidocoTransactionRecord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTransactionsForOrderResponseMidocoTransactionRecordItem) {
            // validation for constraint: itemType
            if (!$getTransactionsForOrderResponseMidocoTransactionRecordItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord) {
                $invalidValues[] = is_object($getTransactionsForOrderResponseMidocoTransactionRecordItem) ? get_class($getTransactionsForOrderResponseMidocoTransactionRecordItem) : sprintf('%s(%s)', gettype($getTransactionsForOrderResponseMidocoTransactionRecordItem), var_export($getTransactionsForOrderResponseMidocoTransactionRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransactionRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransactionRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord[] $midocoTransactionRecord
     * @return \Pggns\MidocoApi\Order\StructType\GetTransactionsForOrderResponse
     */
    public function setMidocoTransactionRecord(?array $midocoTransactionRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransactionRecordArrayErrorMessage = self::validateMidocoTransactionRecordForArrayConstraintFromSetMidocoTransactionRecord($midocoTransactionRecord))) {
            throw new InvalidArgumentException($midocoTransactionRecordArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransactionRecord = $midocoTransactionRecord;
        
        return $this;
    }
    /**
     * Add item to MidocoTransactionRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTransactionsForOrderResponse
     */
    public function addToMidocoTransactionRecord(\Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord) {
            throw new InvalidArgumentException(sprintf('The MidocoTransactionRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransactionRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransactionRecord[] = $item;
        
        return $this;
    }
}
