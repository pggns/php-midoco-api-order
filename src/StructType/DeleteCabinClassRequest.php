<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCabinClassRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCabinClassRequest extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for DeleteCabinClassRequest
     * @uses DeleteCabinClassRequest::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Order\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCabinClassRequest
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Order\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
