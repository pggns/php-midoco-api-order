<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateDestinationManagerEmailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateDestinationManagerEmailRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * Constructor method for GenerateDestinationManagerEmailRequest
     * @uses GenerateDestinationManagerEmailRequest::setOrderId()
     * @uses GenerateDestinationManagerEmailRequest::setLink()
     * @param int $orderId
     * @param string $link
     */
    public function __construct(?int $orderId = null, ?string $link = null)
    {
        $this
            ->setOrderId($orderId)
            ->setLink($link);
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
     * @return \Pggns\MidocoApi\Order\StructType\GenerateDestinationManagerEmailRequest
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
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\GenerateDestinationManagerEmailRequest
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
}
