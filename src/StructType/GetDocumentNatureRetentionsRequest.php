<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureRetentionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentNatureRetentionsRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $MidocoDocumentNatureRetention = null;
    /**
     * Constructor method for GetDocumentNatureRetentionsRequest
     * @uses GetDocumentNatureRetentionsRequest::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null)
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType|null
     */
    public function getMidocoDocumentNatureRetention(): ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNatureRetentionsRequest
     */
    public function setMidocoDocumentNatureRetention(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null): self
    {
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
}
