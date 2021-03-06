<?php

namespace Ews\EnumType;

/**
 * This class stands for SyncFolderItemsScopeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsScopeType
{
    /**
     * Constant for value 'NormalItems'
     * @return string 'NormalItems'
     */
    const VALUE_NORMAL_ITEMS = 'NormalItems';
    /**
     * Constant for value 'NormalAndAssociatedItems'
     * @return string 'NormalAndAssociatedItems'
     */
    const VALUE_NORMAL_AND_ASSOCIATED_ITEMS = 'NormalAndAssociatedItems';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NORMAL_ITEMS
     * @uses self::VALUE_NORMAL_AND_ASSOCIATED_ITEMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL_ITEMS,
            self::VALUE_NORMAL_AND_ASSOCIATED_ITEMS,
        );
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
