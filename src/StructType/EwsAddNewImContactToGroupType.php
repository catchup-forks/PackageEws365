<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewImContactToGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddNewImContactToGroupType extends EwsBaseRequestType
{
    /**
     * The ImAddress
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $ImAddress;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The GroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for AddNewImContactToGroupType
     * @uses EwsAddNewImContactToGroupType::setImAddress()
     * @uses EwsAddNewImContactToGroupType::setDisplayName()
     * @uses EwsAddNewImContactToGroupType::setGroupId()
     * @param string $imAddress
     * @param string $displayName
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct($imAddress = null, $displayName = null, \Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setImAddress($imAddress)
            ->setDisplayName($displayName)
            ->setGroupId($groupId);
    }
    /**
     * Get ImAddress value
     * @return string|null
     */
    public function getImAddress()
    {
        return $this->ImAddress;
    }
    /**
     * Set ImAddress value
     * @param string $imAddress
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setImAddress($imAddress = null)
    {
        $this->ImAddress = $imAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
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
