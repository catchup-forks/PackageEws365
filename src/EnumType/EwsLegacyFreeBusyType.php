<?php

namespace Ews\EnumType;

/**
 * This class stands for LegacyFreeBusyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLegacyFreeBusyType
{
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
    /**
     * Constant for value 'Busy'
     * @return string 'Busy'
     */
    const VALUE_BUSY = 'Busy';
    /**
     * Constant for value 'OOF'
     * @return string 'OOF'
     */
    const VALUE_OOF = 'OOF';
    /**
     * Constant for value 'WorkingElsewhere'
     * @return string 'WorkingElsewhere'
     */
    const VALUE_WORKING_ELSEWHERE = 'WorkingElsewhere';
    /**
     * Constant for value 'NoData'
     * @return string 'NoData'
     */
    const VALUE_NO_DATA = 'NoData';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FREE
     * @uses self::VALUE_TENTATIVE
     * @uses self::VALUE_BUSY
     * @uses self::VALUE_OOF
     * @uses self::VALUE_WORKING_ELSEWHERE
     * @uses self::VALUE_NO_DATA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FREE,
            self::VALUE_TENTATIVE,
            self::VALUE_BUSY,
            self::VALUE_OOF,
            self::VALUE_WORKING_ELSEWHERE,
            self::VALUE_NO_DATA,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
