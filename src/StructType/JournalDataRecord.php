<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalDataRecord StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class JournalDataRecord extends AbstractStructBase
{
    /**
     * The JournalLine
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 2
     * - ref: JournalLine
     * @var \Pggns\MidocoApi\Order\StructType\JournalLine[]
     */
    protected array $JournalLine;
    /**
     * Constructor method for JournalDataRecord
     * @uses JournalDataRecord::setJournalLine()
     * @param \Pggns\MidocoApi\Order\StructType\JournalLine[] $journalLine
     */
    public function __construct(array $journalLine)
    {
        $this
            ->setJournalLine($journalLine);
    }
    /**
     * Get JournalLine value
     * @return \Pggns\MidocoApi\Order\StructType\JournalLine[]
     */
    public function getJournalLine(): array
    {
        return $this->JournalLine;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJournalLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalLine method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalLineForArrayConstraintFromSetJournalLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $journalDataRecordJournalLineItem) {
            // validation for constraint: itemType
            if (!$journalDataRecordJournalLineItem instanceof \Pggns\MidocoApi\Order\StructType\JournalLine) {
                $invalidValues[] = is_object($journalDataRecordJournalLineItem) ? get_class($journalDataRecordJournalLineItem) : sprintf('%s(%s)', gettype($journalDataRecordJournalLineItem), var_export($journalDataRecordJournalLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JournalLine property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JournalLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalLine[] $journalLine
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setJournalLine(array $journalLine): self
    {
        // validation for constraint: array
        if ('' !== ($journalLineArrayErrorMessage = self::validateJournalLineForArrayConstraintFromSetJournalLine($journalLine))) {
            throw new InvalidArgumentException($journalLineArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($journalLine) && count($journalLine) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($journalLine)), __LINE__);
        }
        $this->JournalLine = $journalLine;
        
        return $this;
    }
    /**
     * Add item to JournalLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalLine $item
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function addToJournalLine(\Pggns\MidocoApi\Order\StructType\JournalLine $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\JournalLine) {
            throw new InvalidArgumentException(sprintf('The JournalLine property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->JournalLine) && count($this->JournalLine) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->JournalLine)), __LINE__);
        }
        $this->JournalLine[] = $item;
        
        return $this;
    }
}
