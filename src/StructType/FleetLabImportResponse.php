<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FleetLabImportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FleetLabImportResponse extends AbstractStructBase
{
    /**
     * The FleetLabBookingImportStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus[]
     */
    protected ?array $FleetLabBookingImportStatus = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for FleetLabImportResponse
     * @uses FleetLabImportResponse::setFleetLabBookingImportStatus()
     * @uses FleetLabImportResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus[] $fleetLabBookingImportStatus
     * @param string $error
     */
    public function __construct(?array $fleetLabBookingImportStatus = null, ?string $error = null)
    {
        $this
            ->setFleetLabBookingImportStatus($fleetLabBookingImportStatus)
            ->setError($error);
    }
    /**
     * Get FleetLabBookingImportStatus value
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus[]
     */
    public function getFleetLabBookingImportStatus(): ?array
    {
        return $this->FleetLabBookingImportStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFleetLabBookingImportStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFleetLabBookingImportStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFleetLabBookingImportStatusForArrayConstraintFromSetFleetLabBookingImportStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fleetLabImportResponseFleetLabBookingImportStatusItem) {
            // validation for constraint: itemType
            if (!$fleetLabImportResponseFleetLabBookingImportStatusItem instanceof \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus) {
                $invalidValues[] = is_object($fleetLabImportResponseFleetLabBookingImportStatusItem) ? get_class($fleetLabImportResponseFleetLabBookingImportStatusItem) : sprintf('%s(%s)', gettype($fleetLabImportResponseFleetLabBookingImportStatusItem), var_export($fleetLabImportResponseFleetLabBookingImportStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FleetLabBookingImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FleetLabBookingImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus[] $fleetLabBookingImportStatus
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabImportResponse
     */
    public function setFleetLabBookingImportStatus(?array $fleetLabBookingImportStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($fleetLabBookingImportStatusArrayErrorMessage = self::validateFleetLabBookingImportStatusForArrayConstraintFromSetFleetLabBookingImportStatus($fleetLabBookingImportStatus))) {
            throw new InvalidArgumentException($fleetLabBookingImportStatusArrayErrorMessage, __LINE__);
        }
        $this->FleetLabBookingImportStatus = $fleetLabBookingImportStatus;
        
        return $this;
    }
    /**
     * Add item to FleetLabBookingImportStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabImportResponse
     */
    public function addToFleetLabBookingImportStatus(\Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus) {
            throw new InvalidArgumentException(sprintf('The FleetLabBookingImportStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FleetLabBookingImportStatus[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabImportResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
