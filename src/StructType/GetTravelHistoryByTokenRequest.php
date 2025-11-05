<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelHistoryByTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelHistoryByTokenRequest extends AbstractStructBase
{
    /**
     * The customerToken
     * @var string|null
     */
    protected ?string $customerToken = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * Constructor method for GetTravelHistoryByTokenRequest
     * @uses GetTravelHistoryByTokenRequest::setCustomerToken()
     * @uses GetTravelHistoryByTokenRequest::setStartDate()
     * @uses GetTravelHistoryByTokenRequest::setEndDate()
     * @uses GetTravelHistoryByTokenRequest::setTokenType()
     * @param string $customerToken
     * @param string $startDate
     * @param string $endDate
     * @param string $tokenType
     */
    public function __construct(?string $customerToken = null, ?string $startDate = null, ?string $endDate = null, ?string $tokenType = null)
    {
        $this
            ->setCustomerToken($customerToken)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTokenType($tokenType);
    }
    /**
     * Get customerToken value
     * @return string|null
     */
    public function getCustomerToken(): ?string
    {
        return $this->customerToken;
    }
    /**
     * Set customerToken value
     * @param string $customerToken
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenRequest
     */
    public function setCustomerToken(?string $customerToken = null): self
    {
        // validation for constraint: string
        if (!is_null($customerToken) && !is_string($customerToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerToken, true), gettype($customerToken)), __LINE__);
        }
        $this->customerToken = $customerToken;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get tokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    /**
     * Set tokenType value
     * @param string $tokenType
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenRequest
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenType) && !is_string($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->tokenType = $tokenType;
        
        return $this;
    }
}
