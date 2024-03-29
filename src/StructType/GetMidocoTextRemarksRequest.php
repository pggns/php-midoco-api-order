<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for GetMidocoTextRemarksRequest
     * @uses GetMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
