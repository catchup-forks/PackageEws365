<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEventToMyCalanderResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddEventToMyCalanderResponseType extends EwsResponseMessageType
{
    /**
     * The WasSuccessful
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $WasSuccessful;
    /**
     * Constructor method for AddEventToMyCalanderResponseType
     * @uses EwsAddEventToMyCalanderResponseType::setWasSuccessful()
     * @param bool $wasSuccessful
     */
    public function __construct($wasSuccessful = null)
    {
        $this
            ->setWasSuccessful($wasSuccessful);
    }
    /**
     * Get WasSuccessful value
     * @return bool
     */
    public function getWasSuccessful()
    {
        return $this->WasSuccessful;
    }
    /**
     * Set WasSuccessful value
     * @param bool $wasSuccessful
     * @return \Ews\StructType\EwsAddEventToMyCalanderResponseType
     */
    public function setWasSuccessful($wasSuccessful = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasSuccessful) && !is_bool($wasSuccessful)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wasSuccessful)), __LINE__);
        }
        $this->WasSuccessful = $wasSuccessful;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddEventToMyCalanderResponseType
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
