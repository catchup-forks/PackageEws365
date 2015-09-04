<?php

namespace Ews\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Refresh ServiceType
 * @package Ews
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRefresh extends SoapClientBase
{
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
     * Method to call the operation originally named RefreshSharingFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequestServerVersion
     * - SOAPHeaderNamespaces : http://schemas.microsoft.com/exchange/services/2006/types
     * - SOAPHeaderTypes : \Ews\StructType\EwsRequestServerVersion
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ews\StructType\EwsRefreshSharingFolderType $request
     * @return \Ews\StructType\EwsRefreshSharingFolderResponseMessageType|bool
     */
    public function RefreshSharingFolder(\Ews\StructType\EwsRefreshSharingFolderType $request)
    {
        try {
            $this->setResult(self::getSoapClient()->RefreshSharingFolder($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ews\StructType\EwsRefreshSharingFolderResponseMessageType
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
