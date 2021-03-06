<?php

namespace Ews\EnumType;

/**
 * This class stands for UserConfigurationDictionaryObjectTypesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationDictionaryObjectTypesType
{
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Boolean'
     * @return string 'Boolean'
     */
    const VALUE_BOOLEAN = 'Boolean';
    /**
     * Constant for value 'Byte'
     * @return string 'Byte'
     */
    const VALUE_BYTE = 'Byte';
    /**
     * Constant for value 'String'
     * @return string 'String'
     */
    const VALUE_STRING = 'String';
    /**
     * Constant for value 'Integer32'
     * @return string 'Integer32'
     */
    const VALUE_INTEGER_32 = 'Integer32';
    /**
     * Constant for value 'UnsignedInteger32'
     * @return string 'UnsignedInteger32'
     */
    const VALUE_UNSIGNED_INTEGER_32 = 'UnsignedInteger32';
    /**
     * Constant for value 'Integer64'
     * @return string 'Integer64'
     */
    const VALUE_INTEGER_64 = 'Integer64';
    /**
     * Constant for value 'UnsignedInteger64'
     * @return string 'UnsignedInteger64'
     */
    const VALUE_UNSIGNED_INTEGER_64 = 'UnsignedInteger64';
    /**
     * Constant for value 'StringArray'
     * @return string 'StringArray'
     */
    const VALUE_STRING_ARRAY = 'StringArray';
    /**
     * Constant for value 'ByteArray'
     * @return string 'ByteArray'
     */
    const VALUE_BYTE_ARRAY = 'ByteArray';
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
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_BOOLEAN
     * @uses self::VALUE_BYTE
     * @uses self::VALUE_STRING
     * @uses self::VALUE_INTEGER_32
     * @uses self::VALUE_UNSIGNED_INTEGER_32
     * @uses self::VALUE_INTEGER_64
     * @uses self::VALUE_UNSIGNED_INTEGER_64
     * @uses self::VALUE_STRING_ARRAY
     * @uses self::VALUE_BYTE_ARRAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DATE_TIME,
            self::VALUE_BOOLEAN,
            self::VALUE_BYTE,
            self::VALUE_STRING,
            self::VALUE_INTEGER_32,
            self::VALUE_UNSIGNED_INTEGER_32,
            self::VALUE_INTEGER_64,
            self::VALUE_UNSIGNED_INTEGER_64,
            self::VALUE_STRING_ARRAY,
            self::VALUE_BYTE_ARRAY,
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
