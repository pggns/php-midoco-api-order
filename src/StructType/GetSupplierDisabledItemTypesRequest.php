<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDisabledItemTypesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierDisabledItemTypesRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDisabledItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDisabledItemType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType $MidocoSupplierDisabledItemType = null;
    /**
     * Constructor method for GetSupplierDisabledItemTypesRequest
     * @uses GetSupplierDisabledItemTypesRequest::setMidocoSupplierDisabledItemType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null)
    {
        $this
            ->setMidocoSupplierDisabledItemType($midocoSupplierDisabledItemType);
    }
    /**
     * Get MidocoSupplierDisabledItemType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType|null
     */
    public function getMidocoSupplierDisabledItemType(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType
    {
        return $this->MidocoSupplierDisabledItemType;
    }
    /**
     * Set MidocoSupplierDisabledItemType value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDisabledItemTypesRequest
     */
    public function setMidocoSupplierDisabledItemType(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null): self
    {
        $this->MidocoSupplierDisabledItemType = $midocoSupplierDisabledItemType;
        
        return $this;
    }
}
