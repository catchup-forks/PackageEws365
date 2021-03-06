<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarEvent ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCalendarEvent extends AbstractStructArrayBase
{
    /**
     * The CalendarEvent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCalendarEvent[]
     */
    public $CalendarEvent;
    /**
     * Constructor method for ArrayOfCalendarEvent
     * @uses EwsArrayOfCalendarEvent::setCalendarEvent()
     * @param \Ews\StructType\EwsCalendarEvent[] $calendarEvent
     */
    public function __construct(array $calendarEvent = array())
    {
        $this
            ->setCalendarEvent($calendarEvent);
    }
    /**
     * Get CalendarEvent value
     * @return \Ews\StructType\EwsCalendarEvent[]|null
     */
    public function getCalendarEvent()
    {
        return $this->CalendarEvent;
    }
    /**
     * Set CalendarEvent value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarEvent[] $calendarEvent
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public function setCalendarEvent(array $calendarEvent = array())
    {
        foreach ($calendarEvent as $arrayOfCalendarEventCalendarEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalendarEventCalendarEventItem instanceof \Ews\StructType\EwsCalendarEvent) {
                throw new \InvalidArgumentException(sprintf('The CalendarEvent property can only contain items of \Ews\StructType\EwsCalendarEvent, "%s" given', is_object($arrayOfCalendarEventCalendarEventItem) ? get_class($arrayOfCalendarEventCalendarEventItem) : gettype($arrayOfCalendarEventCalendarEventItem)), __LINE__);
            }
        }
        $this->CalendarEvent = $calendarEvent;
        return $this;
    }
    /**
     * Add item to CalendarEvent value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarEvent $item
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public function addToCalendarEvent(\Ews\StructType\EwsCalendarEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCalendarEvent) {
            throw new \InvalidArgumentException(sprintf('The CalendarEvent property can only contain items of \Ews\StructType\EwsCalendarEvent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CalendarEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarEvent
     */
    public function getAttributeName()
    {
        return 'CalendarEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent
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
