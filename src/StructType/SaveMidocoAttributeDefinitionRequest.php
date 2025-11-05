<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoAttributeDefinitionRequest
     * @uses SaveMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\Order\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}
