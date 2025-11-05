<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDestinationManagerLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDestinationManagerLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationManagerInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationManagerInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $MidocoDestinationManagerInfo = null;
    /**
     * Constructor method for DeleteDestinationManagerLinkRequest
     * @uses DeleteDestinationManagerLinkRequest::setMidocoDestinationManagerInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $midocoDestinationManagerInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $midocoDestinationManagerInfo = null)
    {
        $this
            ->setMidocoDestinationManagerInfo($midocoDestinationManagerInfo);
    }
    /**
     * Get MidocoDestinationManagerInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo|null
     */
    public function getMidocoDestinationManagerInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo
    {
        return $this->MidocoDestinationManagerInfo;
    }
    /**
     * Set MidocoDestinationManagerInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $midocoDestinationManagerInfo
     * @return \Pggns\MidocoApi\Order\StructType\DeleteDestinationManagerLinkRequest
     */
    public function setMidocoDestinationManagerInfo(?\Pggns\MidocoApi\Order\StructType\MidocoDestinationManagerInfo $midocoDestinationManagerInfo = null): self
    {
        $this->MidocoDestinationManagerInfo = $midocoDestinationManagerInfo;
        
        return $this;
    }
}
