<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrimarySmtpAddressType StructType
 * Meta informations extracted from the WSDL
 * - minLength: 1
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPrimarySmtpAddressType extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $_;
    /**
     * Constructor method for PrimarySmtpAddressType
     * @uses EwsPrimarySmtpAddressType::set_()
     * @param string $_
     */
    public function __construct($_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsPrimarySmtpAddressType
     */
    public function set_($_ = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($_) && strlen($_) < 1) || (is_array($_) && count($_) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPrimarySmtpAddressType
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
