<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceAttachmentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsReferenceAttachmentType extends EwsAttachmentType
{
    /**
     * The AttachLongPathName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachLongPathName;
    /**
     * The ProviderType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProviderType;
    /**
     * The ProviderEndpointUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProviderEndpointUrl;
    /**
     * The AttachmentThumbnailUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentThumbnailUrl;
    /**
     * The AttachmentPreviewUrl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentPreviewUrl;
    /**
     * The PermissionType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $PermissionType;
    /**
     * The AttachmentIsFolder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $AttachmentIsFolder;
    /**
     * Constructor method for ReferenceAttachmentType
     * @uses EwsReferenceAttachmentType::setAttachLongPathName()
     * @uses EwsReferenceAttachmentType::setProviderType()
     * @uses EwsReferenceAttachmentType::setProviderEndpointUrl()
     * @uses EwsReferenceAttachmentType::setAttachmentThumbnailUrl()
     * @uses EwsReferenceAttachmentType::setAttachmentPreviewUrl()
     * @uses EwsReferenceAttachmentType::setPermissionType()
     * @uses EwsReferenceAttachmentType::setAttachmentIsFolder()
     * @param string $attachLongPathName
     * @param string $providerType
     * @param string $providerEndpointUrl
     * @param string $attachmentThumbnailUrl
     * @param string $attachmentPreviewUrl
     * @param int $permissionType
     * @param boolean $attachmentIsFolder
     */
    public function __construct($attachLongPathName = null, $providerType = null, $providerEndpointUrl = null, $attachmentThumbnailUrl = null, $attachmentPreviewUrl = null, $permissionType = null, $attachmentIsFolder = null)
    {
        $this
            ->setAttachLongPathName($attachLongPathName)
            ->setProviderType($providerType)
            ->setProviderEndpointUrl($providerEndpointUrl)
            ->setAttachmentThumbnailUrl($attachmentThumbnailUrl)
            ->setAttachmentPreviewUrl($attachmentPreviewUrl)
            ->setPermissionType($permissionType)
            ->setAttachmentIsFolder($attachmentIsFolder);
    }
    /**
     * Get AttachLongPathName value
     * @return string|null
     */
    public function getAttachLongPathName()
    {
        return $this->AttachLongPathName;
    }
    /**
     * Set AttachLongPathName value
     * @param string $attachLongPathName
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachLongPathName($attachLongPathName = null)
    {
        $this->AttachLongPathName = $attachLongPathName;
        return $this;
    }
    /**
     * Get ProviderType value
     * @return string|null
     */
    public function getProviderType()
    {
        return $this->ProviderType;
    }
    /**
     * Set ProviderType value
     * @param string $providerType
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setProviderType($providerType = null)
    {
        $this->ProviderType = $providerType;
        return $this;
    }
    /**
     * Get ProviderEndpointUrl value
     * @return string|null
     */
    public function getProviderEndpointUrl()
    {
        return $this->ProviderEndpointUrl;
    }
    /**
     * Set ProviderEndpointUrl value
     * @param string $providerEndpointUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setProviderEndpointUrl($providerEndpointUrl = null)
    {
        $this->ProviderEndpointUrl = $providerEndpointUrl;
        return $this;
    }
    /**
     * Get AttachmentThumbnailUrl value
     * @return string|null
     */
    public function getAttachmentThumbnailUrl()
    {
        return $this->AttachmentThumbnailUrl;
    }
    /**
     * Set AttachmentThumbnailUrl value
     * @param string $attachmentThumbnailUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentThumbnailUrl($attachmentThumbnailUrl = null)
    {
        $this->AttachmentThumbnailUrl = $attachmentThumbnailUrl;
        return $this;
    }
    /**
     * Get AttachmentPreviewUrl value
     * @return string|null
     */
    public function getAttachmentPreviewUrl()
    {
        return $this->AttachmentPreviewUrl;
    }
    /**
     * Set AttachmentPreviewUrl value
     * @param string $attachmentPreviewUrl
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentPreviewUrl($attachmentPreviewUrl = null)
    {
        $this->AttachmentPreviewUrl = $attachmentPreviewUrl;
        return $this;
    }
    /**
     * Get PermissionType value
     * @return int|null
     */
    public function getPermissionType()
    {
        return $this->PermissionType;
    }
    /**
     * Set PermissionType value
     * @param int $permissionType
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setPermissionType($permissionType = null)
    {
        $this->PermissionType = $permissionType;
        return $this;
    }
    /**
     * Get AttachmentIsFolder value
     * @return boolean|null
     */
    public function getAttachmentIsFolder()
    {
        return $this->AttachmentIsFolder;
    }
    /**
     * Set AttachmentIsFolder value
     * @param boolean $attachmentIsFolder
     * @return \Ews\StructType\EwsReferenceAttachmentType
     */
    public function setAttachmentIsFolder($attachmentIsFolder = null)
    {
        $this->AttachmentIsFolder = $attachmentIsFolder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsReferenceAttachmentType
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
