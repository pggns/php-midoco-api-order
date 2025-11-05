<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDefinitionForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDefinitionForCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * Constructor method for GetVatDefinitionForCustomerRequest
     * @uses GetVatDefinitionForCustomerRequest::setCustomerId()
     * @uses GetVatDefinitionForCustomerRequest::setValidDate()
     * @param int $customerId
     * @param string $validDate
     */
    public function __construct(?int $customerId = null, ?string $validDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setValidDate($validDate);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDefinitionForCustomerRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDefinitionForCustomerRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
}
