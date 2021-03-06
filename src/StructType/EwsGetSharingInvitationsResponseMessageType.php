<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingInvitationsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSharingInvitationsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SharingInvitations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public $SharingInvitations;
    /**
     * Constructor method for GetSharingInvitationsResponseMessageType
     * @uses EwsGetSharingInvitationsResponseMessageType::setSharingInvitations()
     * @param \Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations = null)
    {
        $this
            ->setSharingInvitations($sharingInvitations);
    }
    /**
     * Get SharingInvitations value
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public function getSharingInvitations()
    {
        return $this->SharingInvitations;
    }
    /**
     * Set SharingInvitations value
     * @param \Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     * @return \Ews\StructType\EwsGetSharingInvitationsResponseMessageType
     */
    public function setSharingInvitations(\Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations = null)
    {
        $this->SharingInvitations = $sharingInvitations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSharingInvitationsResponseMessageType
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
