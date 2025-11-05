<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessCcWebHookResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessCcWebHookResponse extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The timeStamp
     * @var string|null
     */
    protected ?string $timeStamp = null;
    /**
     * The errorDescriptionCode
     * @var string|null
     */
    protected ?string $errorDescriptionCode = null;
    /**
     * The errorDescription
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * The merchantReference
     * @var string|null
     */
    protected ?string $merchantReference = null;
    /**
     * The merchantId
     * @var string|null
     */
    protected ?string $merchantId = null;
    /**
     * The pspReference
     * @var string|null
     */
    protected ?string $pspReference = null;
    /**
     * The orginalReference
     * @var string|null
     */
    protected ?string $orginalReference = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The ccReceiptNo
     * @var float|null
     */
    protected ?float $ccReceiptNo = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for ProcessCcWebHookResponse
     * @uses ProcessCcWebHookResponse::setUnitName()
     * @uses ProcessCcWebHookResponse::setAdapterId()
     * @uses ProcessCcWebHookResponse::setErrorCode()
     * @uses ProcessCcWebHookResponse::setErrorBundle()
     * @uses ProcessCcWebHookResponse::setStatus()
     * @uses ProcessCcWebHookResponse::setTimeStamp()
     * @uses ProcessCcWebHookResponse::setErrorDescriptionCode()
     * @uses ProcessCcWebHookResponse::setErrorDescription()
     * @uses ProcessCcWebHookResponse::setMerchantReference()
     * @uses ProcessCcWebHookResponse::setMerchantId()
     * @uses ProcessCcWebHookResponse::setPspReference()
     * @uses ProcessCcWebHookResponse::setOrginalReference()
     * @uses ProcessCcWebHookResponse::setTransactionId()
     * @uses ProcessCcWebHookResponse::setCcReceiptNo()
     * @uses ProcessCcWebHookResponse::setAmount()
     * @uses ProcessCcWebHookResponse::setCurrency()
     * @uses ProcessCcWebHookResponse::setDocumentId()
     * @uses ProcessCcWebHookResponse::setReceiptId()
     * @uses ProcessCcWebHookResponse::setOrderId()
     * @param string $unitName
     * @param string $adapterId
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $status
     * @param string $timeStamp
     * @param string $errorDescriptionCode
     * @param string $errorDescription
     * @param string $merchantReference
     * @param string $merchantId
     * @param string $pspReference
     * @param string $orginalReference
     * @param int $transactionId
     * @param float $ccReceiptNo
     * @param float $amount
     * @param string $currency
     * @param int $documentId
     * @param int $receiptId
     * @param int $orderId
     */
    public function __construct(?string $unitName = null, ?string $adapterId = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $status = null, ?string $timeStamp = null, ?string $errorDescriptionCode = null, ?string $errorDescription = null, ?string $merchantReference = null, ?string $merchantId = null, ?string $pspReference = null, ?string $orginalReference = null, ?int $transactionId = null, ?float $ccReceiptNo = null, ?float $amount = null, ?string $currency = null, ?int $documentId = null, ?int $receiptId = null, ?int $orderId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAdapterId($adapterId)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setStatus($status)
            ->setTimeStamp($timeStamp)
            ->setErrorDescriptionCode($errorDescriptionCode)
            ->setErrorDescription($errorDescription)
            ->setMerchantReference($merchantReference)
            ->setMerchantId($merchantId)
            ->setPspReference($pspReference)
            ->setOrginalReference($orginalReference)
            ->setTransactionId($transactionId)
            ->setCcReceiptNo($ccReceiptNo)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setDocumentId($documentId)
            ->setReceiptId($receiptId)
            ->setOrderId($orderId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get timeStamp value
     * @return string|null
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }
    /**
     * Set timeStamp value
     * @param string $timeStamp
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setTimeStamp(?string $timeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->timeStamp = $timeStamp;
        
        return $this;
    }
    /**
     * Get errorDescriptionCode value
     * @return string|null
     */
    public function getErrorDescriptionCode(): ?string
    {
        return $this->errorDescriptionCode;
    }
    /**
     * Set errorDescriptionCode value
     * @param string $errorDescriptionCode
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setErrorDescriptionCode(?string $errorDescriptionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescriptionCode) && !is_string($errorDescriptionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescriptionCode, true), gettype($errorDescriptionCode)), __LINE__);
        }
        $this->errorDescriptionCode = $errorDescriptionCode;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
    /**
     * Get merchantReference value
     * @return string|null
     */
    public function getMerchantReference(): ?string
    {
        return $this->merchantReference;
    }
    /**
     * Set merchantReference value
     * @param string $merchantReference
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setMerchantReference(?string $merchantReference = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantReference) && !is_string($merchantReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantReference, true), gettype($merchantReference)), __LINE__);
        }
        $this->merchantReference = $merchantReference;
        
        return $this;
    }
    /**
     * Get merchantId value
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }
    /**
     * Set merchantId value
     * @param string $merchantId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setMerchantId(?string $merchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantId) && !is_string($merchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantId, true), gettype($merchantId)), __LINE__);
        }
        $this->merchantId = $merchantId;
        
        return $this;
    }
    /**
     * Get pspReference value
     * @return string|null
     */
    public function getPspReference(): ?string
    {
        return $this->pspReference;
    }
    /**
     * Set pspReference value
     * @param string $pspReference
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setPspReference(?string $pspReference = null): self
    {
        // validation for constraint: string
        if (!is_null($pspReference) && !is_string($pspReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pspReference, true), gettype($pspReference)), __LINE__);
        }
        $this->pspReference = $pspReference;
        
        return $this;
    }
    /**
     * Get orginalReference value
     * @return string|null
     */
    public function getOrginalReference(): ?string
    {
        return $this->orginalReference;
    }
    /**
     * Set orginalReference value
     * @param string $orginalReference
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setOrginalReference(?string $orginalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($orginalReference) && !is_string($orginalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orginalReference, true), gettype($orginalReference)), __LINE__);
        }
        $this->orginalReference = $orginalReference;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return float|null
     */
    public function getCcReceiptNo(): ?float
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param float $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setCcReceiptNo(?float $ccReceiptNo = null): self
    {
        // validation for constraint: float
        if (!is_null($ccReceiptNo) && !(is_float($ccReceiptNo) || is_numeric($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
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
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessCcWebHookResponse
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
