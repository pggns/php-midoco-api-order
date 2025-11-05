<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationManagerLinkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDestinationManagerLinkResponse extends AbstractStructBase
{
    /**
     * The MidocoDestinationManagerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDestinationManagerInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo[]
     */
    protected ?array $MidocoDestinationManagerInfo = null;
    /**
     * Constructor method for GetDestinationManagerLinkResponse
     * @uses GetDestinationManagerLinkResponse::setMidocoDestinationManagerInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo[] $midocoDestinationManagerInfo
     */
    public function __construct(?array $midocoDestinationManagerInfo = null)
    {
        $this
            ->setMidocoDestinationManagerInfo($midocoDestinationManagerInfo);
    }
    /**
     * Get MidocoDestinationManagerInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo[]
     */
    public function getMidocoDestinationManagerInfo(): ?array
    {
        return $this->MidocoDestinationManagerInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDestinationManagerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDestinationManagerInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDestinationManagerInfoForArrayConstraintFromSetMidocoDestinationManagerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem) {
            // validation for constraint: itemType
            if (!$getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo) {
                $invalidValues[] = is_object($getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem) ? get_class($getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem) : sprintf('%s(%s)', gettype($getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem), var_export($getDestinationManagerLinkResponseMidocoDestinationManagerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDestinationManagerInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDestinationManagerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo[] $midocoDestinationManagerInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationManagerLinkResponse
     */
    public function setMidocoDestinationManagerInfo(?array $midocoDestinationManagerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDestinationManagerInfoArrayErrorMessage = self::validateMidocoDestinationManagerInfoForArrayConstraintFromSetMidocoDestinationManagerInfo($midocoDestinationManagerInfo))) {
            throw new InvalidArgumentException($midocoDestinationManagerInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoDestinationManagerInfo = $midocoDestinationManagerInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoDestinationManagerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationManagerLinkResponse
     */
    public function addToMidocoDestinationManagerInfo(\Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoDestinationManagerInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDestinationManagerInfo[] = $item;
        
        return $this;
    }
}
