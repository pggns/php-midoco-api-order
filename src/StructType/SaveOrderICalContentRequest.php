<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderICalContentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderICalContentRequest extends AbstractStructBase
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SaveOrderICalContentRequest
     * @uses SaveOrderICalContentRequest::setIcalBytes()
     * @uses SaveOrderICalContentRequest::setOrderId()
     * @uses SaveOrderICalContentRequest::setUnitName()
     * @param string[] $icalBytes
     * @param int $orderId
     * @param string $unitName
     */
    public function __construct(?array $icalBytes = null, ?int $orderId = null, ?string $unitName = null)
    {
        $this
            ->setIcalBytes($icalBytes)
            ->setOrderId($orderId)
            ->setUnitName($unitName);
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
        foreach ($values as $saveOrderICalContentRequestIcalBytesItem) {
            // validation for constraint: itemType
            if (!is_string($saveOrderICalContentRequestIcalBytesItem)) {
                $invalidValues[] = is_object($saveOrderICalContentRequestIcalBytesItem) ? get_class($saveOrderICalContentRequestIcalBytesItem) : sprintf('%s(%s)', gettype($saveOrderICalContentRequestIcalBytesItem), var_export($saveOrderICalContentRequestIcalBytesItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentRequest
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
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
