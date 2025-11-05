<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentTokenAttribType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPaymentTokenAttribType extends PaymentTokenAttribTypeDTO
{
    /**
     * The MidocoPaymentTokenAttribTypeDesc
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentTokenAttribTypeDesc
     * @var \Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO $MidocoPaymentTokenAttribTypeDesc = null;
    /**
     * Constructor method for MidocoPaymentTokenAttribType
     * @uses MidocoPaymentTokenAttribType::setMidocoPaymentTokenAttribTypeDesc()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null)
    {
        $this
            ->setMidocoPaymentTokenAttribTypeDesc($midocoPaymentTokenAttribTypeDesc);
    }
    /**
     * Get MidocoPaymentTokenAttribTypeDesc value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    public function getMidocoPaymentTokenAttribTypeDesc(): ?\Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO
    {
        return $this->MidocoPaymentTokenAttribTypeDesc;
    }
    /**
     * Set MidocoPaymentTokenAttribTypeDesc value
     * @param \Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentTokenAttribType
     */
    public function setMidocoPaymentTokenAttribTypeDesc(?\Pggns\MidocoApi\Order\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null): self
    {
        $this->MidocoPaymentTokenAttribTypeDesc = $midocoPaymentTokenAttribTypeDesc;
        
        return $this;
    }
}
