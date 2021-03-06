<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInvalidRecipientsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInvalidRecipientsType extends AbstractStructArrayBase
{
    /**
     * The InvalidRecipient
     * @var \Ews\StructType\EwsInvalidRecipientType
     */
    public $InvalidRecipient;
    /**
     * Constructor method for ArrayOfInvalidRecipientsType
     * @uses EwsArrayOfInvalidRecipientsType::setInvalidRecipient()
     * @param \Ews\StructType\EwsInvalidRecipientType $invalidRecipient
     */
    public function __construct(\Ews\StructType\EwsInvalidRecipientType $invalidRecipient = null)
    {
        $this
            ->setInvalidRecipient($invalidRecipient);
    }
    /**
     * Get InvalidRecipient value
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function getInvalidRecipient()
    {
        return $this->InvalidRecipient;
    }
    /**
     * Set InvalidRecipient value
     * @param \Ews\StructType\EwsInvalidRecipientType $invalidRecipient
     * @return \Ews\ArrayType\EwsArrayOfInvalidRecipientsType
     */
    public function setInvalidRecipient(\Ews\StructType\EwsInvalidRecipientType $invalidRecipient = null)
    {
        $this->InvalidRecipient = $invalidRecipient;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInvalidRecipientType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InvalidRecipient
     */
    public function getAttributeName()
    {
        return 'InvalidRecipient';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfInvalidRecipientsType
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
