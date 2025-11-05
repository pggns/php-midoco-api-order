<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiUpdateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiUpdateResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for GetDbiUpdateResponse
     * @uses GetDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Order\StructType\GetDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
