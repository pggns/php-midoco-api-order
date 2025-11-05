<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderICalContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderICalContentResponse extends AbstractStructBase
{
    /**
     * The icalBytes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $icalBytes = null;
    /**
     * Constructor method for GetOrderICalContentResponse
     * @uses GetOrderICalContentResponse::setIcalBytes()
     * @param string[] $icalBytes
     */
    public function __construct(?array $icalBytes = null)
    {
        $this
            ->setIcalBytes($icalBytes);
    }
    /**
     * Get icalBytes value
     * @return string[]
     */
    public function getIcalBytes(): ?array
    {
        return $this->icalBytes;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIcalBytes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIcalBytes method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIcalBytesForArrayConstraintFromSetIcalBytes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderICalContentResponseIcalBytesItem) {
            // validation for constraint: itemType
            if (!is_string($getOrderICalContentResponseIcalBytesItem)) {
                $invalidValues[] = is_object($getOrderICalContentResponseIcalBytesItem) ? get_class($getOrderICalContentResponseIcalBytesItem) : sprintf('%s(%s)', gettype($getOrderICalContentResponseIcalBytesItem), var_export($getOrderICalContentResponseIcalBytesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The icalBytes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set icalBytes value
     * @throws InvalidArgumentException
     * @param string[] $icalBytes
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderICalContentResponse
     */
    public function setIcalBytes(?array $icalBytes = null): self
    {
        // validation for constraint: array
        if ('' !== ($icalBytesArrayErrorMessage = self::validateIcalBytesForArrayConstraintFromSetIcalBytes($icalBytes))) {
            throw new InvalidArgumentException($icalBytesArrayErrorMessage, __LINE__);
        }
        $this->icalBytes = $icalBytes;
        
        return $this;
    }
    /**
     * Add item to icalBytes value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderICalContentResponse
     */
    public function addToIcalBytes(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The icalBytes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->icalBytes[] = $item;
        
        return $this;
    }
}
