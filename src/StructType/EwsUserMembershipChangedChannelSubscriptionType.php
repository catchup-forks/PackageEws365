<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserMembershipChangedChannelSubscriptionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserMembershipChangedChannelSubscriptionType extends EwsChannelSubscriptionBaseType
{
    /**
     * The UserSmtpAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserSmtpAddress;
    /**
     * Constructor method for UserMembershipChangedChannelSubscriptionType
     * @uses EwsUserMembershipChangedChannelSubscriptionType::setUserSmtpAddress()
     * @param string $userSmtpAddress
     */
    public function __construct($userSmtpAddress = null)
    {
        $this
            ->setUserSmtpAddress($userSmtpAddress);
    }
    /**
     * Get UserSmtpAddress value
     * @return string|null
     */
    public function getUserSmtpAddress()
    {
        return $this->UserSmtpAddress;
    }
    /**
     * Set UserSmtpAddress value
     * @param string $userSmtpAddress
     * @return \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType
     */
    public function setUserSmtpAddress($userSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($userSmtpAddress) && !is_string($userSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userSmtpAddress)), __LINE__);
        }
        $this->UserSmtpAddress = $userSmtpAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType
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
