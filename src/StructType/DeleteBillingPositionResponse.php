<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPositionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteBillingPosition --- delete a given billing position
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBillingPositionResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:Error
     * @var \Pggns\MidocoApi\Order\StructType\Error[]
     */
    protected ?array $Error = null;
    /**
     * Constructor method for DeleteBillingPositionResponse
     * @uses DeleteBillingPositionResponse::setMidocoBillingDocument()
     * @uses DeleteBillingPositionResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?array $error = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setError($error);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\Order\StructType\Error[]
     */
    public function getError(): ?array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBillingPositionResponseErrorItem) {
            // validation for constraint: itemType
            if (!$deleteBillingPositionResponseErrorItem instanceof \Pggns\MidocoApi\Order\StructType\Error) {
                $invalidValues[] = is_object($deleteBillingPositionResponseErrorItem) ? get_class($deleteBillingPositionResponseErrorItem) : sprintf('%s(%s)', gettype($deleteBillingPositionResponseErrorItem), var_export($deleteBillingPositionResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Add item to Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionResponse
     */
    public function addToError(\Pggns\MidocoApi\Order\StructType\Error $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Error) {
            throw new InvalidArgumentException(sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        
        return $this;
    }
}
