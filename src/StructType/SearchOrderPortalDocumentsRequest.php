<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderPortalDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderPortalDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoPortalDocumentSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType $MidocoPortalDocumentSearchCriteria = null;
    /**
     * Constructor method for SearchOrderPortalDocumentsRequest
     * @uses SearchOrderPortalDocumentsRequest::setMidocoPortalDocumentSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType $midocoPortalDocumentSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType $midocoPortalDocumentSearchCriteria = null)
    {
        $this
            ->setMidocoPortalDocumentSearchCriteria($midocoPortalDocumentSearchCriteria);
    }
    /**
     * Get MidocoPortalDocumentSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType|null
     */
    public function getMidocoPortalDocumentSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType
    {
        return $this->MidocoPortalDocumentSearchCriteria;
    }
    /**
     * Set MidocoPortalDocumentSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType $midocoPortalDocumentSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderPortalDocumentsRequest
     */
    public function setMidocoPortalDocumentSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoPortalDocumentSearchCriteriaType $midocoPortalDocumentSearchCriteria = null): self
    {
        $this->MidocoPortalDocumentSearchCriteria = $midocoPortalDocumentSearchCriteria;
        
        return $this;
    }
}
