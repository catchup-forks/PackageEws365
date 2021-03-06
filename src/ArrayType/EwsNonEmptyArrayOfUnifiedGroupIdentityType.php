<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUnifiedGroupIdentityType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUnifiedGroupIdentityType extends AbstractStructArrayBase
{
    /**
     * The GroupIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity[]
     */
    public $GroupIdentity;
    /**
     * Constructor method for NonEmptyArrayOfUnifiedGroupIdentityType
     * @uses EwsNonEmptyArrayOfUnifiedGroupIdentityType::setGroupIdentity()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     */
    public function __construct(array $groupIdentity = array())
    {
        $this
            ->setGroupIdentity($groupIdentity);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity[]
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function setGroupIdentity(array $groupIdentity = array())
    {
        foreach ($groupIdentity as $nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem instanceof \Ews\StructType\EwsUnifiedGroupIdentity) {
                throw new \InvalidArgumentException(sprintf('The GroupIdentity property can only contain items of \Ews\StructType\EwsUnifiedGroupIdentity, "%s" given', is_object($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) ? get_class($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) : gettype($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem)), __LINE__);
            }
        }
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
    /**
     * Add item to GroupIdentity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function addToGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupIdentity) {
            throw new \InvalidArgumentException(sprintf('The GroupIdentity property can only contain items of \Ews\StructType\EwsUnifiedGroupIdentity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GroupIdentity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupIdentity
     */
    public function getAttributeName()
    {
        return 'GroupIdentity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
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
