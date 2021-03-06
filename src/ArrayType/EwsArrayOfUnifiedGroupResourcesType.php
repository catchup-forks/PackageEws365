<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupResourcesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupResourcesType extends AbstractStructArrayBase
{
    /**
     * The Resource
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUnifiedGroupResourceType[]
     */
    public $Resource;
    /**
     * Constructor method for ArrayOfUnifiedGroupResourcesType
     * @uses EwsArrayOfUnifiedGroupResourcesType::setResource()
     * @param \Ews\StructType\EwsUnifiedGroupResourceType[] $resource
     */
    public function __construct(array $resource = array())
    {
        $this
            ->setResource($resource);
    }
    /**
     * Get Resource value
     * @return \Ews\StructType\EwsUnifiedGroupResourceType[]|null
     */
    public function getResource()
    {
        return $this->Resource;
    }
    /**
     * Set Resource value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupResourceType[] $resource
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function setResource(array $resource = array())
    {
        foreach ($resource as $arrayOfUnifiedGroupResourcesTypeResourceItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupResourcesTypeResourceItem instanceof \Ews\StructType\EwsUnifiedGroupResourceType) {
                throw new \InvalidArgumentException(sprintf('The Resource property can only contain items of \Ews\StructType\EwsUnifiedGroupResourceType, "%s" given', is_object($arrayOfUnifiedGroupResourcesTypeResourceItem) ? get_class($arrayOfUnifiedGroupResourcesTypeResourceItem) : gettype($arrayOfUnifiedGroupResourcesTypeResourceItem)), __LINE__);
            }
        }
        $this->Resource = $resource;
        return $this;
    }
    /**
     * Add item to Resource value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupResourceType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
     */
    public function addToResource(\Ews\StructType\EwsUnifiedGroupResourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupResourceType) {
            throw new \InvalidArgumentException(sprintf('The Resource property can only contain items of \Ews\StructType\EwsUnifiedGroupResourceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Resource[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupResourceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Resource
     */
    public function getAttributeName()
    {
        return 'Resource';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupResourcesType
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
