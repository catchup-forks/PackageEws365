<?php

namespace Ews\EnumType;

/**
 * This class stands for ConnectionFailureCauseType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsConnectionFailureCauseType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'UserBusy'
     * @return string 'UserBusy'
     */
    const VALUE_USERBUSY = 'UserBusy';
    /**
     * Constant for value 'NoAnswer'
     * @return string 'NoAnswer'
     */
    const VALUE_NOANSWER = 'NoAnswer';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_USERBUSY
     * @uses self::VALUE_NOANSWER
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_USERBUSY,
            self::VALUE_NOANSWER,
            self::VALUE_UNAVAILABLE,
            self::VALUE_OTHER,
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
