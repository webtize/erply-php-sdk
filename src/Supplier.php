<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Supplier
{
    private $id = null;
    private $supplierID = null;
    private $supplierType = null;
    private $fullName = null;
    private $companyName = null;
    private $firstName = null;
    private $lastName = null;
    private $groupID = null;
    private $groupName = null;
    private $phone = null;
    private $mobile = null;
    private $email = null;
    private $vatrateID = null;
    private $fax = null;
    private $code = null;
    private $integrationCode = null;
    private $countryID = null;
    private $countryName = null;
    private $countryCode = null;
    private $address = null;
    private $currencyCode = null;
    private $GLN = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveSupplier"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveSupplier"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getSupplierID() != null) {
            $arr_query = array_merge($arr_query, ["supplierID" => $this->getSupplierID()]);
        }
        if ($this->getSupplierType() != null) {
            $arr_query = array_merge($arr_query, ["supplierType" => $this->getSupplierType()]);
        }
        if ($this->getFullName() != null) {
            $arr_query = array_merge($arr_query, ["fullName" => $this->getFullName()]);
        }
        if ($this->getCompanyName() != null) {
            $arr_query = array_merge($arr_query, ["companyName" => $this->getCompanyName()]);
        }
        if ($this->getFirstName() != null) {
            $arr_query = array_merge($arr_query, ["firstName" => $this->getFirstName()]);
        }
        if ($this->getLastName() != null) {
            $arr_query = array_merge($arr_query, ["lastName" => $this->getLastName()]);
        }
        if ($this->getGroupID() != null) {
            $arr_query = array_merge($arr_query, ["groupID" => $this->getGroupID()]);
        }
        if ($this->getGroupName() != null) {
            $arr_query = array_merge($arr_query, ["groupName" => $this->getGroupName()]);
        }
        if ($this->getPhone() != null) {
            $arr_query = array_merge($arr_query, ["phone" => $this->getPhone()]);
        }
        if ($this->getMobile() != null) {
            $arr_query = array_merge($arr_query, ["mobile" => $this->getMobile()]);
        }
        if ($this->getEmail() != null) {
            $arr_query = array_merge($arr_query, ["email" => $this->getEmail()]);
        }
        if ($this->getVatrateID() != null) {
            $arr_query = array_merge($arr_query, ["vatrateID" => $this->getVatrateID()]);
        }
        if ($this->getFax() != null) {
            $arr_query = array_merge($arr_query, ["fax" => $this->getFax()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getIntegrationCode() != null) {
            $arr_query = array_merge($arr_query, ["integrationCode" => $this->getIntegrationCode()]);
        }
        if ($this->getCountryID() != null) {
            $arr_query = array_merge($arr_query, ["countryID" => $this->getCountryID()]);
        }
        if ($this->getCountryName() != null) {
            $arr_query = array_merge($arr_query, ["countryName" => $this->getCountryName()]);
        }
        if ($this->getCountryCode() != null) {
            $arr_query = array_merge($arr_query, ["countryCode" => $this->getCountryCode()]);
        }
        if ($this->getAddress() != null) {
            $arr_query = array_merge($arr_query, ["address" => $this->getAddress()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getGLN() != null) {
            $arr_query = array_merge($arr_query, ["GLN" => $this->getGLN()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {

            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
            }
            if (property_exists($record, "supplierType")) {
                $this->supplierType = $record->supplierType;
            }
            if (property_exists($record, "fullName")) {
                $this->fullName = $record->fullName;
            }
            if (property_exists($record, "companyName")) {
                $this->companyName = $record->companyName;
            }
            if (property_exists($record, "firstName")) {
                $this->firstName = $record->firstName;
            }
            if (property_exists($record, "lastName")) {
                $this->lastName = $record->lastName;
            }
            if (property_exists($record, "groupID")) {
                $this->groupID = $record->groupID;
            }
            if (property_exists($record, "groupName")) {
                $this->groupName = $record->groupName;
            }
            if (property_exists($record, "phone")) {
                $this->phone = $record->phone;
            }
            if (property_exists($record, "mobile")) {
                $this->mobile = $record->mobile;
            }
            if (property_exists($record, "email")) {
                $this->email = $record->email;
            }
            if (property_exists($record, "vatrateID")) {
                $this->vatrateID = $record->vatrateID;
            }
            if (property_exists($record, "fax")) {
                $this->fax = $record->fax;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "integrationCode")) {
                $this->integrationCode = $record->integrationCode;
            }
            if (property_exists($record, "countryID")) {
                $this->countryID = $record->countryID;
            }
            if (property_exists($record, "countryName")) {
                $this->countryName = $record->countryName;
            }
            if (property_exists($record, "countryCode")) {
                $this->countryCode = $record->countryCode;
            }
            if (property_exists($record, "address")) {
                $this->address = $record->address;
            }
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "GLN")) {
                $this->GLN = $record->GLN;
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        $this->supplierID = $supplierID;
    }

    public function getSupplierType()
    {
        return $this->supplierType;
    }

    public function setSupplierType($supplierType)
    {
        $this->supplierType = $supplierType;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getGroupID()
    {
        return $this->groupID;
    }

    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
    }

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getVatrateID()
    {
        return $this->vatrateID;
    }

    public function setVatrateID($vatrateID)
    {
        $this->vatrateID = $vatrateID;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getIntegrationCode()
    {
        return $this->integrationCode;
    }

    public function setIntegrationCode($integrationCode)
    {
        $this->integrationCode = $integrationCode;
    }

    public function getCountryID()
    {
        return $this->countryID;
    }

    public function setCountryID($countryID)
    {
        $this->countryID = $countryID;
    }

    public function getCountryName()
    {
        return $this->countryName;
    }

    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function getGLN()
    {
        return $this->GLN;
    }

    public function setGLN($GLN)
    {
        $this->GLN = $GLN;
    }
}
