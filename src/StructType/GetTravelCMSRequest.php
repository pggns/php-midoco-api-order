<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelCMSRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelCMSRequest extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for GetTravelCMSRequest
     * @uses GetTravelCMSRequest::setItemId()
     * @uses GetTravelCMSRequest::setHotelCode()
     * @uses GetTravelCMSRequest::setPosition()
     * @param int $itemId
     * @param string $hotelCode
     * @param int $position
     */
    public function __construct(?int $itemId = null, ?string $hotelCode = null, ?int $position = null)
    {
        $this
            ->setItemId($itemId)
            ->setHotelCode($hotelCode)
            ->setPosition($position);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelCMSRequest
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
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelCMSRequest
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelCMSRequest
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
