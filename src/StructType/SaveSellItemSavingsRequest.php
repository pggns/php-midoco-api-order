<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemSavingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSellItemSavingsRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemSaving
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemSaving
     * @var \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $MidocoSellItemSaving = null;
    /**
     * Constructor method for SaveSellItemSavingsRequest
     * @uses SaveSellItemSavingsRequest::setMidocoSellItemSaving()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $midocoSellItemSaving
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $midocoSellItemSaving = null)
    {
        $this
            ->setMidocoSellItemSaving($midocoSellItemSaving);
    }
    /**
     * Get MidocoSellItemSaving value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO|null
     */
    public function getMidocoSellItemSaving(): ?\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO
    {
        return $this->MidocoSellItemSaving;
    }
    /**
     * Set MidocoSellItemSaving value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $midocoSellItemSaving
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellItemSavingsRequest
     */
    public function setMidocoSellItemSaving(?\Pggns\MidocoApi\Order\StructType\SellItemSavingDTO $midocoSellItemSaving = null): self
    {
        $this->MidocoSellItemSaving = $midocoSellItemSaving;
        
        return $this;
    }
}
