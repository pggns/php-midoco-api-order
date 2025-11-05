<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDbiDefsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDbiDefsRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiDefs
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiDefs
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDbiDefs|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDbiDefs $MidocoDbiDefs = null;
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for SaveDbiDefsRequest
     * @uses SaveDbiDefsRequest::setMidocoDbiDefs()
     * @uses SaveDbiDefsRequest::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefs $midocoDbiDefs
     * @param \Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDbiDefs $midocoDbiDefs = null, ?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiDefs($midocoDbiDefs)
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiDefs value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDbiDefs|null
     */
    public function getMidocoDbiDefs(): ?\Pggns\MidocoApi\Order\StructType\MidocoDbiDefs
    {
        return $this->MidocoDbiDefs;
    }
    /**
     * Set MidocoDbiDefs value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDbiDefs $midocoDbiDefs
     * @return \Pggns\MidocoApi\Order\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiDefs(?\Pggns\MidocoApi\Order\StructType\MidocoDbiDefs $midocoDbiDefs = null): self
    {
        $this->MidocoDbiDefs = $midocoDbiDefs;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Order\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
