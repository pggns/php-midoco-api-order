<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceExternalPaymentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceExternalPaymentResponse extends AbstractStructBase
{
    /**
     * The ExternalPaymentResultType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ExternalPaymentResultType
     * @var \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType[]
     */
    protected ?array $ExternalPaymentResultType = null;
    /**
     * Constructor method for AnnounceExternalPaymentResponse
     * @uses AnnounceExternalPaymentResponse::setExternalPaymentResultType()
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType[] $externalPaymentResultType
     */
    public function __construct(?array $externalPaymentResultType = null)
    {
        $this
            ->setExternalPaymentResultType($externalPaymentResultType);
    }
    /**
     * Get ExternalPaymentResultType value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType[]
     */
    public function getExternalPaymentResultType(): ?array
    {
        return $this->ExternalPaymentResultType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalPaymentResultType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPaymentResultType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentResultTypeForArrayConstraintFromSetExternalPaymentResultType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceExternalPaymentResponseExternalPaymentResultTypeItem) {
            // validation for constraint: itemType
            if (!$announceExternalPaymentResponseExternalPaymentResultTypeItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType) {
                $invalidValues[] = is_object($announceExternalPaymentResponseExternalPaymentResultTypeItem) ? get_class($announceExternalPaymentResponseExternalPaymentResultTypeItem) : sprintf('%s(%s)', gettype($announceExternalPaymentResponseExternalPaymentResultTypeItem), var_export($announceExternalPaymentResponseExternalPaymentResultTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPaymentResultType property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPaymentResultType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType[] $externalPaymentResultType
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentResponse
     */
    public function setExternalPaymentResultType(?array $externalPaymentResultType = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentResultTypeArrayErrorMessage = self::validateExternalPaymentResultTypeForArrayConstraintFromSetExternalPaymentResultType($externalPaymentResultType))) {
            throw new InvalidArgumentException($externalPaymentResultTypeArrayErrorMessage, __LINE__);
        }
        $this->ExternalPaymentResultType = $externalPaymentResultType;
        
        return $this;
    }
    /**
     * Add item to ExternalPaymentResultType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentResponse
     */
    public function addToExternalPaymentResultType(\Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType) {
            throw new InvalidArgumentException(sprintf('The ExternalPaymentResultType property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPaymentResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPaymentResultType[] = $item;
        
        return $this;
    }
}
