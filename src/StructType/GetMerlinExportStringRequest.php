<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMerlinExportStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMerlinExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * Constructor method for GetMerlinExportStringRequest
     * @uses GetMerlinExportStringRequest::setMidocoTravelItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null)
    {
        $this
            ->setMidocoTravelItem($midocoTravelItem);
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Order\StructType\GetMerlinExportStringRequest
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
}
