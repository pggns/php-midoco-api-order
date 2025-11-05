<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelHistoryByTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelHistoryByTokenResponse extends AbstractStructBase
{
    /**
     * The response
     * @var string|null
     */
    protected ?string $response = null;
    /**
     * The errorMessage
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * Constructor method for GetTravelHistoryByTokenResponse
     * @uses GetTravelHistoryByTokenResponse::setResponse()
     * @uses GetTravelHistoryByTokenResponse::setErrorMessage()
     * @uses GetTravelHistoryByTokenResponse::setTokenType()
     * @param string $response
     * @param string $errorMessage
     * @param string $tokenType
     */
    public function __construct(?string $response = null, ?string $errorMessage = null, ?string $tokenType = null)
    {
        $this
            ->setResponse($response)
            ->setErrorMessage($errorMessage)
            ->setTokenType($tokenType);
    }
    /**
     * Get response value
     * @return string|null
     */
    public function getResponse(): ?string
    {
        return $this->response;
    }
    /**
     * Set response value
     * @param string $response
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenResponse
     */
    public function setResponse(?string $response = null): self
    {
        // validation for constraint: string
        if (!is_null($response) && !is_string($response)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        $this->response = $response;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenResponse
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelHistoryByTokenResponse
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
