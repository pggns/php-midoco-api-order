<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConnectionTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveConnectionTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for SaveConnectionTypeRequest
     * @uses SaveConnectionTypeRequest::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\Order\StructType\SaveConnectionTypeRequest
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}
