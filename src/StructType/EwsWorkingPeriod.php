<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkingPeriod StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWorkingPeriod extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DayOfWeek;
    /**
     * The StartTimeInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StartTimeInMinutes;
    /**
     * The EndTimeInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EndTimeInMinutes;
    /**
     * Constructor method for WorkingPeriod
     * @uses EwsWorkingPeriod::setDayOfWeek()
     * @uses EwsWorkingPeriod::setStartTimeInMinutes()
     * @uses EwsWorkingPeriod::setEndTimeInMinutes()
     * @param string $dayOfWeek
     * @param int $startTimeInMinutes
     * @param int $endTimeInMinutes
     */
    public function __construct($dayOfWeek = null, $startTimeInMinutes = null, $endTimeInMinutes = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setStartTimeInMinutes($startTimeInMinutes)
            ->setEndTimeInMinutes($endTimeInMinutes);
    }
    /**
     * Get DayOfWeek value
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param string $dayOfWeek
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeek) && !is_string($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeek)), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get StartTimeInMinutes value
     * @return int
     */
    public function getStartTimeInMinutes()
    {
        return $this->StartTimeInMinutes;
    }
    /**
     * Set StartTimeInMinutes value
     * @param int $startTimeInMinutes
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setStartTimeInMinutes($startTimeInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($startTimeInMinutes) && !is_numeric($startTimeInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startTimeInMinutes)), __LINE__);
        }
        $this->StartTimeInMinutes = $startTimeInMinutes;
        return $this;
    }
    /**
     * Get EndTimeInMinutes value
     * @return int
     */
    public function getEndTimeInMinutes()
    {
        return $this->EndTimeInMinutes;
    }
    /**
     * Set EndTimeInMinutes value
     * @param int $endTimeInMinutes
     * @return \Ews\StructType\EwsWorkingPeriod
     */
    public function setEndTimeInMinutes($endTimeInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($endTimeInMinutes) && !is_numeric($endTimeInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endTimeInMinutes)), __LINE__);
        }
        $this->EndTimeInMinutes = $endTimeInMinutes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsWorkingPeriod
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
