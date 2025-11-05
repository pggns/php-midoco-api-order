<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveServiceStatusRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveServiceStatusRequest extends AbstractStructBase
{
    /**
     * The MidocoServiceStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoServiceStatus
     * @var \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO
     */
    protected \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO $MidocoServiceStatus;
    /**
     * Constructor method for SaveServiceStatusRequest
     * @uses SaveServiceStatusRequest::setMidocoServiceStatus()
     * @param \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO $midocoServiceStatus
     */
    public function __construct(\Pggns\MidocoApi\Order\StructType\ServiceStatusDTO $midocoServiceStatus)
    {
        $this
            ->setMidocoServiceStatus($midocoServiceStatus);
    }
    /**
     * Get MidocoServiceStatus value
     * @return \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO
     */
    public function getMidocoServiceStatus(): \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO
    {
        return $this->MidocoServiceStatus;
    }
    /**
     * Set MidocoServiceStatus value
     * @param \Pggns\MidocoApi\Order\StructType\ServiceStatusDTO $midocoServiceStatus
     * @return \Pggns\MidocoApi\Order\StructType\SaveServiceStatusRequest
     */
    public function setMidocoServiceStatus(\Pggns\MidocoApi\Order\StructType\ServiceStatusDTO $midocoServiceStatus): self
    {
        $this->MidocoServiceStatus = $midocoServiceStatus;
        
        return $this;
    }
}
