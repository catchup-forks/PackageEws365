<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxStatisticsItemsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of mailbox statistics item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxStatisticsItemsType extends AbstractStructArrayBase
{
    /**
     * The MailboxStat
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailboxStatisticsItemType[]
     */
    public $MailboxStat;
    /**
     * Constructor method for ArrayOfMailboxStatisticsItemsType
     * @uses EwsArrayOfMailboxStatisticsItemsType::setMailboxStat()
     * @param \Ews\StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     */
    public function __construct(array $mailboxStat = array())
    {
        $this
            ->setMailboxStat($mailboxStat);
    }
    /**
     * Get MailboxStat value
     * @return \Ews\StructType\EwsMailboxStatisticsItemType[]|null
     */
    public function getMailboxStat()
    {
        return $this->MailboxStat;
    }
    /**
     * Set MailboxStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function setMailboxStat(array $mailboxStat = array())
    {
        foreach ($mailboxStat as $arrayOfMailboxStatisticsItemsTypeMailboxStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxStatisticsItemsTypeMailboxStatItem instanceof \Ews\StructType\EwsMailboxStatisticsItemType) {
                throw new \InvalidArgumentException(sprintf('The MailboxStat property can only contain items of \Ews\StructType\EwsMailboxStatisticsItemType, "%s" given', is_object($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) ? get_class($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) : gettype($arrayOfMailboxStatisticsItemsTypeMailboxStatItem)), __LINE__);
            }
        }
        $this->MailboxStat = $mailboxStat;
        return $this;
    }
    /**
     * Add item to MailboxStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxStatisticsItemType $item
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function addToMailboxStat(\Ews\StructType\EwsMailboxStatisticsItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxStatisticsItemType) {
            throw new \InvalidArgumentException(sprintf('The MailboxStat property can only contain items of \Ews\StructType\EwsMailboxStatisticsItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MailboxStat[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxStat
     */
    public function getAttributeName()
    {
        return 'MailboxStat';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
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
