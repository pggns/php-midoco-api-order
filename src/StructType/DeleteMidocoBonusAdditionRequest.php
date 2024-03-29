<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoBonusAdditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoBonusAdditionRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusAddition
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusAddition
     * @var \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $MidocoBonusAddition = null;
    /**
     * Constructor method for DeleteMidocoBonusAdditionRequest
     * @uses DeleteMidocoBonusAdditionRequest::setMidocoBonusAddition()
     * @param \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $midocoBonusAddition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $midocoBonusAddition = null)
    {
        $this
            ->setMidocoBonusAddition($midocoBonusAddition);
    }
    /**
     * Get MidocoBonusAddition value
     * @return \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO|null
     */
    public function getMidocoBonusAddition(): ?\Pggns\MidocoApi\Order\StructType\BonusAdditionDTO
    {
        return $this->MidocoBonusAddition;
    }
    /**
     * Set MidocoBonusAddition value
     * @param \Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $midocoBonusAddition
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionRequest
     */
    public function setMidocoBonusAddition(?\Pggns\MidocoApi\Order\StructType\BonusAdditionDTO $midocoBonusAddition = null): self
    {
        $this->MidocoBonusAddition = $midocoBonusAddition;
        
        return $this;
    }
}
