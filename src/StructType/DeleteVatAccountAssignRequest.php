<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVatAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountAssign
     * @var \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $MidocoVatAccountAssign = null;
    /**
     * Constructor method for DeleteVatAccountAssignRequest
     * @uses DeleteVatAccountAssignRequest::setMidocoVatAccountAssign()
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null)
    {
        $this
            ->setMidocoVatAccountAssign($midocoVatAccountAssign);
    }
    /**
     * Get MidocoVatAccountAssign value
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO|null
     */
    public function getMidocoVatAccountAssign(): ?\Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO
    {
        return $this->MidocoVatAccountAssign;
    }
    /**
     * Set MidocoVatAccountAssign value
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     * @return \Pggns\MidocoApi\Order\StructType\DeleteVatAccountAssignRequest
     */
    public function setMidocoVatAccountAssign(?\Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null): self
    {
        $this->MidocoVatAccountAssign = $midocoVatAccountAssign;
        
        return $this;
    }
}
