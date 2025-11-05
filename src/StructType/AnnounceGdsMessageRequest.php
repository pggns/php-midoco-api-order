<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceGdsMessageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceGdsMessageRequest extends AbstractStructBase
{
    /**
     * The MidocoGDSBooking
     * Meta information extracted from the WSDL
     * - ref: gds_message:MidocoGDSBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoGDSBooking $MidocoGDSBooking = null;
    /**
     * The splittedFromMaster
     * @var string|null
     */
    protected ?string $splittedFromMaster = null;
    /**
     * Constructor method for AnnounceGdsMessageRequest
     * @uses AnnounceGdsMessageRequest::setMidocoGDSBooking()
     * @uses AnnounceGdsMessageRequest::setSplittedFromMaster()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking $midocoGDSBooking
     * @param string $splittedFromMaster
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoGDSBooking $midocoGDSBooking = null, ?string $splittedFromMaster = null)
    {
        $this
            ->setMidocoGDSBooking($midocoGDSBooking)
            ->setSplittedFromMaster($splittedFromMaster);
    }
    /**
     * Get MidocoGDSBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking|null
     */
    public function getMidocoGDSBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
    {
        return $this->MidocoGDSBooking;
    }
    /**
     * Set MidocoGDSBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking $midocoGDSBooking
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageRequest
     */
    public function setMidocoGDSBooking(?\Pggns\MidocoApi\Order\StructType\MidocoGDSBooking $midocoGDSBooking = null): self
    {
        $this->MidocoGDSBooking = $midocoGDSBooking;
        
        return $this;
    }
    /**
     * Get splittedFromMaster value
     * @return string|null
     */
    public function getSplittedFromMaster(): ?string
    {
        return $this->splittedFromMaster;
    }
    /**
     * Set splittedFromMaster value
     * @param string $splittedFromMaster
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageRequest
     */
    public function setSplittedFromMaster(?string $splittedFromMaster = null): self
    {
        // validation for constraint: string
        if (!is_null($splittedFromMaster) && !is_string($splittedFromMaster)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($splittedFromMaster, true), gettype($splittedFromMaster)), __LINE__);
        }
        $this->splittedFromMaster = $splittedFromMaster;
        
        return $this;
    }
}
