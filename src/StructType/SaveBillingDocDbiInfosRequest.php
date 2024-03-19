<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocDbiInfosRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBillingDocDbiInfosRequest extends AbstractStructBase
{
    /**
     * The dbiInfoType
     * @var string|null
     */
    protected ?string $dbiInfoType = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The executeWorkflow
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $executeWorkflow = null;
    /**
     * The MidocoBillingDocDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[]
     */
    protected ?array $MidocoBillingDocDbiInfo = null;
    /**
     * Constructor method for SaveBillingDocDbiInfosRequest
     * @uses SaveBillingDocDbiInfosRequest::setDbiInfoType()
     * @uses SaveBillingDocDbiInfosRequest::setDocumentId()
     * @uses SaveBillingDocDbiInfosRequest::setItemId()
     * @uses SaveBillingDocDbiInfosRequest::setPassengerAssignment()
     * @uses SaveBillingDocDbiInfosRequest::setExecuteWorkflow()
     * @uses SaveBillingDocDbiInfosRequest::setMidocoBillingDocDbiInfo()
     * @param string $dbiInfoType
     * @param int $documentId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param bool $executeWorkflow
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[] $midocoBillingDocDbiInfo
     */
    public function __construct(?string $dbiInfoType = null, ?int $documentId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?bool $executeWorkflow = true, ?array $midocoBillingDocDbiInfo = null)
    {
        $this
            ->setDbiInfoType($dbiInfoType)
            ->setDocumentId($documentId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setExecuteWorkflow($executeWorkflow)
            ->setMidocoBillingDocDbiInfo($midocoBillingDocDbiInfo);
    }
    /**
     * Get dbiInfoType value
     * @return string|null
     */
    public function getDbiInfoType(): ?string
    {
        return $this->dbiInfoType;
    }
    /**
     * Set dbiInfoType value
     * @param string $dbiInfoType
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setDbiInfoType(?string $dbiInfoType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoType) && !is_string($dbiInfoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoType, true), gettype($dbiInfoType)), __LINE__);
        }
        $this->dbiInfoType = $dbiInfoType;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get executeWorkflow value
     * @return bool|null
     */
    public function getExecuteWorkflow(): ?bool
    {
        return $this->executeWorkflow;
    }
    /**
     * Set executeWorkflow value
     * @param bool $executeWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setExecuteWorkflow(?bool $executeWorkflow = true): self
    {
        // validation for constraint: boolean
        if (!is_null($executeWorkflow) && !is_bool($executeWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executeWorkflow, true), gettype($executeWorkflow)), __LINE__);
        }
        $this->executeWorkflow = $executeWorkflow;
        
        return $this;
    }
    /**
     * Get MidocoBillingDocDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[]
     */
    public function getMidocoBillingDocDbiInfo(): ?array
    {
        return $this->MidocoBillingDocDbiInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDocDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocDbiInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocDbiInfoForArrayConstraintFromSetMidocoBillingDocDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem) {
            // validation for constraint: itemType
            if (!$saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo) {
                $invalidValues[] = is_object($saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem) ? get_class($saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem) : sprintf('%s(%s)', gettype($saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem), var_export($saveBillingDocDbiInfosRequestMidocoBillingDocDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDocDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDocDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[] $midocoBillingDocDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function setMidocoBillingDocDbiInfo(?array $midocoBillingDocDbiInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocDbiInfoArrayErrorMessage = self::validateMidocoBillingDocDbiInfoForArrayConstraintFromSetMidocoBillingDocDbiInfo($midocoBillingDocDbiInfo))) {
            throw new InvalidArgumentException($midocoBillingDocDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocDbiInfo = $midocoBillingDocDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocDbiInfosRequest
     */
    public function addToMidocoBillingDocDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDocDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDocDbiInfo[] = $item;
        
        return $this;
    }
}
