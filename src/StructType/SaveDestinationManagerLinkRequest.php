<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDestinationManagerLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDestinationManagerLinkRequest extends AbstractStructBase
{
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The abo
     * @var bool|null
     */
    protected ?bool $abo = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * Constructor method for SaveDestinationManagerLinkRequest
     * @uses SaveDestinationManagerLinkRequest::setLink()
     * @uses SaveDestinationManagerLinkRequest::setAbo()
     * @uses SaveDestinationManagerLinkRequest::setCreationDate()
     * @param string $link
     * @param bool $abo
     * @param string $creationDate
     */
    public function __construct(?string $link = null, ?bool $abo = null, ?string $creationDate = null)
    {
        $this
            ->setLink($link)
            ->setAbo($abo)
            ->setCreationDate($creationDate);
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\SaveDestinationManagerLinkRequest
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
    /**
     * Get abo value
     * @return bool|null
     */
    public function getAbo(): ?bool
    {
        return $this->abo;
    }
    /**
     * Set abo value
     * @param bool $abo
     * @return \Pggns\MidocoApi\Order\StructType\SaveDestinationManagerLinkRequest
     */
    public function setAbo(?bool $abo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($abo) && !is_bool($abo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($abo, true), gettype($abo)), __LINE__);
        }
        $this->abo = $abo;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\SaveDestinationManagerLinkRequest
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
}
