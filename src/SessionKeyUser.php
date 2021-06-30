<?php


namespace Webtize\ErplySDK;


class SessionKeyUser
{
    private $sessionKey = null;
    private $doNotGenerateIdentityToken = null;
    private $userID = null;
    private $userName = null;
    private $employeeID = null;
    private $employeeName = null;
    private $groupID = null;
    private $groupName = null;
    private $ipAddress = null;
    private $sessionLength = null;
    private $loginUrl = null;
    private $berlinPOSVersion = null;
    private $berlinPOSAssetsURL = null;
    private $epsiURL = null;
    private $cayanGatewayURLs = null;
    private $avalaraGatewayURLs = null;
    private $pusherAuthenticationURLs = null;
    private $strikeIronGatewayURLs = null;
    private $customerRegistryURLs = null;
    private $couponRegistryURLs = null;
    private $transactionRegistryURLs = null;
    private $displayAdManagerURLs = null;
    private $epsiDownloadURLs = null;
    private $identityToken = null;
    private $token = null;


    public function getQuery()
    {
        $arr_query = ["request" => "getSessionKeyUser"];
        if ($this->getSessionKey() != null) {
            $arr_query = array_merge($arr_query, ["sessionKey" => $this->getSessionKey()]);
        }
        if ($this->getDoNotGenerateIdentityToken() != null) {
            $arr_query = array_merge($arr_query, ["doNotGenerateIdentityToken" => $this->getDoNotGenerateIdentityToken()]);
        }
        return $arr_query;
    }


    public function __construct($record = null)
    {
        if ($record != null) {

            if (property_exists($record, "userID")) {
                $this->userID = $record->userID;
            }
            if (property_exists($record, "userName")) {
                $this->userName = $record->userName;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "groupID")) {
                $this->groupID = $record->groupID;
            }
            if (property_exists($record, "groupName")) {
                $this->groupName = $record->groupName;
            }
            if (property_exists($record, "ipAddress")) {
                $this->ipAddress = $record->ipAddress;
            }
            if (property_exists($record, "sessionKey")) {
                $this->sessionKey = $record->sessionKey;
            }
            if (property_exists($record, "sessionLength")) {
                $this->sessionLength = $record->sessionLength;
            }
            if (property_exists($record, "loginUrl")) {
                $this->loginUrl = $record->loginUrl;
            }
            if (property_exists($record, "berlinPOSVersion")) {
                $this->berlinPOSVersion = $record->berlinPOSVersion;
            }
            if (property_exists($record, "berlinPOSAssetsURL")) {
                $this->berlinPOSAssetsURL = $record->berlinPOSAssetsURL;
            }
            if (property_exists($record, "epsiURL")) {
                $this->epsiURL = $record->epsiURL;
            }
            if (property_exists($record, "cayanGatewayURLs")) {
                $this->cayanGatewayURLs = $record->cayanGatewayURLs;
            }
            if (property_exists($record, "avalaraGatewayURLs")) {
                $this->avalaraGatewayURLs = $record->avalaraGatewayURLs;
            }
            if (property_exists($record, "pusherAuthenticationURLs")) {
                $this->pusherAuthenticationURLs = $record->pusherAuthenticationURLs;
            }
            if (property_exists($record, "strikeIronGatewayURLs")) {
                $this->strikeIronGatewayURLs = $record->strikeIronGatewayURLs;
            }
            if (property_exists($record, "customerRegistryURLs")) {
                $this->customerRegistryURLs = $record->customerRegistryURLs;
            }
            if (property_exists($record, "couponRegistryURLs")) {
                $this->couponRegistryURLs = $record->couponRegistryURLs;
            }
            if (property_exists($record, "transactionRegistryURLs")) {
                $this->transactionRegistryURLs = $record->transactionRegistryURLs;
            }
            if (property_exists($record, "displayAdManagerURLs")) {
                $this->displayAdManagerURLs = $record->displayAdManagerURLs;
            }
            if (property_exists($record, "epsiDownloadURLs")) {
                $this->epsiDownloadURLs = $record->epsiDownloadURLs;
            }
            if (property_exists($record, "identityToken")) {
                $this->identityToken = $record->identityToken;
            }
            if (property_exists($record, "token")) {
                $this->token = $record->token;
            }
        }
    }


    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    private function getDoNotGenerateIdentityToken()
    {
        return $this->doNotGenerateIdentityToken;
    }

    public function setSessionKey($sessionKey): void
    {
        $this->sessionKey = $sessionKey;
    }

    public function setDoNotGenerateIdentityToken($doNotGenerateIdentityToken): void
    {
        $this->doNotGenerateIdentityToken = $doNotGenerateIdentityToken;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function getGroupID()
    {
        return $this->groupID;
    }

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function getSessionLength()
    {
        return $this->sessionLength;
    }

    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    public function getBerlinPOSVersion()
    {
        return $this->berlinPOSVersion;
    }

    public function getBerlinPOSAssetsURL()
    {
        return $this->berlinPOSAssetsURL;
    }

    public function getEpsiURL()
    {
        return $this->epsiURL;
    }

    public function getCayanGatewayURLs()
    {
        return $this->cayanGatewayURLs;
    }

    public function getAvalaraGatewayURLs()
    {
        return $this->avalaraGatewayURLs;
    }

    public function getPusherAuthenticationURLs()
    {
        return $this->pusherAuthenticationURLs;
    }

    public function getStrikeIronGatewayURLs()
    {
        return $this->strikeIronGatewayURLs;
    }

    public function getCustomerRegistryURLs()
    {
        return $this->customerRegistryURLs;
    }

    public function getCouponRegistryURLs()
    {
        return $this->couponRegistryURLs;
    }

    public function getTransactionRegistryURLs()
    {
        return $this->transactionRegistryURLs;
    }

    public function getDisplayAdManagerURLs()
    {
        return $this->displayAdManagerURLs;
    }

    public function getEpsiDownloadURLs()
    {
        return $this->epsiDownloadURLs;
    }

    public function getIdentityToken()
    {
        return $this->identityToken;
    }

    public function getToken()
    {
        return $this->token;
    }


}