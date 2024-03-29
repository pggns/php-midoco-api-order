<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The internalVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $internalVersion;
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $documentId;
    /**
     * Constructor method for DeleteBillingDocumentRequest
     * @uses DeleteBillingDocumentRequest::setInternalVersion()
     * @uses DeleteBillingDocumentRequest::setDocumentId()
     * @param int $internalVersion
     * @param int $documentId
     */
    public function __construct(int $internalVersion, int $documentId)
    {
        $this
            ->setInternalVersion($internalVersion)
            ->setDocumentId($documentId);
    }
    /**
     * Get internalVersion value
     * @return int
     */
    public function getInternalVersion(): int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentRequest
     */
    public function setInternalVersion(int $internalVersion): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentRequest
     */
    public function setDocumentId(int $documentId): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
