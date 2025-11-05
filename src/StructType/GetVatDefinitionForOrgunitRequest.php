<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDefinitionForOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDefinitionForOrgunitRequest extends AbstractStructBase
{
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The incoming
     * @var bool|null
     */
    protected ?bool $incoming = null;
    /**
     * Constructor method for GetVatDefinitionForOrgunitRequest
     * @uses GetVatDefinitionForOrgunitRequest::setValidDate()
     * @uses GetVatDefinitionForOrgunitRequest::setIncoming()
     * @param string $validDate
     * @param bool $incoming
     */
    public function __construct(?string $validDate = null, ?bool $incoming = null)
    {
        $this
            ->setValidDate($validDate)
            ->setIncoming($incoming);
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDefinitionForOrgunitRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get incoming value
     * @return bool|null
     */
    public function getIncoming(): ?bool
    {
        return $this->incoming;
    }
    /**
     * Set incoming value
     * @param bool $incoming
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDefinitionForOrgunitRequest
     */
    public function setIncoming(?bool $incoming = null): self
    {
        // validation for constraint: boolean
        if (!is_null($incoming) && !is_bool($incoming)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($incoming, true), gettype($incoming)), __LINE__);
        }
        $this->incoming = $incoming;
        
        return $this;
    }
}
