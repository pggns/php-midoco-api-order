<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCmsHotelDataRequestType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCmsHotelDataRequestType extends AbstractStructBase
{
    /**
     * The MidocoTravelCms
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelCms
     * @var \Pggns\MidocoApi\Order\StructType\TravelCmDTO[]
     */
    protected ?array $MidocoTravelCms = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The hotelcode
     * @var string|null
     */
    protected ?string $hotelcode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for GetCmsHotelDataRequestType
     * @uses GetCmsHotelDataRequestType::setMidocoTravelCms()
     * @uses GetCmsHotelDataRequestType::setSupplierId()
     * @uses GetCmsHotelDataRequestType::setHotelcode()
     * @uses GetCmsHotelDataRequestType::setItemId()
     * @uses GetCmsHotelDataRequestType::setPosition()
     * @param \Pggns\MidocoApi\Order\StructType\TravelCmDTO[] $midocoTravelCms
     * @param string $supplierId
     * @param string $hotelcode
     * @param int $itemId
     * @param int $position
     */
    public function __construct(?array $midocoTravelCms = null, ?string $supplierId = null, ?string $hotelcode = null, ?int $itemId = null, ?int $position = null)
    {
        $this
            ->setMidocoTravelCms($midocoTravelCms)
            ->setSupplierId($supplierId)
            ->setHotelcode($hotelcode)
            ->setItemId($itemId)
            ->setPosition($position);
    }
    /**
     * Get MidocoTravelCms value
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO[]
     */
    public function getMidocoTravelCms(): ?array
    {
        return $this->MidocoTravelCms;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelCms method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelCms method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelCmsForArrayConstraintFromSetMidocoTravelCms(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCmsHotelDataRequestTypeMidocoTravelCmsItem) {
            // validation for constraint: itemType
            if (!$getCmsHotelDataRequestTypeMidocoTravelCmsItem instanceof \Pggns\MidocoApi\Order\StructType\TravelCmDTO) {
                $invalidValues[] = is_object($getCmsHotelDataRequestTypeMidocoTravelCmsItem) ? get_class($getCmsHotelDataRequestTypeMidocoTravelCmsItem) : sprintf('%s(%s)', gettype($getCmsHotelDataRequestTypeMidocoTravelCmsItem), var_export($getCmsHotelDataRequestTypeMidocoTravelCmsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelCms property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelCmDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelCms value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelCmDTO[] $midocoTravelCms
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setMidocoTravelCms(?array $midocoTravelCms = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelCmsArrayErrorMessage = self::validateMidocoTravelCmsForArrayConstraintFromSetMidocoTravelCms($midocoTravelCms))) {
            throw new InvalidArgumentException($midocoTravelCmsArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelCms = $midocoTravelCms;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelCms value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelCmDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function addToMidocoTravelCms(\Pggns\MidocoApi\Order\StructType\TravelCmDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelCmDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelCms property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelCmDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelCms[] = $item;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get hotelcode value
     * @return string|null
     */
    public function getHotelcode(): ?string
    {
        return $this->hotelcode;
    }
    /**
     * Set hotelcode value
     * @param string $hotelcode
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setHotelcode(?string $hotelcode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelcode) && !is_string($hotelcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelcode, true), gettype($hotelcode)), __LINE__);
        }
        $this->hotelcode = $hotelcode;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataRequestType
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
