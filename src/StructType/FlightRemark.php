<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flightRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: remark like freetext info, markable for print on customer documents, internal or service position
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightRemark extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - documentation: remark position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printAllowed
     * Meta information extracted from the WSDL
     * - documentation: remark allowed to print
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - documentation: remark long text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The printType
     * Meta information extracted from the WSDL
     * - documentation: remark print type
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The servicePosition
     * Meta information extracted from the WSDL
     * - documentation: remark service position
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * Constructor method for flightRemark
     * @uses FlightRemark::setPosition()
     * @uses FlightRemark::setPrintAllowed()
     * @uses FlightRemark::setText()
     * @uses FlightRemark::setPrintType()
     * @uses FlightRemark::setServicePosition()
     * @param int $position
     * @param bool $printAllowed
     * @param string $text
     * @param string $printType
     * @param int $servicePosition
     */
    public function __construct(?int $position = null, ?bool $printAllowed = null, ?string $text = null, ?string $printType = null, ?int $servicePosition = null)
    {
        $this
            ->setPosition($position)
            ->setPrintAllowed($printAllowed)
            ->setText($text)
            ->setPrintType($printType)
            ->setServicePosition($servicePosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightRemark
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
     * Get printAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->printAllowed;
    }
    /**
     * Set printAllowed value
     * @param bool $printAllowed
     * @return \Pggns\MidocoApi\Order\StructType\FlightRemark
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->printAllowed = $printAllowed;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\FlightRemark
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\FlightRemark
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get servicePosition value
     * @return int|null
     */
    public function getServicePosition(): ?int
    {
        return $this->servicePosition;
    }
    /**
     * Set servicePosition value
     * @param int $servicePosition
     * @return \Pggns\MidocoApi\Order\StructType\FlightRemark
     */
    public function setServicePosition(?int $servicePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($servicePosition) && !(is_int($servicePosition) || ctype_digit($servicePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($servicePosition, true), gettype($servicePosition)), __LINE__);
        }
        $this->servicePosition = $servicePosition;
        
        return $this;
    }
}
