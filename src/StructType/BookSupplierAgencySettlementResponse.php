<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookSupplierAgencySettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookSupplierAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencySettlementError
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError[]
     */
    protected ?array $MidocoSupplierAgencySettlementError = null;
    /**
     * Constructor method for BookSupplierAgencySettlementResponse
     * @uses BookSupplierAgencySettlementResponse::setMidocoSupplierAgencySettlementError()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError[] $midocoSupplierAgencySettlementError
     */
    public function __construct(?array $midocoSupplierAgencySettlementError = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementError($midocoSupplierAgencySettlementError);
    }
    /**
     * Get MidocoSupplierAgencySettlementError value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError[]
     */
    public function getMidocoSupplierAgencySettlementError(): ?array
    {
        return $this->MidocoSupplierAgencySettlementError;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgencySettlementError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgencySettlementError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencySettlementErrorForArrayConstraintFromSetMidocoSupplierAgencySettlementError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem) {
            // validation for constraint: itemType
            if (!$bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError) {
                $invalidValues[] = is_object($bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem) ? get_class($bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem) : sprintf('%s(%s)', gettype($bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem), var_export($bookSupplierAgencySettlementResponseMidocoSupplierAgencySettlementErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgencySettlementError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgencySettlementError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError[] $midocoSupplierAgencySettlementError
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementResponse
     */
    public function setMidocoSupplierAgencySettlementError(?array $midocoSupplierAgencySettlementError = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencySettlementErrorArrayErrorMessage = self::validateMidocoSupplierAgencySettlementErrorForArrayConstraintFromSetMidocoSupplierAgencySettlementError($midocoSupplierAgencySettlementError))) {
            throw new InvalidArgumentException($midocoSupplierAgencySettlementErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgencySettlementError = $midocoSupplierAgencySettlementError;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgencySettlementError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError $item
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementResponse
     */
    public function addToMidocoSupplierAgencySettlementError(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgencySettlementError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlementError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgencySettlementError[] = $item;
        
        return $this;
    }
}
