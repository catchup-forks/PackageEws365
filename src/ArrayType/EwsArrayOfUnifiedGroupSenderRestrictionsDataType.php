<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupSenderRestrictionsDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupSenderRestrictionsDataType extends AbstractStructArrayBase
{
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $Sender;
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionsDataType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionsDataType::setSender()
     * @param array $sender
     */
    public function __construct(array $sender = array())
    {
        $this
            ->setSender($sender);
    }
    /**
     * Get Sender value
     * @return array
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param array $sender
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public function setSender(array $sender = array())
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Sender
     */
    public function getAttributeName()
    {
        return 'Sender';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
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
