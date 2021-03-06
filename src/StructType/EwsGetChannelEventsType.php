<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChannelEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetChannelEventsType extends EwsBaseRequestType
{
    /**
     * The ChannelId
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ChannelId;
    /**
     * The ConnectionTimeout
     * Meta informations extracted from the WSDL
     * - maxInclusive: 120
     * - minInclusive: 1
     * @var int
     */
    public $ConnectionTimeout;
    /**
     * The LastNotificationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $LastNotificationId;
    /**
     * Constructor method for GetChannelEventsType
     * @uses EwsGetChannelEventsType::setChannelId()
     * @uses EwsGetChannelEventsType::setConnectionTimeout()
     * @uses EwsGetChannelEventsType::setLastNotificationId()
     * @param string $channelId
     * @param int $connectionTimeout
     * @param string $lastNotificationId
     */
    public function __construct($channelId = null, $connectionTimeout = null, $lastNotificationId = null)
    {
        $this
            ->setChannelId($channelId)
            ->setConnectionTimeout($connectionTimeout)
            ->setLastNotificationId($lastNotificationId);
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId()
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setChannelId($channelId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($channelId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($channelId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($channelId)), __LINE__);
        }
        $this->ChannelId = $channelId;
        return $this;
    }
    /**
     * Get ConnectionTimeout value
     * @return int|null
     */
    public function getConnectionTimeout()
    {
        return $this->ConnectionTimeout;
    }
    /**
     * Set ConnectionTimeout value
     * @param int $connectionTimeout
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setConnectionTimeout($connectionTimeout = null)
    {
        // validation for constraint: maxInclusive
        if ($connectionTimeout > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 120, "%s" given', $connectionTimeout), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($connectionTimeout < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $connectionTimeout), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($connectionTimeout) && !is_numeric($connectionTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($connectionTimeout)), __LINE__);
        }
        $this->ConnectionTimeout = $connectionTimeout;
        return $this;
    }
    /**
     * Get LastNotificationId value
     * @return string|null
     */
    public function getLastNotificationId()
    {
        return $this->LastNotificationId;
    }
    /**
     * Set LastNotificationId value
     * @param string $lastNotificationId
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setLastNotificationId($lastNotificationId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($lastNotificationId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $lastNotificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($lastNotificationId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lastNotificationId) && !is_string($lastNotificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastNotificationId)), __LINE__);
        }
        $this->LastNotificationId = $lastNotificationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetChannelEventsType
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
