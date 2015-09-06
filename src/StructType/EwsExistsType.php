<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExistsType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:Path
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExistsType extends EwsSearchExpressionType
{
    /**
     * The Path
     * @var \Ews\StructType\EwsBasePathToElementType
     */
    public $Path;
    /**
     * Constructor method for ExistsType
     * @uses EwsExistsType::setPath()
     * @param \Ews\StructType\EwsBasePathToElementType $path
     */
    public function __construct(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this
            ->setPath($path);
    }
    /**
     * Get Path value
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function getPath()
    {
        return $this->Path;
    }
    /**
     * Set Path value
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @return \Ews\StructType\EwsExistsType
     */
    public function setPath(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExistsType
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
