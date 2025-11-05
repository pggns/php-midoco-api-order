<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LockOrderOptionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LockOrderOptionResponse extends AbstractStructBase
{
    /**
     * The dummyOrderCustomerId
     * @var int|null
     */
    protected ?int $dummyOrderCustomerId = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for LockOrderOptionResponse
     * @uses LockOrderOptionResponse::setDummyOrderCustomerId()
     * @uses LockOrderOptionResponse::setError()
     * @param int $dummyOrderCustomerId
     * @param string $error
     */
    public function __construct(?int $dummyOrderCustomerId = null, ?string $error = null)
    {
        $this
            ->setDummyOrderCustomerId($dummyOrderCustomerId)
            ->setError($error);
    }
    /**
     * Get dummyOrderCustomerId value
     * @return int|null
     */
    public function getDummyOrderCustomerId(): ?int
    {
        return $this->dummyOrderCustomerId;
    }
    /**
     * Set dummyOrderCustomerId value
     * @param int $dummyOrderCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\LockOrderOptionResponse
     */
    public function setDummyOrderCustomerId(?int $dummyOrderCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($dummyOrderCustomerId) && !(is_int($dummyOrderCustomerId) || ctype_digit($dummyOrderCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dummyOrderCustomerId, true), gettype($dummyOrderCustomerId)), __LINE__);
        }
        $this->dummyOrderCustomerId = $dummyOrderCustomerId;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\LockOrderOptionResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
