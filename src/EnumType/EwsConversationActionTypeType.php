<?php

namespace Ews\EnumType;

/**
 * This class stands for ConversationActionTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationActionTypeType
{
    /**
     * Constant for value 'AlwaysCategorize'
     * @return string 'AlwaysCategorize'
     */
    const VALUE_ALWAYS_CATEGORIZE = 'AlwaysCategorize';
    /**
     * Constant for value 'AlwaysDelete'
     * @return string 'AlwaysDelete'
     */
    const VALUE_ALWAYS_DELETE = 'AlwaysDelete';
    /**
     * Constant for value 'AlwaysMove'
     * @return string 'AlwaysMove'
     */
    const VALUE_ALWAYS_MOVE = 'AlwaysMove';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Move'
     * @return string 'Move'
     */
    const VALUE_MOVE = 'Move';
    /**
     * Constant for value 'Copy'
     * @return string 'Copy'
     */
    const VALUE_COPY = 'Copy';
    /**
     * Constant for value 'SetReadState'
     * @return string 'SetReadState'
     */
    const VALUE_SET_READ_STATE = 'SetReadState';
    /**
     * Constant for value 'SetRetentionPolicy'
     * @return string 'SetRetentionPolicy'
     */
    const VALUE_SET_RETENTION_POLICY = 'SetRetentionPolicy';
    /**
     * Constant for value 'Flag'
     * @return string 'Flag'
     */
    const VALUE_FLAG = 'Flag';
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
     * @uses self::VALUE_ALWAYS_CATEGORIZE
     * @uses self::VALUE_ALWAYS_DELETE
     * @uses self::VALUE_ALWAYS_MOVE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_MOVE
     * @uses self::VALUE_COPY
     * @uses self::VALUE_SET_READ_STATE
     * @uses self::VALUE_SET_RETENTION_POLICY
     * @uses self::VALUE_FLAG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALWAYS_CATEGORIZE,
            self::VALUE_ALWAYS_DELETE,
            self::VALUE_ALWAYS_MOVE,
            self::VALUE_DELETE,
            self::VALUE_MOVE,
            self::VALUE_COPY,
            self::VALUE_SET_READ_STATE,
            self::VALUE_SET_RETENTION_POLICY,
            self::VALUE_FLAG,
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
