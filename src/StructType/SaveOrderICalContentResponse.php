<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderICalContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderICalContentResponse extends AbstractStructBase
{
    /**
     * The icalId
     * @var int|null
     */
    protected ?int $icalId = null;
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
     * Constructor method for SaveOrderICalContentResponse
     * @uses SaveOrderICalContentResponse::setIcalId()
     * @uses SaveOrderICalContentResponse::setOrderId()
     * @uses SaveOrderICalContentResponse::setUnitName()
     * @param int $icalId
     * @param int $orderId
     * @param string $unitName
     */
    public function __construct(?int $icalId = null, ?int $orderId = null, ?string $unitName = null)
    {
        $this
            ->setIcalId($icalId)
            ->setOrderId($orderId)
            ->setUnitName($unitName);
    }
    /**
     * Get icalId value
     * @return int|null
     */
    public function getIcalId(): ?int
    {
        return $this->icalId;
    }
    /**
     * Set icalId value
     * @param int $icalId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentResponse
     */
    public function setIcalId(?int $icalId = null): self
    {
        // validation for constraint: int
        if (!is_null($icalId) && !(is_int($icalId) || ctype_digit($icalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($icalId, true), gettype($icalId)), __LINE__);
        }
        $this->icalId = $icalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderICalContentResponse
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
