<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludesValueType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExcludesValueType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - use: required
     * - pattern: ((0x|0X)[0-9A-Fa-f]*)|([0-9]*)
     * @var string
     */
    public $Value;
    /**
     * Constructor method for ExcludesValueType
     * @uses EwsExcludesValueType::setValue()
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Ews\StructType\EwsExcludesValueType
     */
    public function setValue($value = null)
    {
        // validation for constraint: pattern
        if (is_scalar($value) && !preg_match('/((0x|0X)[0-9A-Fa-f]*)|([0-9]*)/', $value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "((0x|0X)[0-9A-Fa-f]*)|([0-9]*)", "%s" given', var_export($value, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExcludesValueType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
