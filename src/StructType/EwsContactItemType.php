<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactItemType extends EwsItemType
{
    /**
     * The FileAs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAs;
    /**
     * The FileAsMapping
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAsMapping;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The GivenName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GivenName;
    /**
     * The Initials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Initials;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The Nickname
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Nickname;
    /**
     * The CompleteName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCompleteNameType
     */
    public $CompleteName;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressDictionaryType
     */
    public $EmailAddresses;
    /**
     * The AbchEmailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public $AbchEmailAddresses;
    /**
     * The PhysicalAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;
    /**
     * The PhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneNumberDictionaryType
     */
    public $PhoneNumbers;
    /**
     * The AssistantName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AssistantName;
    /**
     * The Birthday
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $Birthday;
    /**
     * The BusinessHomePage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var anyURI
     */
    public $BusinessHomePage;
    /**
     * The Children
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Children;
    /**
     * The Companies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Companies;
    /**
     * The ContactSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSource;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The Generation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Generation;
    /**
     * The ImAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsImAddressDictionaryType
     */
    public $ImAddresses;
    /**
     * The JobTitle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobTitle;
    /**
     * The Manager
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Manager;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Mileage;
    /**
     * The OfficeLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfficeLocation;
    /**
     * The PostalAddressIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalAddressIndex;
    /**
     * The Profession
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Profession;
    /**
     * The SpouseName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpouseName;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * The WeddingAnniversary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $WeddingAnniversary;
    /**
     * The HasPicture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HasPicture;
    /**
     * The PhoneticFullName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticFullName;
    /**
     * The PhoneticFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticFirstName;
    /**
     * The PhoneticLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneticLastName;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Photo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Photo;
    /**
     * The UserSMIMECertificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public $UserSMIMECertificate;
    /**
     * The MSExchangeCertificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfBinaryType
     */
    public $MSExchangeCertificate;
    /**
     * The DirectoryId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DirectoryId;
    /**
     * The ManagerMailbox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $ManagerMailbox;
    /**
     * The DirectReports
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $DirectReports;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * The IsAutoUpdateDisabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsAutoUpdateDisabled;
    /**
     * The IsMessengerEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsMessengerEnabled;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The ContactShortId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ContactShortId;
    /**
     * The ContactType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactType;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The IsHidden
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsHidden;
    /**
     * The ObjectId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectId;
    /**
     * The PassportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var long
     */
    public $PassportId;
    /**
     * The IsPrivate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsPrivate;
    /**
     * The SourceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SourceId;
    /**
     * The TrustLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TrustLevel;
    /**
     * The CreatedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreatedBy;
    /**
     * The Urls
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsContactUrlDictionaryType
     */
    public $Urls;
    /**
     * The Cid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var long
     */
    public $Cid;
    /**
     * The SkypeAuthCertificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeAuthCertificate;
    /**
     * The SkypeContext
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeContext;
    /**
     * The SkypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeId;
    /**
     * The SkypeRelationship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SkypeRelationship;
    /**
     * The YomiNickname
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $YomiNickname;
    /**
     * The XboxLiveTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $XboxLiveTag;
    /**
     * The InviteFree
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $InviteFree;
    /**
     * The HidePresenceAndProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $HidePresenceAndProfile;
    /**
     * The IsPendingOutbound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsPendingOutbound;
    /**
     * The SupportGroupFeeds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $SupportGroupFeeds;
    /**
     * The UserTileHash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserTileHash;
    /**
     * The UnifiedInbox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $UnifiedInbox;
    /**
     * The Mris
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Mris;
    /**
     * The Wlid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Wlid;
    /**
     * The AbchContactId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $AbchContactId;
    /**
     * The NotInBirthdayCalendar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $NotInBirthdayCalendar;
    /**
     * The ShellContactType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShellContactType;
    /**
     * The ImMri
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImMri;
    /**
     * The PresenceTrustLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PresenceTrustLevel;
    /**
     * The OtherMri
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OtherMri;
    /**
     * The ProfileLastChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProfileLastChanged;
    /**
     * The MobileIMEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $MobileIMEnabled;
    /**
     * The PartnerNetworkProfilePhotoUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerNetworkProfilePhotoUrl;
    /**
     * The PartnerNetworkThumbnailPhotoUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerNetworkThumbnailPhotoUrl;
    /**
     * Constructor method for ContactItemType
     * @uses EwsContactItemType::setFileAs()
     * @uses EwsContactItemType::setFileAsMapping()
     * @uses EwsContactItemType::setDisplayName()
     * @uses EwsContactItemType::setGivenName()
     * @uses EwsContactItemType::setInitials()
     * @uses EwsContactItemType::setMiddleName()
     * @uses EwsContactItemType::setNickname()
     * @uses EwsContactItemType::setCompleteName()
     * @uses EwsContactItemType::setCompanyName()
     * @uses EwsContactItemType::setEmailAddresses()
     * @uses EwsContactItemType::setAbchEmailAddresses()
     * @uses EwsContactItemType::setPhysicalAddresses()
     * @uses EwsContactItemType::setPhoneNumbers()
     * @uses EwsContactItemType::setAssistantName()
     * @uses EwsContactItemType::setBirthday()
     * @uses EwsContactItemType::setBusinessHomePage()
     * @uses EwsContactItemType::setChildren()
     * @uses EwsContactItemType::setCompanies()
     * @uses EwsContactItemType::setContactSource()
     * @uses EwsContactItemType::setDepartment()
     * @uses EwsContactItemType::setGeneration()
     * @uses EwsContactItemType::setImAddresses()
     * @uses EwsContactItemType::setJobTitle()
     * @uses EwsContactItemType::setManager()
     * @uses EwsContactItemType::setMileage()
     * @uses EwsContactItemType::setOfficeLocation()
     * @uses EwsContactItemType::setPostalAddressIndex()
     * @uses EwsContactItemType::setProfession()
     * @uses EwsContactItemType::setSpouseName()
     * @uses EwsContactItemType::setSurname()
     * @uses EwsContactItemType::setWeddingAnniversary()
     * @uses EwsContactItemType::setHasPicture()
     * @uses EwsContactItemType::setPhoneticFullName()
     * @uses EwsContactItemType::setPhoneticFirstName()
     * @uses EwsContactItemType::setPhoneticLastName()
     * @uses EwsContactItemType::setAlias()
     * @uses EwsContactItemType::setNotes()
     * @uses EwsContactItemType::setPhoto()
     * @uses EwsContactItemType::setUserSMIMECertificate()
     * @uses EwsContactItemType::setMSExchangeCertificate()
     * @uses EwsContactItemType::setDirectoryId()
     * @uses EwsContactItemType::setManagerMailbox()
     * @uses EwsContactItemType::setDirectReports()
     * @uses EwsContactItemType::setAccountName()
     * @uses EwsContactItemType::setIsAutoUpdateDisabled()
     * @uses EwsContactItemType::setIsMessengerEnabled()
     * @uses EwsContactItemType::setComment()
     * @uses EwsContactItemType::setContactShortId()
     * @uses EwsContactItemType::setContactType()
     * @uses EwsContactItemType::setGender()
     * @uses EwsContactItemType::setIsHidden()
     * @uses EwsContactItemType::setObjectId()
     * @uses EwsContactItemType::setPassportId()
     * @uses EwsContactItemType::setIsPrivate()
     * @uses EwsContactItemType::setSourceId()
     * @uses EwsContactItemType::setTrustLevel()
     * @uses EwsContactItemType::setCreatedBy()
     * @uses EwsContactItemType::setUrls()
     * @uses EwsContactItemType::setCid()
     * @uses EwsContactItemType::setSkypeAuthCertificate()
     * @uses EwsContactItemType::setSkypeContext()
     * @uses EwsContactItemType::setSkypeId()
     * @uses EwsContactItemType::setSkypeRelationship()
     * @uses EwsContactItemType::setYomiNickname()
     * @uses EwsContactItemType::setXboxLiveTag()
     * @uses EwsContactItemType::setInviteFree()
     * @uses EwsContactItemType::setHidePresenceAndProfile()
     * @uses EwsContactItemType::setIsPendingOutbound()
     * @uses EwsContactItemType::setSupportGroupFeeds()
     * @uses EwsContactItemType::setUserTileHash()
     * @uses EwsContactItemType::setUnifiedInbox()
     * @uses EwsContactItemType::setMris()
     * @uses EwsContactItemType::setWlid()
     * @uses EwsContactItemType::setAbchContactId()
     * @uses EwsContactItemType::setNotInBirthdayCalendar()
     * @uses EwsContactItemType::setShellContactType()
     * @uses EwsContactItemType::setImMri()
     * @uses EwsContactItemType::setPresenceTrustLevel()
     * @uses EwsContactItemType::setOtherMri()
     * @uses EwsContactItemType::setProfileLastChanged()
     * @uses EwsContactItemType::setMobileIMEnabled()
     * @uses EwsContactItemType::setPartnerNetworkProfilePhotoUrl()
     * @uses EwsContactItemType::setPartnerNetworkThumbnailPhotoUrl()
     * @param string $fileAs
     * @param string $fileAsMapping
     * @param string $displayName
     * @param string $givenName
     * @param string $initials
     * @param string $middleName
     * @param string $nickname
     * @param \Ews\StructType\EwsCompleteNameType $completeName
     * @param string $companyName
     * @param \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @param \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @param string $assistantName
     * @param dateTime $birthday
     * @param anyURI $businessHomePage
     * @param \Ews\ArrayType\EwsArrayOfStringsType $children
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @param string $contactSource
     * @param string $department
     * @param string $generation
     * @param \Ews\StructType\EwsImAddressDictionaryType $imAddresses
     * @param string $jobTitle
     * @param string $manager
     * @param string $mileage
     * @param string $officeLocation
     * @param string $postalAddressIndex
     * @param string $profession
     * @param string $spouseName
     * @param string $surname
     * @param dateTime $weddingAnniversary
     * @param boolean $hasPicture
     * @param string $phoneticFullName
     * @param string $phoneticFirstName
     * @param string $phoneticLastName
     * @param string $alias
     * @param string $notes
     * @param base64Binary $photo
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @param string $directoryId
     * @param \Ews\StructType\EwsSingleRecipientType $managerMailbox
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $directReports
     * @param string $accountName
     * @param boolean $isAutoUpdateDisabled
     * @param boolean $isMessengerEnabled
     * @param string $comment
     * @param int $contactShortId
     * @param string $contactType
     * @param string $gender
     * @param boolean $isHidden
     * @param string $objectId
     * @param long $passportId
     * @param boolean $isPrivate
     * @param string $sourceId
     * @param int $trustLevel
     * @param string $createdBy
     * @param \Ews\StructType\EwsContactUrlDictionaryType $urls
     * @param long $cid
     * @param string $skypeAuthCertificate
     * @param string $skypeContext
     * @param string $skypeId
     * @param string $skypeRelationship
     * @param string $yomiNickname
     * @param string $xboxLiveTag
     * @param boolean $inviteFree
     * @param boolean $hidePresenceAndProfile
     * @param boolean $isPendingOutbound
     * @param boolean $supportGroupFeeds
     * @param string $userTileHash
     * @param boolean $unifiedInbox
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mris
     * @param string $wlid
     * @param string $abchContactId
     * @param boolean $notInBirthdayCalendar
     * @param string $shellContactType
     * @param string $imMri
     * @param int $presenceTrustLevel
     * @param string $otherMri
     * @param string $profileLastChanged
     * @param boolean $mobileIMEnabled
     * @param string $partnerNetworkProfilePhotoUrl
     * @param string $partnerNetworkThumbnailPhotoUrl
     */
    public function __construct($fileAs = null, $fileAsMapping = null, $displayName = null, $givenName = null, $initials = null, $middleName = null, $nickname = null, \Ews\StructType\EwsCompleteNameType $completeName = null, $companyName = null, \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses = null, \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null, \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null, \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null, $assistantName = null, $birthday = null, $businessHomePage = null, \Ews\ArrayType\EwsArrayOfStringsType $children = null, \Ews\ArrayType\EwsArrayOfStringsType $companies = null, $contactSource = null, $department = null, $generation = null, \Ews\StructType\EwsImAddressDictionaryType $imAddresses = null, $jobTitle = null, $manager = null, $mileage = null, $officeLocation = null, $postalAddressIndex = null, $profession = null, $spouseName = null, $surname = null, $weddingAnniversary = null, $hasPicture = null, $phoneticFullName = null, $phoneticFirstName = null, $phoneticLastName = null, $alias = null, $notes = null, base64Binary $photo = null, \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null, \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null, $directoryId = null, \Ews\StructType\EwsSingleRecipientType $managerMailbox = null, \Ews\ArrayType\EwsArrayOfRecipientsType $directReports = null, $accountName = null, $isAutoUpdateDisabled = null, $isMessengerEnabled = null, $comment = null, $contactShortId = null, $contactType = null, $gender = null, $isHidden = null, $objectId = null, $passportId = null, $isPrivate = null, $sourceId = null, $trustLevel = null, $createdBy = null, \Ews\StructType\EwsContactUrlDictionaryType $urls = null, $cid = null, $skypeAuthCertificate = null, $skypeContext = null, $skypeId = null, $skypeRelationship = null, $yomiNickname = null, $xboxLiveTag = null, $inviteFree = null, $hidePresenceAndProfile = null, $isPendingOutbound = null, $supportGroupFeeds = null, $userTileHash = null, $unifiedInbox = null, \Ews\ArrayType\EwsArrayOfStringsType $mris = null, $wlid = null, $abchContactId = null, $notInBirthdayCalendar = null, $shellContactType = null, $imMri = null, $presenceTrustLevel = null, $otherMri = null, $profileLastChanged = null, $mobileIMEnabled = null, $partnerNetworkProfilePhotoUrl = null, $partnerNetworkThumbnailPhotoUrl = null)
    {
        $this
            ->setFileAs($fileAs)
            ->setFileAsMapping($fileAsMapping)
            ->setDisplayName($displayName)
            ->setGivenName($givenName)
            ->setInitials($initials)
            ->setMiddleName($middleName)
            ->setNickname($nickname)
            ->setCompleteName($completeName)
            ->setCompanyName($companyName)
            ->setEmailAddresses($emailAddresses)
            ->setAbchEmailAddresses($abchEmailAddresses)
            ->setPhysicalAddresses($physicalAddresses)
            ->setPhoneNumbers($phoneNumbers)
            ->setAssistantName($assistantName)
            ->setBirthday($birthday)
            ->setBusinessHomePage($businessHomePage)
            ->setChildren($children)
            ->setCompanies($companies)
            ->setContactSource($contactSource)
            ->setDepartment($department)
            ->setGeneration($generation)
            ->setImAddresses($imAddresses)
            ->setJobTitle($jobTitle)
            ->setManager($manager)
            ->setMileage($mileage)
            ->setOfficeLocation($officeLocation)
            ->setPostalAddressIndex($postalAddressIndex)
            ->setProfession($profession)
            ->setSpouseName($spouseName)
            ->setSurname($surname)
            ->setWeddingAnniversary($weddingAnniversary)
            ->setHasPicture($hasPicture)
            ->setPhoneticFullName($phoneticFullName)
            ->setPhoneticFirstName($phoneticFirstName)
            ->setPhoneticLastName($phoneticLastName)
            ->setAlias($alias)
            ->setNotes($notes)
            ->setPhoto($photo)
            ->setUserSMIMECertificate($userSMIMECertificate)
            ->setMSExchangeCertificate($mSExchangeCertificate)
            ->setDirectoryId($directoryId)
            ->setManagerMailbox($managerMailbox)
            ->setDirectReports($directReports)
            ->setAccountName($accountName)
            ->setIsAutoUpdateDisabled($isAutoUpdateDisabled)
            ->setIsMessengerEnabled($isMessengerEnabled)
            ->setComment($comment)
            ->setContactShortId($contactShortId)
            ->setContactType($contactType)
            ->setGender($gender)
            ->setIsHidden($isHidden)
            ->setObjectId($objectId)
            ->setPassportId($passportId)
            ->setIsPrivate($isPrivate)
            ->setSourceId($sourceId)
            ->setTrustLevel($trustLevel)
            ->setCreatedBy($createdBy)
            ->setUrls($urls)
            ->setCid($cid)
            ->setSkypeAuthCertificate($skypeAuthCertificate)
            ->setSkypeContext($skypeContext)
            ->setSkypeId($skypeId)
            ->setSkypeRelationship($skypeRelationship)
            ->setYomiNickname($yomiNickname)
            ->setXboxLiveTag($xboxLiveTag)
            ->setInviteFree($inviteFree)
            ->setHidePresenceAndProfile($hidePresenceAndProfile)
            ->setIsPendingOutbound($isPendingOutbound)
            ->setSupportGroupFeeds($supportGroupFeeds)
            ->setUserTileHash($userTileHash)
            ->setUnifiedInbox($unifiedInbox)
            ->setMris($mris)
            ->setWlid($wlid)
            ->setAbchContactId($abchContactId)
            ->setNotInBirthdayCalendar($notInBirthdayCalendar)
            ->setShellContactType($shellContactType)
            ->setImMri($imMri)
            ->setPresenceTrustLevel($presenceTrustLevel)
            ->setOtherMri($otherMri)
            ->setProfileLastChanged($profileLastChanged)
            ->setMobileIMEnabled($mobileIMEnabled)
            ->setPartnerNetworkProfilePhotoUrl($partnerNetworkProfilePhotoUrl)
            ->setPartnerNetworkThumbnailPhotoUrl($partnerNetworkThumbnailPhotoUrl);
    }
    /**
     * Get FileAs value
     * @return string|null
     */
    public function getFileAs()
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setFileAs($fileAs = null)
    {
        $this->FileAs = $fileAs;
        return $this;
    }
    /**
     * Get FileAsMapping value
     * @return string|null
     */
    public function getFileAsMapping()
    {
        return $this->FileAsMapping;
    }
    /**
     * Set FileAsMapping value
     * @uses \Ews\EnumType\EwsFileAsMappingType::valueIsValid()
     * @uses \Ews\EnumType\EwsFileAsMappingType::getValidValues()
     * @param string $fileAsMapping
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setFileAsMapping($fileAsMapping = null)
    {
        if (!\Ews\EnumType\EwsFileAsMappingType::valueIsValid($fileAsMapping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fileAsMapping, implode(', ', \Ews\EnumType\EwsFileAsMappingType::getValidValues())), __LINE__);
        }
        $this->FileAsMapping = $fileAsMapping;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get GivenName value
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->GivenName;
    }
    /**
     * Set GivenName value
     * @param string $givenName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGivenName($givenName = null)
    {
        $this->GivenName = $givenName;
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setInitials($initials = null)
    {
        $this->Initials = $initials;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMiddleName($middleName = null)
    {
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get Nickname value
     * @return string|null
     */
    public function getNickname()
    {
        return $this->Nickname;
    }
    /**
     * Set Nickname value
     * @param string $nickname
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNickname($nickname = null)
    {
        $this->Nickname = $nickname;
        return $this;
    }
    /**
     * Get CompleteName value
     * @return \Ews\StructType\EwsCompleteNameType|null
     */
    public function getCompleteName()
    {
        return $this->CompleteName;
    }
    /**
     * Set CompleteName value
     * @param \Ews\StructType\EwsCompleteNameType $completeName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompleteName(\Ews\StructType\EwsCompleteNameType $completeName = null)
    {
        $this->CompleteName = $completeName;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\StructType\EwsEmailAddressDictionaryType|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setEmailAddresses(\Ews\StructType\EwsEmailAddressDictionaryType $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get AbchEmailAddresses value
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType|null
     */
    public function getAbchEmailAddresses()
    {
        return $this->AbchEmailAddresses;
    }
    /**
     * Set AbchEmailAddresses value
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAbchEmailAddresses(\Ews\StructType\EwsAbchEmailAddressDictionaryType $abchEmailAddresses = null)
    {
        $this->AbchEmailAddresses = $abchEmailAddresses;
        return $this;
    }
    /**
     * Get PhysicalAddresses value
     * @return \Ews\StructType\EwsPhysicalAddressDictionaryType|null
     */
    public function getPhysicalAddresses()
    {
        return $this->PhysicalAddresses;
    }
    /**
     * Set PhysicalAddresses value
     * @param \Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhysicalAddresses(\Ews\StructType\EwsPhysicalAddressDictionaryType $physicalAddresses = null)
    {
        $this->PhysicalAddresses = $physicalAddresses;
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Ews\StructType\EwsPhoneNumberDictionaryType|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneNumbers(\Ews\StructType\EwsPhoneNumberDictionaryType $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get AssistantName value
     * @return string|null
     */
    public function getAssistantName()
    {
        return $this->AssistantName;
    }
    /**
     * Set AssistantName value
     * @param string $assistantName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAssistantName($assistantName = null)
    {
        $this->AssistantName = $assistantName;
        return $this;
    }
    /**
     * Get Birthday value
     * @return dateTime|null
     */
    public function getBirthday()
    {
        return $this->Birthday;
    }
    /**
     * Set Birthday value
     * @param dateTime $birthday
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setBirthday($birthday = null)
    {
        $this->Birthday = $birthday;
        return $this;
    }
    /**
     * Get BusinessHomePage value
     * @return anyURI|null
     */
    public function getBusinessHomePage()
    {
        return $this->BusinessHomePage;
    }
    /**
     * Set BusinessHomePage value
     * @param anyURI $businessHomePage
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setBusinessHomePage($businessHomePage = null)
    {
        $this->BusinessHomePage = $businessHomePage;
        return $this;
    }
    /**
     * Get Children value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getChildren()
    {
        return $this->Children;
    }
    /**
     * Set Children value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $children
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setChildren(\Ews\ArrayType\EwsArrayOfStringsType $children = null)
    {
        $this->Children = $children;
        return $this;
    }
    /**
     * Get Companies value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getCompanies()
    {
        return $this->Companies;
    }
    /**
     * Set Companies value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $companies
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCompanies(\Ews\ArrayType\EwsArrayOfStringsType $companies = null)
    {
        $this->Companies = $companies;
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource()
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \Ews\EnumType\EwsContactSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsContactSourceType::getValidValues()
     * @param string $contactSource
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactSource($contactSource = null)
    {
        if (!\Ews\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $contactSource, implode(', ', \Ews\EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDepartment($department = null)
    {
        $this->Department = $department;
        return $this;
    }
    /**
     * Get Generation value
     * @return string|null
     */
    public function getGeneration()
    {
        return $this->Generation;
    }
    /**
     * Set Generation value
     * @param string $generation
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGeneration($generation = null)
    {
        $this->Generation = $generation;
        return $this;
    }
    /**
     * Get ImAddresses value
     * @return \Ews\StructType\EwsImAddressDictionaryType|null
     */
    public function getImAddresses()
    {
        return $this->ImAddresses;
    }
    /**
     * Set ImAddresses value
     * @param \Ews\StructType\EwsImAddressDictionaryType $imAddresses
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setImAddresses(\Ews\StructType\EwsImAddressDictionaryType $imAddresses = null)
    {
        $this->ImAddresses = $imAddresses;
        return $this;
    }
    /**
     * Get JobTitle value
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }
    /**
     * Set JobTitle value
     * @param string $jobTitle
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setJobTitle($jobTitle = null)
    {
        $this->JobTitle = $jobTitle;
        return $this;
    }
    /**
     * Get Manager value
     * @return string|null
     */
    public function getManager()
    {
        return $this->Manager;
    }
    /**
     * Set Manager value
     * @param string $manager
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setManager($manager = null)
    {
        $this->Manager = $manager;
        return $this;
    }
    /**
     * Get Mileage value
     * @return string|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param string $mileage
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMileage($mileage = null)
    {
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get OfficeLocation value
     * @return string|null
     */
    public function getOfficeLocation()
    {
        return $this->OfficeLocation;
    }
    /**
     * Set OfficeLocation value
     * @param string $officeLocation
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setOfficeLocation($officeLocation = null)
    {
        $this->OfficeLocation = $officeLocation;
        return $this;
    }
    /**
     * Get PostalAddressIndex value
     * @return string|null
     */
    public function getPostalAddressIndex()
    {
        return $this->PostalAddressIndex;
    }
    /**
     * Set PostalAddressIndex value
     * @uses \Ews\EnumType\EwsPhysicalAddressIndexType::valueIsValid()
     * @uses \Ews\EnumType\EwsPhysicalAddressIndexType::getValidValues()
     * @param string $postalAddressIndex
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPostalAddressIndex($postalAddressIndex = null)
    {
        if (!\Ews\EnumType\EwsPhysicalAddressIndexType::valueIsValid($postalAddressIndex)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $postalAddressIndex, implode(', ', \Ews\EnumType\EwsPhysicalAddressIndexType::getValidValues())), __LINE__);
        }
        $this->PostalAddressIndex = $postalAddressIndex;
        return $this;
    }
    /**
     * Get Profession value
     * @return string|null
     */
    public function getProfession()
    {
        return $this->Profession;
    }
    /**
     * Set Profession value
     * @param string $profession
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setProfession($profession = null)
    {
        $this->Profession = $profession;
        return $this;
    }
    /**
     * Get SpouseName value
     * @return string|null
     */
    public function getSpouseName()
    {
        return $this->SpouseName;
    }
    /**
     * Set SpouseName value
     * @param string $spouseName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSpouseName($spouseName = null)
    {
        $this->SpouseName = $spouseName;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSurname($surname = null)
    {
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get WeddingAnniversary value
     * @return dateTime|null
     */
    public function getWeddingAnniversary()
    {
        return $this->WeddingAnniversary;
    }
    /**
     * Set WeddingAnniversary value
     * @param dateTime $weddingAnniversary
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setWeddingAnniversary($weddingAnniversary = null)
    {
        $this->WeddingAnniversary = $weddingAnniversary;
        return $this;
    }
    /**
     * Get HasPicture value
     * @return boolean|null
     */
    public function getHasPicture()
    {
        return $this->HasPicture;
    }
    /**
     * Set HasPicture value
     * @param boolean $hasPicture
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setHasPicture($hasPicture = null)
    {
        $this->HasPicture = $hasPicture;
        return $this;
    }
    /**
     * Get PhoneticFullName value
     * @return string|null
     */
    public function getPhoneticFullName()
    {
        return $this->PhoneticFullName;
    }
    /**
     * Set PhoneticFullName value
     * @param string $phoneticFullName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticFullName($phoneticFullName = null)
    {
        $this->PhoneticFullName = $phoneticFullName;
        return $this;
    }
    /**
     * Get PhoneticFirstName value
     * @return string|null
     */
    public function getPhoneticFirstName()
    {
        return $this->PhoneticFirstName;
    }
    /**
     * Set PhoneticFirstName value
     * @param string $phoneticFirstName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticFirstName($phoneticFirstName = null)
    {
        $this->PhoneticFirstName = $phoneticFirstName;
        return $this;
    }
    /**
     * Get PhoneticLastName value
     * @return string|null
     */
    public function getPhoneticLastName()
    {
        return $this->PhoneticLastName;
    }
    /**
     * Set PhoneticLastName value
     * @param string $phoneticLastName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoneticLastName($phoneticLastName = null)
    {
        $this->PhoneticLastName = $phoneticLastName;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAlias($alias = null)
    {
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNotes($notes = null)
    {
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Photo value
     * @return base64Binary|null
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param base64Binary $photo
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPhoto(base64Binary $photo = null)
    {
        $this->Photo = $photo;
        return $this;
    }
    /**
     * Get UserSMIMECertificate value
     * @return \Ews\ArrayType\EwsArrayOfBinaryType|null
     */
    public function getUserSMIMECertificate()
    {
        return $this->UserSMIMECertificate;
    }
    /**
     * Set UserSMIMECertificate value
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUserSMIMECertificate(\Ews\ArrayType\EwsArrayOfBinaryType $userSMIMECertificate = null)
    {
        $this->UserSMIMECertificate = $userSMIMECertificate;
        return $this;
    }
    /**
     * Get MSExchangeCertificate value
     * @return \Ews\ArrayType\EwsArrayOfBinaryType|null
     */
    public function getMSExchangeCertificate()
    {
        return $this->MSExchangeCertificate;
    }
    /**
     * Set MSExchangeCertificate value
     * @param \Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMSExchangeCertificate(\Ews\ArrayType\EwsArrayOfBinaryType $mSExchangeCertificate = null)
    {
        $this->MSExchangeCertificate = $mSExchangeCertificate;
        return $this;
    }
    /**
     * Get DirectoryId value
     * @return string|null
     */
    public function getDirectoryId()
    {
        return $this->DirectoryId;
    }
    /**
     * Set DirectoryId value
     * @param string $directoryId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDirectoryId($directoryId = null)
    {
        $this->DirectoryId = $directoryId;
        return $this;
    }
    /**
     * Get ManagerMailbox value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getManagerMailbox()
    {
        return $this->ManagerMailbox;
    }
    /**
     * Set ManagerMailbox value
     * @param \Ews\StructType\EwsSingleRecipientType $managerMailbox
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setManagerMailbox(\Ews\StructType\EwsSingleRecipientType $managerMailbox = null)
    {
        $this->ManagerMailbox = $managerMailbox;
        return $this;
    }
    /**
     * Get DirectReports value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getDirectReports()
    {
        return $this->DirectReports;
    }
    /**
     * Set DirectReports value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $directReports
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setDirectReports(\Ews\ArrayType\EwsArrayOfRecipientsType $directReports = null)
    {
        $this->DirectReports = $directReports;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAccountName($accountName = null)
    {
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get IsAutoUpdateDisabled value
     * @return boolean|null
     */
    public function getIsAutoUpdateDisabled()
    {
        return $this->IsAutoUpdateDisabled;
    }
    /**
     * Set IsAutoUpdateDisabled value
     * @param boolean $isAutoUpdateDisabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsAutoUpdateDisabled($isAutoUpdateDisabled = null)
    {
        $this->IsAutoUpdateDisabled = $isAutoUpdateDisabled;
        return $this;
    }
    /**
     * Get IsMessengerEnabled value
     * @return boolean|null
     */
    public function getIsMessengerEnabled()
    {
        return $this->IsMessengerEnabled;
    }
    /**
     * Set IsMessengerEnabled value
     * @param boolean $isMessengerEnabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsMessengerEnabled($isMessengerEnabled = null)
    {
        $this->IsMessengerEnabled = $isMessengerEnabled;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get ContactShortId value
     * @return int|null
     */
    public function getContactShortId()
    {
        return $this->ContactShortId;
    }
    /**
     * Set ContactShortId value
     * @param int $contactShortId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactShortId($contactShortId = null)
    {
        $this->ContactShortId = $contactShortId;
        return $this;
    }
    /**
     * Get ContactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $contactType
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setContactType($contactType = null)
    {
        $this->ContactType = $contactType;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setGender($gender = null)
    {
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get IsHidden value
     * @return boolean|null
     */
    public function getIsHidden()
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param boolean $isHidden
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsHidden($isHidden = null)
    {
        $this->IsHidden = $isHidden;
        return $this;
    }
    /**
     * Get ObjectId value
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $objectId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setObjectId($objectId = null)
    {
        $this->ObjectId = $objectId;
        return $this;
    }
    /**
     * Get PassportId value
     * @return long|null
     */
    public function getPassportId()
    {
        return $this->PassportId;
    }
    /**
     * Set PassportId value
     * @param long $passportId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPassportId($passportId = null)
    {
        $this->PassportId = $passportId;
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return boolean|null
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param boolean $isPrivate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsPrivate($isPrivate = null)
    {
        $this->IsPrivate = $isPrivate;
        return $this;
    }
    /**
     * Get SourceId value
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSourceId($sourceId = null)
    {
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get TrustLevel value
     * @return int|null
     */
    public function getTrustLevel()
    {
        return $this->TrustLevel;
    }
    /**
     * Set TrustLevel value
     * @param int $trustLevel
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setTrustLevel($trustLevel = null)
    {
        $this->TrustLevel = $trustLevel;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCreatedBy($createdBy = null)
    {
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get Urls value
     * @return \Ews\StructType\EwsContactUrlDictionaryType|null
     */
    public function getUrls()
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \Ews\StructType\EwsContactUrlDictionaryType $urls
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUrls(\Ews\StructType\EwsContactUrlDictionaryType $urls = null)
    {
        $this->Urls = $urls;
        return $this;
    }
    /**
     * Get Cid value
     * @return long|null
     */
    public function getCid()
    {
        return $this->Cid;
    }
    /**
     * Set Cid value
     * @param long $cid
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setCid($cid = null)
    {
        $this->Cid = $cid;
        return $this;
    }
    /**
     * Get SkypeAuthCertificate value
     * @return string|null
     */
    public function getSkypeAuthCertificate()
    {
        return $this->SkypeAuthCertificate;
    }
    /**
     * Set SkypeAuthCertificate value
     * @param string $skypeAuthCertificate
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeAuthCertificate($skypeAuthCertificate = null)
    {
        $this->SkypeAuthCertificate = $skypeAuthCertificate;
        return $this;
    }
    /**
     * Get SkypeContext value
     * @return string|null
     */
    public function getSkypeContext()
    {
        return $this->SkypeContext;
    }
    /**
     * Set SkypeContext value
     * @param string $skypeContext
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeContext($skypeContext = null)
    {
        $this->SkypeContext = $skypeContext;
        return $this;
    }
    /**
     * Get SkypeId value
     * @return string|null
     */
    public function getSkypeId()
    {
        return $this->SkypeId;
    }
    /**
     * Set SkypeId value
     * @param string $skypeId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeId($skypeId = null)
    {
        $this->SkypeId = $skypeId;
        return $this;
    }
    /**
     * Get SkypeRelationship value
     * @return string|null
     */
    public function getSkypeRelationship()
    {
        return $this->SkypeRelationship;
    }
    /**
     * Set SkypeRelationship value
     * @param string $skypeRelationship
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSkypeRelationship($skypeRelationship = null)
    {
        $this->SkypeRelationship = $skypeRelationship;
        return $this;
    }
    /**
     * Get YomiNickname value
     * @return string|null
     */
    public function getYomiNickname()
    {
        return $this->YomiNickname;
    }
    /**
     * Set YomiNickname value
     * @param string $yomiNickname
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setYomiNickname($yomiNickname = null)
    {
        $this->YomiNickname = $yomiNickname;
        return $this;
    }
    /**
     * Get XboxLiveTag value
     * @return string|null
     */
    public function getXboxLiveTag()
    {
        return $this->XboxLiveTag;
    }
    /**
     * Set XboxLiveTag value
     * @param string $xboxLiveTag
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setXboxLiveTag($xboxLiveTag = null)
    {
        $this->XboxLiveTag = $xboxLiveTag;
        return $this;
    }
    /**
     * Get InviteFree value
     * @return boolean|null
     */
    public function getInviteFree()
    {
        return $this->InviteFree;
    }
    /**
     * Set InviteFree value
     * @param boolean $inviteFree
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setInviteFree($inviteFree = null)
    {
        $this->InviteFree = $inviteFree;
        return $this;
    }
    /**
     * Get HidePresenceAndProfile value
     * @return boolean|null
     */
    public function getHidePresenceAndProfile()
    {
        return $this->HidePresenceAndProfile;
    }
    /**
     * Set HidePresenceAndProfile value
     * @param boolean $hidePresenceAndProfile
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setHidePresenceAndProfile($hidePresenceAndProfile = null)
    {
        $this->HidePresenceAndProfile = $hidePresenceAndProfile;
        return $this;
    }
    /**
     * Get IsPendingOutbound value
     * @return boolean|null
     */
    public function getIsPendingOutbound()
    {
        return $this->IsPendingOutbound;
    }
    /**
     * Set IsPendingOutbound value
     * @param boolean $isPendingOutbound
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setIsPendingOutbound($isPendingOutbound = null)
    {
        $this->IsPendingOutbound = $isPendingOutbound;
        return $this;
    }
    /**
     * Get SupportGroupFeeds value
     * @return boolean|null
     */
    public function getSupportGroupFeeds()
    {
        return $this->SupportGroupFeeds;
    }
    /**
     * Set SupportGroupFeeds value
     * @param boolean $supportGroupFeeds
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setSupportGroupFeeds($supportGroupFeeds = null)
    {
        $this->SupportGroupFeeds = $supportGroupFeeds;
        return $this;
    }
    /**
     * Get UserTileHash value
     * @return string|null
     */
    public function getUserTileHash()
    {
        return $this->UserTileHash;
    }
    /**
     * Set UserTileHash value
     * @param string $userTileHash
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUserTileHash($userTileHash = null)
    {
        $this->UserTileHash = $userTileHash;
        return $this;
    }
    /**
     * Get UnifiedInbox value
     * @return boolean|null
     */
    public function getUnifiedInbox()
    {
        return $this->UnifiedInbox;
    }
    /**
     * Set UnifiedInbox value
     * @param boolean $unifiedInbox
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setUnifiedInbox($unifiedInbox = null)
    {
        $this->UnifiedInbox = $unifiedInbox;
        return $this;
    }
    /**
     * Get Mris value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getMris()
    {
        return $this->Mris;
    }
    /**
     * Set Mris value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $mris
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMris(\Ews\ArrayType\EwsArrayOfStringsType $mris = null)
    {
        $this->Mris = $mris;
        return $this;
    }
    /**
     * Get Wlid value
     * @return string|null
     */
    public function getWlid()
    {
        return $this->Wlid;
    }
    /**
     * Set Wlid value
     * @param string $wlid
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setWlid($wlid = null)
    {
        $this->Wlid = $wlid;
        return $this;
    }
    /**
     * Get AbchContactId value
     * @return string|null
     */
    public function getAbchContactId()
    {
        return $this->AbchContactId;
    }
    /**
     * Set AbchContactId value
     * @param string $abchContactId
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setAbchContactId($abchContactId = null)
    {
        $this->AbchContactId = $abchContactId;
        return $this;
    }
    /**
     * Get NotInBirthdayCalendar value
     * @return boolean|null
     */
    public function getNotInBirthdayCalendar()
    {
        return $this->NotInBirthdayCalendar;
    }
    /**
     * Set NotInBirthdayCalendar value
     * @param boolean $notInBirthdayCalendar
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setNotInBirthdayCalendar($notInBirthdayCalendar = null)
    {
        $this->NotInBirthdayCalendar = $notInBirthdayCalendar;
        return $this;
    }
    /**
     * Get ShellContactType value
     * @return string|null
     */
    public function getShellContactType()
    {
        return $this->ShellContactType;
    }
    /**
     * Set ShellContactType value
     * @param string $shellContactType
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setShellContactType($shellContactType = null)
    {
        $this->ShellContactType = $shellContactType;
        return $this;
    }
    /**
     * Get ImMri value
     * @return string|null
     */
    public function getImMri()
    {
        return $this->ImMri;
    }
    /**
     * Set ImMri value
     * @param string $imMri
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setImMri($imMri = null)
    {
        $this->ImMri = $imMri;
        return $this;
    }
    /**
     * Get PresenceTrustLevel value
     * @return int|null
     */
    public function getPresenceTrustLevel()
    {
        return $this->PresenceTrustLevel;
    }
    /**
     * Set PresenceTrustLevel value
     * @param int $presenceTrustLevel
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPresenceTrustLevel($presenceTrustLevel = null)
    {
        $this->PresenceTrustLevel = $presenceTrustLevel;
        return $this;
    }
    /**
     * Get OtherMri value
     * @return string|null
     */
    public function getOtherMri()
    {
        return $this->OtherMri;
    }
    /**
     * Set OtherMri value
     * @param string $otherMri
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setOtherMri($otherMri = null)
    {
        $this->OtherMri = $otherMri;
        return $this;
    }
    /**
     * Get ProfileLastChanged value
     * @return string|null
     */
    public function getProfileLastChanged()
    {
        return $this->ProfileLastChanged;
    }
    /**
     * Set ProfileLastChanged value
     * @param string $profileLastChanged
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setProfileLastChanged($profileLastChanged = null)
    {
        $this->ProfileLastChanged = $profileLastChanged;
        return $this;
    }
    /**
     * Get MobileIMEnabled value
     * @return boolean|null
     */
    public function getMobileIMEnabled()
    {
        return $this->MobileIMEnabled;
    }
    /**
     * Set MobileIMEnabled value
     * @param boolean $mobileIMEnabled
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setMobileIMEnabled($mobileIMEnabled = null)
    {
        $this->MobileIMEnabled = $mobileIMEnabled;
        return $this;
    }
    /**
     * Get PartnerNetworkProfilePhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkProfilePhotoUrl()
    {
        return $this->PartnerNetworkProfilePhotoUrl;
    }
    /**
     * Set PartnerNetworkProfilePhotoUrl value
     * @param string $partnerNetworkProfilePhotoUrl
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPartnerNetworkProfilePhotoUrl($partnerNetworkProfilePhotoUrl = null)
    {
        $this->PartnerNetworkProfilePhotoUrl = $partnerNetworkProfilePhotoUrl;
        return $this;
    }
    /**
     * Get PartnerNetworkThumbnailPhotoUrl value
     * @return string|null
     */
    public function getPartnerNetworkThumbnailPhotoUrl()
    {
        return $this->PartnerNetworkThumbnailPhotoUrl;
    }
    /**
     * Set PartnerNetworkThumbnailPhotoUrl value
     * @param string $partnerNetworkThumbnailPhotoUrl
     * @return \Ews\StructType\EwsContactItemType
     */
    public function setPartnerNetworkThumbnailPhotoUrl($partnerNetworkThumbnailPhotoUrl = null)
    {
        $this->PartnerNetworkThumbnailPhotoUrl = $partnerNetworkThumbnailPhotoUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactItemType
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
