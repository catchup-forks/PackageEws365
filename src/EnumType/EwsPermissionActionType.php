<?php

namespace Ews\EnumType;

/**
 * This class stands for PermissionActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPermissionActionType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Owned'
     * @return string 'Owned'
     */
    const VALUE_OWNED = 'Owned';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OWNED
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OWNED,
            self::VALUE_ALL,
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
