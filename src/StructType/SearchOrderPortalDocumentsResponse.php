<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderPortalDocumentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderPortalDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoPortalDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPortalDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument[]
     */
    protected ?array $MidocoPortalDocument = null;
    /**
     * Constructor method for SearchOrderPortalDocumentsResponse
     * @uses SearchOrderPortalDocumentsResponse::setMidocoPortalDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument[] $midocoPortalDocument
     */
    public function __construct(?array $midocoPortalDocument = null)
    {
        $this
            ->setMidocoPortalDocument($midocoPortalDocument);
    }
    /**
     * Get MidocoPortalDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument[]
     */
    public function getMidocoPortalDocument(): ?array
    {
        return $this->MidocoPortalDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPortalDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPortalDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPortalDocumentForArrayConstraintFromSetMidocoPortalDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchOrderPortalDocumentsResponseMidocoPortalDocumentItem) {
            // validation for constraint: itemType
            if (!$searchOrderPortalDocumentsResponseMidocoPortalDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument) {
                $invalidValues[] = is_object($searchOrderPortalDocumentsResponseMidocoPortalDocumentItem) ? get_class($searchOrderPortalDocumentsResponseMidocoPortalDocumentItem) : sprintf('%s(%s)', gettype($searchOrderPortalDocumentsResponseMidocoPortalDocumentItem), var_export($searchOrderPortalDocumentsResponseMidocoPortalDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPortalDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPortalDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument[] $midocoPortalDocument
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderPortalDocumentsResponse
     */
    public function setMidocoPortalDocument(?array $midocoPortalDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPortalDocumentArrayErrorMessage = self::validateMidocoPortalDocumentForArrayConstraintFromSetMidocoPortalDocument($midocoPortalDocument))) {
            throw new InvalidArgumentException($midocoPortalDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoPortalDocument = $midocoPortalDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoPortalDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderPortalDocumentsResponse
     */
    public function addToMidocoPortalDocument(\Pggns\MidocoApi\Order\StructType\MidocoPortalDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoPortalDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPortalDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPortalDocument[] = $item;
        
        return $this;
    }
}
