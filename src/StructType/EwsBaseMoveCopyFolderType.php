<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMoveCopyFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseMoveCopyFolderType extends EwsBaseRequestType
{
    /**
     * The ToFolderId
     * @var \Ews\StructType\EwsTargetFolderIdType
     */
    public $ToFolderId;
    /**
     * The FolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
    /**
     * Constructor method for BaseMoveCopyFolderType
     * @uses EwsBaseMoveCopyFolderType::setToFolderId()
     * @uses EwsBaseMoveCopyFolderType::setFolderIds()
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    public function __construct(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this
            ->setToFolderId($toFolderId)
            ->setFolderIds($folderIds);
    }
    /**
     * Get ToFolderId value
     * @return \Ews\StructType\EwsTargetFolderIdType|null
     */
    public function getToFolderId()
    {
        return $this->ToFolderId;
    }
    /**
     * Set ToFolderId value
     * @param \Ews\StructType\EwsTargetFolderIdType $toFolderId
     * @return \Ews\StructType\EwsBaseMoveCopyFolderType
     */
    public function setToFolderId(\Ews\StructType\EwsTargetFolderIdType $toFolderId = null)
    {
        $this->ToFolderId = $toFolderId;
        return $this;
    }
    /**
     * Get FolderIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds()
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \Ews\StructType\EwsBaseMoveCopyFolderType
     */
    public function setFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null)
    {
        $this->FolderIds = $folderIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseMoveCopyFolderType
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
