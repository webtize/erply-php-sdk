<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Warehouse
{
    private $warehouseID = null;
    private $pricelistID = null;
    private $pricelistID2 = null;
    private $pricelistID3 = null;
    private $pricelistID4 = null;
    private $pricelistID5 = null;
    private $name = null;
    private $code = null;
    private $addressID = null;
    private $address = null;
    private $street = null;
    private $address2 = null;
    private $city = null;
    private $state = null;
    private $country = null;
    private $ZIPcode = null;
    private $storeGroups = null;
    private $companyName = null;
    private $companyCode = null;
    private $companyVatNumber = null;
    private $phone = null;
    private $fax = null;
    private $email = null;
    private $website = null;
    private $bankName = null;
    private $bankAccountNumber = null;
    private $iban = null;
    private $swift = null;
    private $usesLocalQuickButtons = null;
    private $defaultCustomerGroupID = null;
    private $isOfflineInventory = null;
    private $timeZone = null;
    private $attributes = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveWarehouse"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveWarehouse"]);
        }
        if ($this->getWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
        }
        if ($this->getPricelistID() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID" => $this->getPricelistID()]);
        }
        if ($this->getPricelistID2() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID2" => $this->getPricelistID2()]);
        }
        if ($this->getPricelistID3() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID3" => $this->getPricelistID3()]);
        }
        if ($this->getPricelistID4() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID4" => $this->getPricelistID4()]);
        }
        if ($this->getPricelistID5() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID5" => $this->getPricelistID5()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getAddressID() != null) {
            $arr_query = array_merge($arr_query, ["addressID" => $this->getAddressID()]);
        }
        if ($this->getAddress() != null) {
            $arr_query = array_merge($arr_query, ["address" => $this->getAddress()]);
        }
        if ($this->getStreet() != null) {
            $arr_query = array_merge($arr_query, ["street" => $this->getStreet()]);
        }
        if ($this->getAddress2() != null) {
            $arr_query = array_merge($arr_query, ["address2" => $this->getAddress2()]);
        }
        if ($this->getCity() != null) {
            $arr_query = array_merge($arr_query, ["city" => $this->getCity()]);
        }
        if ($this->getState() != null) {
            $arr_query = array_merge($arr_query, ["state" => $this->getState()]);
        }
        if ($this->getCountry() != null) {
            $arr_query = array_merge($arr_query, ["country" => $this->getCountry()]);
        }
        if ($this->getZIPcode() != null) {
            $arr_query = array_merge($arr_query, ["ZIPcode" => $this->getZIPcode()]);
        }
        if ($this->getStoreGroups() != null) {
            $arr_query = array_merge($arr_query, ["storeGroups" => $this->getStoreGroups()]);
        }
        if ($this->getCompanyName() != null) {
            $arr_query = array_merge($arr_query, ["companyName" => $this->getCompanyName()]);
        }
        if ($this->getCompanyCode() != null) {
            $arr_query = array_merge($arr_query, ["companyCode" => $this->getCompanyCode()]);
        }
        if ($this->getCompanyVatNumber() != null) {
            $arr_query = array_merge($arr_query, ["companyVatNumber" => $this->getCompanyVatNumber()]);
        }
        if ($this->getPhone() != null) {
            $arr_query = array_merge($arr_query, ["phone" => $this->getPhone()]);
        }
        if ($this->getFax() != null) {
            $arr_query = array_merge($arr_query, ["fax" => $this->getFax()]);
        }
        if ($this->getEmail() != null) {
            $arr_query = array_merge($arr_query, ["email" => $this->getEmail()]);
        }
        if ($this->getWebsite() != null) {
            $arr_query = array_merge($arr_query, ["website" => $this->getWebsite()]);
        }
        if ($this->getBankName() != null) {
            $arr_query = array_merge($arr_query, ["bankName" => $this->getBankName()]);
        }
        if ($this->getBankAccountNumber() != null) {
            $arr_query = array_merge($arr_query, ["bankAccountNumber" => $this->getBankAccountNumber()]);
        }
        if ($this->getIban() != null) {
            $arr_query = array_merge($arr_query, ["iban" => $this->getIban()]);
        }
        if ($this->getSwift() != null) {
            $arr_query = array_merge($arr_query, ["swift" => $this->getSwift()]);
        }
        if ($this->getUsesLocalQuickButtons() != null) {
            $arr_query = array_merge($arr_query, ["usesLocalQuickButtons" => $this->getUsesLocalQuickButtons()]);
        }
        if ($this->getDefaultCustomerGroupID() != null) {
            $arr_query = array_merge($arr_query, ["defaultCustomerGroupID" => $this->getDefaultCustomerGroupID()]);
        }
        if ($this->getIsOfflineInventory() != null) {
            $arr_query = array_merge($arr_query, ["isOfflineInventory" => $this->getIsOfflineInventory()]);
        }
        if ($this->getTimeZone() != null) {
            $arr_query = array_merge($arr_query, ["timeZone" => $this->getTimeZone()]);
        }
        if ($this->getAttributes() != null) {
            $arr_query = array_merge($arr_query, ["attributes" => $this->getAttributes()]);
        }
        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }
        return $arr_query;
    }

    private $requestID = null;

    public function getRequestID()
    {
        return $this->requestID;
    }

    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "requestID")) {
                $this->requestID = $record->requestID;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "pricelistID")) {
                $this->pricelistID = $record->pricelistID;
            }
            if (property_exists($record, "pricelistID2")) {
                $this->pricelistID2 = $record->pricelistID2;
            }
            if (property_exists($record, "pricelistID3")) {
                $this->pricelistID3 = $record->pricelistID3;
            }
            if (property_exists($record, "pricelistID4")) {
                $this->pricelistID4 = $record->pricelistID4;
            }
            if (property_exists($record, "pricelistID5")) {
                $this->pricelistID5 = $record->pricelistID5;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "addressID")) {
                $this->addressID = $record->addressID;
            }
            if (property_exists($record, "address")) {
                $this->address = $record->address;
            }
            if (property_exists($record, "street")) {
                $this->street = $record->street;
            }
            if (property_exists($record, "address2")) {
                $this->address2 = $record->address2;
            }
            if (property_exists($record, "city")) {
                $this->city = $record->city;
            }
            if (property_exists($record, "state")) {
                $this->state = $record->state;
            }
            if (property_exists($record, "country")) {
                $this->country = $record->country;
            }
            if (property_exists($record, "ZIPcode")) {
                $this->ZIPcode = $record->ZIPcode;
            }
            if (property_exists($record, "storeGroups")) {
                $this->storeGroups = $record->storeGroups;
            }
            if (property_exists($record, "companyName")) {
                $this->companyName = $record->companyName;
            }
            if (property_exists($record, "companyCode")) {
                $this->companyCode = $record->companyCode;
            }
            if (property_exists($record, "companyVatNumber")) {
                $this->companyVatNumber = $record->companyVatNumber;
            }
            if (property_exists($record, "phone")) {
                $this->phone = $record->phone;
            }
            if (property_exists($record, "fax")) {
                $this->fax = $record->fax;
            }
            if (property_exists($record, "email")) {
                $this->email = $record->email;
            }
            if (property_exists($record, "website")) {
                $this->website = $record->website;
            }
            if (property_exists($record, "bankName")) {
                $this->bankName = $record->bankName;
            }
            if (property_exists($record, "bankAccountNumber")) {
                $this->bankAccountNumber = $record->bankAccountNumber;
            }
            if (property_exists($record, "iban")) {
                $this->iban = $record->iban;
            }
            if (property_exists($record, "swift")) {
                $this->swift = $record->swift;
            }
            if (property_exists($record, "usesLocalQuickButtons")) {
                $this->usesLocalQuickButtons = $record->usesLocalQuickButtons;
            }
            if (property_exists($record, "defaultCustomerGroupID")) {
                $this->defaultCustomerGroupID = $record->defaultCustomerGroupID;
            }
            if (property_exists($record, "isOfflineInventory")) {
                $this->isOfflineInventory = $record->isOfflineInventory;
            }
            if (property_exists($record, "timeZone")) {
                $this->timeZone = $record->timeZone;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
            }
        }
    }

    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    public function setWarehouseID($warehouseID)
    {
        $this->warehouseID = $warehouseID;
    }

    public function getPricelistID()
    {
        return $this->pricelistID;
    }

    public function setPricelistID($pricelistID)
    {
        $this->pricelistID = $pricelistID;
    }

    public function getPricelistID2()
    {
        return $this->pricelistID2;
    }

    public function setPricelistID2($pricelistID2)
    {
        $this->pricelistID2 = $pricelistID2;
    }

    public function getPricelistID3()
    {
        return $this->pricelistID3;
    }

    public function setPricelistID3($pricelistID3)
    {
        $this->pricelistID3 = $pricelistID3;
    }

    public function getPricelistID4()
    {
        return $this->pricelistID4;
    }

    public function setPricelistID4($pricelistID4)
    {
        $this->pricelistID4 = $pricelistID4;
    }

    public function getPricelistID5()
    {
        return $this->pricelistID5;
    }

    public function setPricelistID5($pricelistID5)
    {
        $this->pricelistID5 = $pricelistID5;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getAddressID()
    {
        return $this->addressID;
    }

    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getZIPcode()
    {
        return $this->ZIPcode;
    }

    public function setZIPcode($ZIPcode)
    {
        $this->ZIPcode = $ZIPcode;
    }

    public function getStoreGroups()
    {
        return $this->storeGroups;
    }

    public function setStoreGroups($storeGroups)
    {
        $this->storeGroups = $storeGroups;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getCompanyCode()
    {
        return $this->companyCode;
    }

    public function setCompanyCode($companyCode)
    {
        $this->companyCode = $companyCode;
    }

    public function getCompanyVatNumber()
    {
        return $this->companyVatNumber;
    }

    public function setCompanyVatNumber($companyVatNumber)
    {
        $this->companyVatNumber = $companyVatNumber;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }

    public function getBankName()
    {
        return $this->bankName;
    }

    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    public function getIban()
    {
        return $this->iban;
    }

    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    public function getSwift()
    {
        return $this->swift;
    }

    public function setSwift($swift)
    {
        $this->swift = $swift;
    }

    public function getUsesLocalQuickButtons()
    {
        return $this->usesLocalQuickButtons;
    }

    public function setUsesLocalQuickButtons($usesLocalQuickButtons)
    {
        $this->usesLocalQuickButtons = $usesLocalQuickButtons;
    }

    public function getDefaultCustomerGroupID()
    {
        return $this->defaultCustomerGroupID;
    }

    public function setDefaultCustomerGroupID($defaultCustomerGroupID)
    {
        $this->defaultCustomerGroupID = $defaultCustomerGroupID;
    }

    public function getIsOfflineInventory()
    {
        return $this->isOfflineInventory;
    }

    public function setIsOfflineInventory($isOfflineInventory)
    {
        $this->isOfflineInventory = $isOfflineInventory;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
}
