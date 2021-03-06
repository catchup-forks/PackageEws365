<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPermissionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPermissionsType extends AbstractStructArrayBase
{
    /**
     * The Permission
     * @var \Ews\StructType\EwsPermissionType
     */
    public $Permission;
    /**
     * Constructor method for ArrayOfPermissionsType
     * @uses EwsArrayOfPermissionsType::setPermission()
     * @param \Ews\StructType\EwsPermissionType $permission
     */
    public function __construct(\Ews\StructType\EwsPermissionType $permission = null)
    {
        $this
            ->setPermission($permission);
    }
    /**
     * Get Permission value
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function getPermission()
    {
        return $this->Permission;
    }
    /**
     * Set Permission value
     * @param \Ews\StructType\EwsPermissionType $permission
     * @return \Ews\ArrayType\EwsArrayOfPermissionsType
     */
    public function setPermission(\Ews\StructType\EwsPermissionType $permission = null)
    {
        $this->Permission = $permission;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPermissionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Permission
     */
    public function getAttributeName()
    {
        return 'Permission';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPermissionsType
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
