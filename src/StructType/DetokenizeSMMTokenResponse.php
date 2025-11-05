<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetokenizeSMMTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DetokenizeSMMTokenResponse extends AbstractStructBase
{
    /**
     * The SmmDetokenizedPair
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SmmDetokenizedPair
     * @var \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair[]
     */
    protected ?array $SmmDetokenizedPair = null;
    /**
     * The detokenize
     * @var string|null
     */
    protected ?string $detokenize = null;
    /**
     * Constructor method for DetokenizeSMMTokenResponse
     * @uses DetokenizeSMMTokenResponse::setSmmDetokenizedPair()
     * @uses DetokenizeSMMTokenResponse::setDetokenize()
     * @param \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair[] $smmDetokenizedPair
     * @param string $detokenize
     */
    public function __construct(?array $smmDetokenizedPair = null, ?string $detokenize = null)
    {
        $this
            ->setSmmDetokenizedPair($smmDetokenizedPair)
            ->setDetokenize($detokenize);
    }
    /**
     * Get SmmDetokenizedPair value
     * @return \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair[]
     */
    public function getSmmDetokenizedPair(): ?array
    {
        return $this->SmmDetokenizedPair;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSmmDetokenizedPair method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSmmDetokenizedPair method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSmmDetokenizedPairForArrayConstraintFromSetSmmDetokenizedPair(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $detokenizeSMMTokenResponseSmmDetokenizedPairItem) {
            // validation for constraint: itemType
            if (!$detokenizeSMMTokenResponseSmmDetokenizedPairItem instanceof \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair) {
                $invalidValues[] = is_object($detokenizeSMMTokenResponseSmmDetokenizedPairItem) ? get_class($detokenizeSMMTokenResponseSmmDetokenizedPairItem) : sprintf('%s(%s)', gettype($detokenizeSMMTokenResponseSmmDetokenizedPairItem), var_export($detokenizeSMMTokenResponseSmmDetokenizedPairItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SmmDetokenizedPair property can only contain items of type \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SmmDetokenizedPair value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair[] $smmDetokenizedPair
     * @return \Pggns\MidocoApi\Order\StructType\DetokenizeSMMTokenResponse
     */
    public function setSmmDetokenizedPair(?array $smmDetokenizedPair = null): self
    {
        // validation for constraint: array
        if ('' !== ($smmDetokenizedPairArrayErrorMessage = self::validateSmmDetokenizedPairForArrayConstraintFromSetSmmDetokenizedPair($smmDetokenizedPair))) {
            throw new InvalidArgumentException($smmDetokenizedPairArrayErrorMessage, __LINE__);
        }
        $this->SmmDetokenizedPair = $smmDetokenizedPair;
        
        return $this;
    }
    /**
     * Add item to SmmDetokenizedPair value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair $item
     * @return \Pggns\MidocoApi\Order\StructType\DetokenizeSMMTokenResponse
     */
    public function addToSmmDetokenizedPair(\Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair) {
            throw new InvalidArgumentException(sprintf('The SmmDetokenizedPair property can only contain items of type \Pggns\MidocoApi\Order\StructType\SmmDetokenizedPair, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SmmDetokenizedPair[] = $item;
        
        return $this;
    }
    /**
     * Get detokenize value
     * @return string|null
     */
    public function getDetokenize(): ?string
    {
        return $this->detokenize;
    }
    /**
     * Set detokenize value
     * @param string $detokenize
     * @return \Pggns\MidocoApi\Order\StructType\DetokenizeSMMTokenResponse
     */
    public function setDetokenize(?string $detokenize = null): self
    {
        // validation for constraint: string
        if (!is_null($detokenize) && !is_string($detokenize)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detokenize, true), gettype($detokenize)), __LINE__);
        }
        $this->detokenize = $detokenize;
        
        return $this;
    }
}
