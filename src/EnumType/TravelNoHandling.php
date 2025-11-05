<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for travelNoHandling EnumType
 * Meta information extracted from the WSDL
 * - documentation: Set optional buying or selling handling for travel no. Only values B(Buy) or S(Sell) are allowed and a travelNo is required.
 * @subpackage Enumerations
 */
class TravelNoHandling extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_B
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_S,
            self::VALUE_B,
        ];
    }
}
