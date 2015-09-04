<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PushSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPushSubscriptionRequestType extends EwsBaseSubscriptionRequestType
{
    /**
     * The StatusFrequency
     * Meta informations extracted from the WSDL
     * - maxInclusive: 1440
     * - minInclusive: 1
     * @var int
     */
    public $StatusFrequency;
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The CallerData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallerData;
    /**
     * Constructor method for PushSubscriptionRequestType
     * @uses EwsPushSubscriptionRequestType::setStatusFrequency()
     * @uses EwsPushSubscriptionRequestType::setURL()
     * @uses EwsPushSubscriptionRequestType::setCallerData()
     * @param int $statusFrequency
     * @param string $uRL
     * @param string $callerData
     */
    public function __construct($statusFrequency = null, $uRL = null, $callerData = null)
    {
        $this
            ->setStatusFrequency($statusFrequency)
            ->setURL($uRL)
            ->setCallerData($callerData);
    }
    /**
     * Get StatusFrequency value
     * @return int|null
     */
    public function getStatusFrequency()
    {
        return $this->StatusFrequency;
    }
    /**
     * Set StatusFrequency value
     * @param int $statusFrequency
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setStatusFrequency($statusFrequency = null)
    {
        $this->StatusFrequency = $statusFrequency;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setURL($uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CallerData value
     * @return string|null
     */
    public function getCallerData()
    {
        return $this->CallerData;
    }
    /**
     * Set CallerData value
     * @param string $callerData
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setCallerData($callerData = null)
    {
        $this->CallerData = $callerData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
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