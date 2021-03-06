<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndSearchSession StructType
 * Meta informations extracted from the WSDL
 * - type: m:EndSearchSession
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEndSearchSession extends EwsBaseRequestType
{
    /**
     * The SearchSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $SearchSessionId;
    /**
     * Constructor method for EndSearchSession
     * @uses EwsEndSearchSession::setSearchSessionId()
     * @param string $searchSessionId
     */
    public function __construct($searchSessionId = null)
    {
        $this
            ->setSearchSessionId($searchSessionId);
    }
    /**
     * Get SearchSessionId value
     * @return string
     */
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsEndSearchSession
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($searchSessionId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEndSearchSession
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
