<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Address
{
    private $addressID = null;
    private $ownerID = null;
    private $typeID = null;
    private $typeName = null;
    private $typeActivelyUsed = null;
    private $street = null;
    private $address2 = null;
    private $postcode = null;
    private $postalCode = null;
    private $city = null;
    private $state = null;
    private $country = null;
    private $added = null;
    private $lastModified = null;
    private $lastModifierUsername = null;
    private $lastModifierEmployeeID = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveAddress"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveAddress"]);
        }
        if ($this->getAddressID() != null) {
            $arr_query = array_merge($arr_query, ["addressID" => $this->getAddressID()]);
        }
        if ($this->getOwnerID() != null) {
            $arr_query = array_merge($arr_query, ["ownerID" => $this->getOwnerID()]);
        }
        if ($this->getTypeID() != null) {
            $arr_query = array_merge($arr_query, ["typeID" => $this->getTypeID()]);
        }
        if ($this->getTypeName() != null) {
            $arr_query = array_merge($arr_query, ["typeName" => $this->getTypeName()]);
        }
        if ($this->getTypeActivelyUsed() != null) {
            $arr_query = array_merge($arr_query, ["typeActivelyUsed" => $this->getTypeActivelyUsed()]);
        }
        if ($this->getStreet() != null) {
            $arr_query = array_merge($arr_query, ["street" => $this->getStreet()]);
        }
        if ($this->getAddress2() != null) {
            $arr_query = array_merge($arr_query, ["address2" => $this->getAddress2()]);
        }
        if ($this->getPostcode() != null) {
            $arr_query = array_merge($arr_query, ["postcode" => $this->getPostcode()]);
        }
        if ($this->getPostalCode() != null) {
            $arr_query = array_merge($arr_query, ["postalCode" => $this->getPostalCode()]);
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
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getLastModifierUsername() != null) {
            $arr_query = array_merge($arr_query, ["lastModifierUsername" => $this->getLastModifierUsername()]);
        }
        if ($this->getLastModifierEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["lastModifierEmployeeID" => $this->getLastModifierEmployeeID()]);
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
            if (property_exists($record, "addressID")) {
                $this->addressID = $record->addressID;
            }
            if (property_exists($record, "ownerID")) {
                $this->ownerID = $record->ownerID;
            }
            if (property_exists($record, "typeID")) {
                $this->typeID = $record->typeID;
            }
            if (property_exists($record, "typeName")) {
                $this->typeName = $record->typeName;
            }
            if (property_exists($record, "typeActivelyUsed")) {
                $this->typeActivelyUsed = $record->typeActivelyUsed;
            }
            if (property_exists($record, "street")) {
                $this->street = $record->street;
            }
            if (property_exists($record, "address2")) {
                $this->address2 = $record->address2;
            }
            if (property_exists($record, "postcode")) {
                $this->postcode = $record->postcode;
            }
            if (property_exists($record, "postalCode")) {
                $this->postalCode = $record->postalCode;
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
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "lastModifierUsername")) {
                $this->lastModifierUsername = $record->lastModifierUsername;
            }
            if (property_exists($record, "lastModifierEmployeeID")) {
                $this->lastModifierEmployeeID = $record->lastModifierEmployeeID;
            }
        }
    }

    public function getAddressID()
    {
        return $this->addressID;
    }

    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
    }

    public function getOwnerID()
    {
        return $this->ownerID;
    }

    public function setOwnerID($ownerID)
    {
        $this->ownerID = $ownerID;
    }

    public function getTypeID()
    {
        return $this->typeID;
    }

    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;
    }

    public function getTypeName()
    {
        return $this->typeName;
    }

    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
    }

    public function getTypeActivelyUsed()
    {
        return $this->typeActivelyUsed;
    }

    public function setTypeActivelyUsed($typeActivelyUsed)
    {
        $this->typeActivelyUsed = $typeActivelyUsed;
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

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
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

    public function getAdded()
    {
        return $this->added;
    }

    public function setAdded($added)
    {
        $this->added = $added;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getLastModifierUsername()
    {
        return $this->lastModifierUsername;
    }

    public function setLastModifierUsername($lastModifierUsername)
    {
        $this->lastModifierUsername = $lastModifierUsername;
    }

    public function getLastModifierEmployeeID()
    {
        return $this->lastModifierEmployeeID;
    }

    public function setLastModifierEmployeeID($lastModifierEmployeeID)
    {
        $this->lastModifierEmployeeID = $lastModifierEmployeeID;
    }
}
