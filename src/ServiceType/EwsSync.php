<?php

namespace Ews\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Sync ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSync extends SoapClientBase
{
    /**
     * Sets the ExchangeImpersonation SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsExchangeImpersonationType $exchangeImpersonation
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderExchangeImpersonation(\Ews\StructType\EwsExchangeImpersonationType $exchangeImpersonation, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ExchangeImpersonation', $exchangeImpersonation, $mustUnderstand, $actor);
    }
    /**
     * Sets the MailboxCulture SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsMailboxCultureType $mailboxCulture
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderMailboxCulture(\Ews\StructType\EwsMailboxCultureType $mailboxCulture, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'MailboxCulture', $mailboxCulture, $mustUnderstand, $actor);
    }
    /**
     * Sets the RequestServerVersion SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Ews\StructType\EwsRequestServerVersion $requestServerVersion
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequestServerVersion(\Ews\StructType\EwsRequestServerVersion $requestServerVersion, $nameSpace = 'http://schemas.microsoft.com/exchange/services/2006/types', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequestServerVersion', $requestServerVersion, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named SyncFolderHierarchy
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsSyncFolderHierarchyType $request
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseType|bool
     */
    public function SyncFolderHierarchy(\Ews\StructType\EwsSyncFolderHierarchyType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->SyncFolderHierarchy($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SyncFolderItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames: ExchangeImpersonation, MailboxCulture, RequestServerVersion
     * - SOAPHeaderNamespaces: http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types, http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes: \Ews\StructType\EwsExchangeImpersonationType, \Ews\StructType\EwsMailboxCultureType, \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders: required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsSyncFolderItemsType $request
     * @return \Ews\StructType\EwsSyncFolderItemsResponseType|bool
     */
    public function SyncFolderItems(\Ews\StructType\EwsSyncFolderItemsType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->SyncFolderItems($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseType|\Ews\StructType\EwsSyncFolderItemsResponseType
     */
    public function getResult()
    {
        return parent::getResult();
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
