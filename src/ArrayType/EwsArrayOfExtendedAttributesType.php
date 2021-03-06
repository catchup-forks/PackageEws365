<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtendedAttributesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of extended attributes of a target mailbox
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtendedAttributesType extends AbstractStructArrayBase
{
    /**
     * The ExtendedAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \Ews\StructType\EwsExtendedAttributeType[]
     */
    public $ExtendedAttribute;
    /**
     * Constructor method for ArrayOfExtendedAttributesType
     * @uses EwsArrayOfExtendedAttributesType::setExtendedAttribute()
     * @param \Ews\StructType\EwsExtendedAttributeType[] $extendedAttribute
     */
    public function __construct(array $extendedAttribute = array())
    {
        $this
            ->setExtendedAttribute($extendedAttribute);
    }
    /**
     * Get ExtendedAttribute value
     * @return \Ews\StructType\EwsExtendedAttributeType[]|null
     */
    public function getExtendedAttribute()
    {
        return $this->ExtendedAttribute;
    }
    /**
     * Set ExtendedAttribute value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedAttributeType[] $extendedAttribute
     * @return \Ews\ArrayType\EwsArrayOfExtendedAttributesType
     */
    public function setExtendedAttribute(array $extendedAttribute = array())
    {
        foreach ($extendedAttribute as $arrayOfExtendedAttributesTypeExtendedAttributeItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtendedAttributesTypeExtendedAttributeItem instanceof \Ews\StructType\EwsExtendedAttributeType) {
                throw new \InvalidArgumentException(sprintf('The ExtendedAttribute property can only contain items of \Ews\StructType\EwsExtendedAttributeType, "%s" given', is_object($arrayOfExtendedAttributesTypeExtendedAttributeItem) ? get_class($arrayOfExtendedAttributesTypeExtendedAttributeItem) : gettype($arrayOfExtendedAttributesTypeExtendedAttributeItem)), __LINE__);
            }
        }
        $this->ExtendedAttribute = $extendedAttribute;
        return $this;
    }
    /**
     * Add item to ExtendedAttribute value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedAttributeType $item
     * @return \Ews\ArrayType\EwsArrayOfExtendedAttributesType
     */
    public function addToExtendedAttribute(\Ews\StructType\EwsExtendedAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsExtendedAttributeType) {
            throw new \InvalidArgumentException(sprintf('The ExtendedAttribute property can only contain items of \Ews\StructType\EwsExtendedAttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExtendedAttribute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsExtendedAttributeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsExtendedAttributeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsExtendedAttributeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsExtendedAttributeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsExtendedAttributeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedAttribute
     */
    public function getAttributeName()
    {
        return 'ExtendedAttribute';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfExtendedAttributesType
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
