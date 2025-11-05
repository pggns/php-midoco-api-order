<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGetCompanyCustomerType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGetCompanyCustomerType extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCompany|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCrmCompany $MidocoCrmCompany = null;
    /**
     * Constructor method for MidocoGetCompanyCustomerType
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCustomer()
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCompany()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCompany $midocoCrmCompany
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Order\StructType\MidocoCrmCompany $midocoCrmCompany = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCompany($midocoCrmCompany);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCompany|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Order\StructType\MidocoCrmCompany
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCompany $midocoCrmCompany
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Order\StructType\MidocoCrmCompany $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
}
