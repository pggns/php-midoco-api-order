<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ccAuthorisation StructType
 * Meta information extracted from the WSDL
 * - documentation: reference to external ccAuthorisation information, not executed inside of midoco, can be used in later capture using cc payment
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcAuthorisation extends AbstractStructBase
{
    /**
     * The authCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authCode = null;
    /**
     * The authAmount
     * @var float|null
     */
    protected ?float $authAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The captureExecuted
     * @var bool|null
     */
    protected ?bool $captureExecuted = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNumber
     * Meta information extracted from the WSDL
     * - documentation: mandatory for cc payment, not mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The authorisationExecuted
     * Meta information extracted from the WSDL
     * - documentation: authorisationExecuted = true, paypal transaction is authenticated and autorised , otherwise only authenticated | not mandatory for cc payment, mandatory for paypal via cc Provider
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $authorisationExecuted = null;
    /**
     * The ccToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ccToken
     * @var \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transactionRefId
     * @var string|null
     */
    protected ?string $transactionRefId = null;
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The useInBilling
     * Meta information extracted from the WSDL
     * - documentation: if captureExecuted == true, import as offline CC to billing. if captureExecuted == false, import as an authorised payment | transactionRefId must be unique to prevent double payments | only handled in midoco modus 1 (VERK)
     * @var bool|null
     */
    protected ?bool $useInBilling = null;
    /**
     * The paymentChannelIndicator
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether payment data was entered by the payee online (ecom) or via mail order telefon order = offline (moto). <br/><lu>possible values: <li>ecom</li> <li>moto</li> </lu>
     * @var string|null
     */
    protected ?string $paymentChannelIndicator = null;
    /**
     * The cardholderAuthVerification
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the way the authentication ID (XID or DSTID) was created. It is expected by the payment provider as CAVV.
     * @var string|null
     */
    protected ?string $cardholderAuthVerification = null;
    /**
     * The electronicCommerceIndicator
     * Meta information extracted from the WSDL
     * - documentation: This field is for validation when receiving the ECI to be one of the named values. It is expected by the payment provider. <br/><lu>possible values: <li>00=Mastercard no 3DS authentication/failure</li> <li>01=Mastercard attempted
     * authentication</li> <li>02=Mastercard fully authenticated</li> <li>05=Visa, AMEX, JCB, Diners/Discover fully authenticated</li> <li>06=Mastercard Acquirer exemption; no 3DS authentication</li> <li>06=Visa, AMEX, JCB, Diners/Discover attempted
     * authentication</li> <li>07=Mastercard fully authentication - recurring/installment transaction</li> <li>07=Visa, AMEX, JCB, Diners/Disvover no 3DS authentication/failure</li> </lu>
     * @var string|null
     */
    protected ?string $electronicCommerceIndicator = null;
    /**
     * The v3ds
     * Meta information extracted from the WSDL
     * - documentation: This element takes the 3D Secure version number used in the authentication process. Depending on this 3D Secure version (either 1.x or 2.x) the xid3ds1 or the dstid3ds2 need to be provided as well.
     * @var string|null
     */
    protected ?string $v3ds = null;
    /**
     * The dstid
     * Meta information extracted from the WSDL
     * - documentation: <b>Transaction ID in 3D Secure version 2.x cases (dstId)<b/><br/> This transaction reference is issued by the bank when a 3DS version 2.x authentication was successful. It is expected by the payment provider. <br/>
     * @var string|null
     */
    protected ?string $dstid = null;
    /**
     * The initialEcomTransactionId
     * Meta information extracted from the WSDL
     * - documentation: Transaction ID of the initial successful ECOM transaction. Used as reference in every subsequent debit transaction
     * @var string|null
     */
    protected ?string $initialEcomTransactionId = null;
    /**
     * Constructor method for ccAuthorisation
     * @uses CcAuthorisation::setAuthCode()
     * @uses CcAuthorisation::setAuthAmount()
     * @uses CcAuthorisation::setCurrency()
     * @uses CcAuthorisation::setCaptureExecuted()
     * @uses CcAuthorisation::setCcType()
     * @uses CcAuthorisation::setCcNumber()
     * @uses CcAuthorisation::setAuthorisationExecuted()
     * @uses CcAuthorisation::setCcToken()
     * @uses CcAuthorisation::setPosition()
     * @uses CcAuthorisation::setTransactionRefId()
     * @uses CcAuthorisation::setExternalId()
     * @uses CcAuthorisation::setUseInBilling()
     * @uses CcAuthorisation::setPaymentChannelIndicator()
     * @uses CcAuthorisation::setCardholderAuthVerification()
     * @uses CcAuthorisation::setElectronicCommerceIndicator()
     * @uses CcAuthorisation::setV3ds()
     * @uses CcAuthorisation::setDstid()
     * @uses CcAuthorisation::setInitialEcomTransactionId()
     * @param string $authCode
     * @param float $authAmount
     * @param string $currency
     * @param bool $captureExecuted
     * @param string $ccType
     * @param string $ccNumber
     * @param bool $authorisationExecuted
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @param int $position
     * @param string $transactionRefId
     * @param string $externalId
     * @param bool $useInBilling
     * @param string $paymentChannelIndicator
     * @param string $cardholderAuthVerification
     * @param string $electronicCommerceIndicator
     * @param string $v3ds
     * @param string $dstid
     * @param string $initialEcomTransactionId
     */
    public function __construct(?string $authCode = null, ?float $authAmount = null, ?string $currency = null, ?bool $captureExecuted = null, ?string $ccType = null, ?string $ccNumber = null, ?bool $authorisationExecuted = null, ?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null, ?int $position = null, ?string $transactionRefId = null, ?string $externalId = null, ?bool $useInBilling = null, ?string $paymentChannelIndicator = null, ?string $cardholderAuthVerification = null, ?string $electronicCommerceIndicator = null, ?string $v3ds = null, ?string $dstid = null, ?string $initialEcomTransactionId = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setAuthAmount($authAmount)
            ->setCurrency($currency)
            ->setCaptureExecuted($captureExecuted)
            ->setCcType($ccType)
            ->setCcNumber($ccNumber)
            ->setAuthorisationExecuted($authorisationExecuted)
            ->setCcToken($ccToken)
            ->setPosition($position)
            ->setTransactionRefId($transactionRefId)
            ->setExternalId($externalId)
            ->setUseInBilling($useInBilling)
            ->setPaymentChannelIndicator($paymentChannelIndicator)
            ->setCardholderAuthVerification($cardholderAuthVerification)
            ->setElectronicCommerceIndicator($electronicCommerceIndicator)
            ->setV3ds($v3ds)
            ->setDstid($dstid)
            ->setInitialEcomTransactionId($initialEcomTransactionId);
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $authCode
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->authCode = $authCode;
        
        return $this;
    }
    /**
     * Get authAmount value
     * @return float|null
     */
    public function getAuthAmount(): ?float
    {
        return $this->authAmount;
    }
    /**
     * Set authAmount value
     * @param float $authAmount
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthAmount(?float $authAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($authAmount) && !(is_float($authAmount) || is_numeric($authAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($authAmount, true), gettype($authAmount)), __LINE__);
        }
        $this->authAmount = $authAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
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
     * Get captureExecuted value
     * @return bool|null
     */
    public function getCaptureExecuted(): ?bool
    {
        return $this->captureExecuted;
    }
    /**
     * Set captureExecuted value
     * @param bool $captureExecuted
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCaptureExecuted(?bool $captureExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($captureExecuted) && !is_bool($captureExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($captureExecuted, true), gettype($captureExecuted)), __LINE__);
        }
        $this->captureExecuted = $captureExecuted;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get authorisationExecuted value
     * @return bool|null
     */
    public function getAuthorisationExecuted(): ?bool
    {
        return $this->authorisationExecuted;
    }
    /**
     * Set authorisationExecuted value
     * @param bool $authorisationExecuted
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setAuthorisationExecuted(?bool $authorisationExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($authorisationExecuted) && !is_bool($authorisationExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($authorisationExecuted, true), gettype($authorisationExecuted)), __LINE__);
        }
        $this->authorisationExecuted = $authorisationExecuted;
        
        return $this;
    }
    /**
     * Get ccToken value
     * @return \Pggns\MidocoApi\Order\StructType\CcToken|null
     */
    public function getCcToken(): ?\Pggns\MidocoApi\Order\StructType\CcToken
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param \Pggns\MidocoApi\Order\StructType\CcToken $ccToken
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCcToken(?\Pggns\MidocoApi\Order\StructType\CcToken $ccToken = null): self
    {
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get transactionRefId value
     * @return string|null
     */
    public function getTransactionRefId(): ?string
    {
        return $this->transactionRefId;
    }
    /**
     * Set transactionRefId value
     * @param string $transactionRefId
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setTransactionRefId(?string $transactionRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionRefId) && !is_string($transactionRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionRefId, true), gettype($transactionRefId)), __LINE__);
        }
        $this->transactionRefId = $transactionRefId;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
        return $this;
    }
    /**
     * Get useInBilling value
     * @return bool|null
     */
    public function getUseInBilling(): ?bool
    {
        return $this->useInBilling;
    }
    /**
     * Set useInBilling value
     * @param bool $useInBilling
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setUseInBilling(?bool $useInBilling = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInBilling) && !is_bool($useInBilling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInBilling, true), gettype($useInBilling)), __LINE__);
        }
        $this->useInBilling = $useInBilling;
        
        return $this;
    }
    /**
     * Get paymentChannelIndicator value
     * @return string|null
     */
    public function getPaymentChannelIndicator(): ?string
    {
        return $this->paymentChannelIndicator;
    }
    /**
     * Set paymentChannelIndicator value
     * @param string $paymentChannelIndicator
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setPaymentChannelIndicator(?string $paymentChannelIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentChannelIndicator) && !is_string($paymentChannelIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentChannelIndicator, true), gettype($paymentChannelIndicator)), __LINE__);
        }
        $this->paymentChannelIndicator = $paymentChannelIndicator;
        
        return $this;
    }
    /**
     * Get cardholderAuthVerification value
     * @return string|null
     */
    public function getCardholderAuthVerification(): ?string
    {
        return $this->cardholderAuthVerification;
    }
    /**
     * Set cardholderAuthVerification value
     * @param string $cardholderAuthVerification
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setCardholderAuthVerification(?string $cardholderAuthVerification = null): self
    {
        // validation for constraint: string
        if (!is_null($cardholderAuthVerification) && !is_string($cardholderAuthVerification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardholderAuthVerification, true), gettype($cardholderAuthVerification)), __LINE__);
        }
        $this->cardholderAuthVerification = $cardholderAuthVerification;
        
        return $this;
    }
    /**
     * Get electronicCommerceIndicator value
     * @return string|null
     */
    public function getElectronicCommerceIndicator(): ?string
    {
        return $this->electronicCommerceIndicator;
    }
    /**
     * Set electronicCommerceIndicator value
     * @param string $electronicCommerceIndicator
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setElectronicCommerceIndicator(?string $electronicCommerceIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($electronicCommerceIndicator) && !is_string($electronicCommerceIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($electronicCommerceIndicator, true), gettype($electronicCommerceIndicator)), __LINE__);
        }
        $this->electronicCommerceIndicator = $electronicCommerceIndicator;
        
        return $this;
    }
    /**
     * Get v3ds value
     * @return string|null
     */
    public function getV3ds(): ?string
    {
        return $this->v3ds;
    }
    /**
     * Set v3ds value
     * @param string $v3ds
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setV3ds(?string $v3ds = null): self
    {
        // validation for constraint: string
        if (!is_null($v3ds) && !is_string($v3ds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($v3ds, true), gettype($v3ds)), __LINE__);
        }
        $this->v3ds = $v3ds;
        
        return $this;
    }
    /**
     * Get dstid value
     * @return string|null
     */
    public function getDstid(): ?string
    {
        return $this->dstid;
    }
    /**
     * Set dstid value
     * @param string $dstid
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setDstid(?string $dstid = null): self
    {
        // validation for constraint: string
        if (!is_null($dstid) && !is_string($dstid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dstid, true), gettype($dstid)), __LINE__);
        }
        $this->dstid = $dstid;
        
        return $this;
    }
    /**
     * Get initialEcomTransactionId value
     * @return string|null
     */
    public function getInitialEcomTransactionId(): ?string
    {
        return $this->initialEcomTransactionId;
    }
    /**
     * Set initialEcomTransactionId value
     * @param string $initialEcomTransactionId
     * @return \Pggns\MidocoApi\Order\StructType\CcAuthorisation
     */
    public function setInitialEcomTransactionId(?string $initialEcomTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($initialEcomTransactionId) && !is_string($initialEcomTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initialEcomTransactionId, true), gettype($initialEcomTransactionId)), __LINE__);
        }
        $this->initialEcomTransactionId = $initialEcomTransactionId;
        
        return $this;
    }
}
