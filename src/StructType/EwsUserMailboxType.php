<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserMailboxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: User Mailbox.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUserMailboxType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The IsArchive
     * Meta informations extracted from the WSDL
     * - use: required
     * @var boolean
     */
    public $IsArchive;
    /**
     * Constructor method for UserMailboxType
     * @uses EwsUserMailboxType::setId()
     * @uses EwsUserMailboxType::setIsArchive()
     * @param string $id
     * @param boolean $isArchive
     */
    public function __construct($id = null, $isArchive = null)
    {
        $this
            ->setId($id)
            ->setIsArchive($isArchive);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get IsArchive value
     * @return boolean
     */
    public function getIsArchive()
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param boolean $isArchive
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function setIsArchive($isArchive = null)
    {
        $this->IsArchive = $isArchive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserMailboxType
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