<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRemarkCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRemarkCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkCategory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory $MidocoRemarkCategory = null;
    /**
     * Constructor method for SaveRemarkCategoryRequest
     * @uses SaveRemarkCategoryRequest::setMidocoRemarkCategory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory $midocoRemarkCategory
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory $midocoRemarkCategory = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory|null
     */
    public function getMidocoRemarkCategory(): ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * Set MidocoRemarkCategory value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @return \Pggns\MidocoApi\Order\StructType\SaveRemarkCategoryRequest
     */
    public function setMidocoRemarkCategory(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkCategory $midocoRemarkCategory = null): self
    {
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
}
