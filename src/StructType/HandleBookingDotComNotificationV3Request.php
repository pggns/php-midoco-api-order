<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HandleBookingDotComNotificationV3Request StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HandleBookingDotComNotificationV3Request extends AbstractStructBase
{
    /**
     * The reservationId
     * @var string|null
     */
    protected ?string $reservationId = null;
    /**
     * The orderId
     * @var string|null
     */
    protected ?string $orderId = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * Constructor method for HandleBookingDotComNotificationV3Request
     * @uses HandleBookingDotComNotificationV3Request::setReservationId()
     * @uses HandleBookingDotComNotificationV3Request::setOrderId()
     * @uses HandleBookingDotComNotificationV3Request::setUserName()
     * @param string $reservationId
     * @param string $orderId
     * @param string $userName
     */
    public function __construct(?string $reservationId = null, ?string $orderId = null, ?string $userName = null)
    {
        $this
            ->setReservationId($reservationId)
            ->setOrderId($orderId)
            ->setUserName($userName);
    }
    /**
     * Get reservationId value
     * @return string|null
     */
    public function getReservationId(): ?string
    {
        return $this->reservationId;
    }
    /**
     * Set reservationId value
     * @param string $reservationId
     * @return \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationV3Request
     */
    public function setReservationId(?string $reservationId = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationId) && !is_string($reservationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationId, true), gettype($reservationId)), __LINE__);
        }
        $this->reservationId = $reservationId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationV3Request
     */
    public function setOrderId(?string $orderId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationV3Request
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
}
