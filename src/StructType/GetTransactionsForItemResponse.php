<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionsForItemResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTransactionsForItemResponse extends AbstractStructBase
{
    /**
     * The MidocoTransactionJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransactionJournal
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal[]
     */
    protected ?array $MidocoTransactionJournal = null;
    /**
     * Constructor method for GetTransactionsForItemResponse
     * @uses GetTransactionsForItemResponse::setMidocoTransactionJournal()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal[] $midocoTransactionJournal
     */
    public function __construct(?array $midocoTransactionJournal = null)
    {
        $this
            ->setMidocoTransactionJournal($midocoTransactionJournal);
    }
    /**
     * Get MidocoTransactionJournal value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal[]
     */
    public function getMidocoTransactionJournal(): ?array
    {
        return $this->MidocoTransactionJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTransactionJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransactionJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransactionJournalForArrayConstraintFromSetMidocoTransactionJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTransactionsForItemResponseMidocoTransactionJournalItem) {
            // validation for constraint: itemType
            if (!$getTransactionsForItemResponseMidocoTransactionJournalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal) {
                $invalidValues[] = is_object($getTransactionsForItemResponseMidocoTransactionJournalItem) ? get_class($getTransactionsForItemResponseMidocoTransactionJournalItem) : sprintf('%s(%s)', gettype($getTransactionsForItemResponseMidocoTransactionJournalItem), var_export($getTransactionsForItemResponseMidocoTransactionJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransactionJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransactionJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal[] $midocoTransactionJournal
     * @return \Pggns\MidocoApi\Order\StructType\GetTransactionsForItemResponse
     */
    public function setMidocoTransactionJournal(?array $midocoTransactionJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransactionJournalArrayErrorMessage = self::validateMidocoTransactionJournalForArrayConstraintFromSetMidocoTransactionJournal($midocoTransactionJournal))) {
            throw new InvalidArgumentException($midocoTransactionJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransactionJournal = $midocoTransactionJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoTransactionJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTransactionsForItemResponse
     */
    public function addToMidocoTransactionJournal(\Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoTransactionJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransactionJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransactionJournal[] = $item;
        
        return $this;
    }
}
