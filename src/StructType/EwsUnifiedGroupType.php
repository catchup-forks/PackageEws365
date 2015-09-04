<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a unified group with favorite state
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUnifiedGroupType extends EwsUnifiedGroupBaseType
{
    /**
     * The IsFavorite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsFavorite;
    /**
     * The LastVisitedTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $LastVisitedTimeUtc;
    /**
     * The ExternalDirectoryObjectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * Constructor method for UnifiedGroupType
     * @uses EwsUnifiedGroupType::setIsFavorite()
     * @uses EwsUnifiedGroupType::setLastVisitedTimeUtc()
     * @uses EwsUnifiedGroupType::setExternalDirectoryObjectId()
     * @param boolean $isFavorite
     * @param dateTime $lastVisitedTimeUtc
     * @param string $externalDirectoryObjectId
     */
    public function __construct($isFavorite = null, $lastVisitedTimeUtc = null, $externalDirectoryObjectId = null)
    {
        $this
            ->setIsFavorite($isFavorite)
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get IsFavorite value
     * @return boolean|null
     */
    public function getIsFavorite()
    {
        return $this->IsFavorite;
    }
    /**
     * Set IsFavorite value
     * @param boolean $isFavorite
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setIsFavorite($isFavorite = null)
    {
        $this->IsFavorite = $isFavorite;
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return dateTime|null
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param dateTime $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \Ews\StructType\EwsUnifiedGroupType
     */
    public function setExternalDirectoryObjectId($externalDirectoryObjectId = null)
    {
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupType
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
