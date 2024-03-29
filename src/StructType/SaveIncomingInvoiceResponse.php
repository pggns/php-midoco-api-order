<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIncomingInvoiceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveIncomingInvoiceResponse extends AbstractStructBase
{
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * Constructor method for SaveIncomingInvoiceResponse
     * @uses SaveIncomingInvoiceResponse::setInvoiceId()
     * @param int $invoiceId
     */
    public function __construct(?int $invoiceId = null)
    {
        $this
            ->setInvoiceId($invoiceId);
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\SaveIncomingInvoiceResponse
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
}
