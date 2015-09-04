<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileItemContextsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfFileItemContextsType extends AbstractStructArrayBase
{
    /**
     * The FileContext
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: File context properties.
     * @var array
     */
    public $FileContext;
    /**
     * Constructor method for ArrayOfFileItemContextsType
     * @uses EwsArrayOfFileItemContextsType::setFileContext()
     * @param array $fileContext
     */
    public function __construct(array $fileContext = array())
    {
        $this
            ->setFileContext($fileContext);
    }
    /**
     * Get FileContext value
     * @return array
     */
    public function getFileContext()
    {
        return $this->FileContext;
    }
    /**
     * Set FileContext value
     * @param array $fileContext
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
     */
    public function setFileContext(array $fileContext = array())
    {
        $this->FileContext = $fileContext;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFileItemContext|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileContext
     */
    public function getAttributeName()
    {
        return 'FileContext';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFileItemContextsType
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
