<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUserSubscribeStateResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupUserSubscribeStateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsSubscribed
     * Meta informations extracted from the WSDL
     * - ref: t:IsSubscribed
     * @var bool
     */
    public $IsSubscribed;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateResponseMessageType
     * @uses EwsSetUnifiedGroupUserSubscribeStateResponseMessageType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct($isSubscribed = null)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool|null
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateResponseMessageType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateResponseMessageType
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
