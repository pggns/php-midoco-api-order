<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessCcWebHookRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessCcWebHookRequest extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The MidocoHttpRequest
     * Meta information extracted from the WSDL
     * - ref: system:MidocoHttpRequest
     * @var \Pggns\MidocoApi\Order\StructType\MidocoHttpRequest|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoHttpRequest $MidocoHttpRequest = null;
    /**
     * Constructor method for ProcessCcWebHookRequest
     * @uses ProcessCcWebHookRequest::setAdapterId()
     * @uses ProcessCcWebHookRequest::setMidocoHttpRequest()
     * @param string $adapterId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHttpRequest $midocoHttpRequest
     */
    public function __construct(?string $adapterId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoHttpRequest $midocoHttpRequest = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setMidocoHttpRequest($midocoHttpRequest);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookRequest
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get MidocoHttpRequest value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoHttpRequest|null
     */
    public function getMidocoHttpRequest(): ?\Pggns\MidocoApi\Order\StructType\MidocoHttpRequest
    {
        return $this->MidocoHttpRequest;
    }
    /**
     * Set MidocoHttpRequest value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHttpRequest $midocoHttpRequest
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookRequest
     */
    public function setMidocoHttpRequest(?\Pggns\MidocoApi\Order\StructType\MidocoHttpRequest $midocoHttpRequest = null): self
    {
        $this->MidocoHttpRequest = $midocoHttpRequest;
        
        return $this;
    }
}
