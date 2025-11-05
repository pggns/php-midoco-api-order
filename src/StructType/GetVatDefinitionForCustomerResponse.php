<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDefinitionForCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDefinitionForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDefinition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: orderglobalsd:MidocoVatDefinition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatDefinition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoVatDefinition $MidocoVatDefinition = null;
    /**
     * Constructor method for GetVatDefinitionForCustomerResponse
     * @uses GetVatDefinitionForCustomerResponse::setMidocoVatDefinition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatDefinition $midocoVatDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoVatDefinition $midocoVatDefinition = null)
    {
        $this
            ->setMidocoVatDefinition($midocoVatDefinition);
    }
    /**
     * Get MidocoVatDefinition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatDefinition|null
     */
    public function getMidocoVatDefinition(): ?\Pggns\MidocoApi\Order\StructType\MidocoVatDefinition
    {
        return $this->MidocoVatDefinition;
    }
    /**
     * Set MidocoVatDefinition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatDefinition $midocoVatDefinition
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDefinitionForCustomerResponse
     */
    public function setMidocoVatDefinition(?\Pggns\MidocoApi\Order\StructType\MidocoVatDefinition $midocoVatDefinition = null): self
    {
        $this->MidocoVatDefinition = $midocoVatDefinition;
        
        return $this;
    }
}
