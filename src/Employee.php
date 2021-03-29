<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Employee
{
    private $id = null;
    private $employeeID = null;
    private $fullName = null;
    private $employeeName = null;
    private $firstName = null;
    private $lastName = null;
    private $phone = null;
    private $mobile = null;
    private $email = null;
    private $fax = null;
    private $code = null;
    private $drawerID = null;
    private $lastModified = null;
    private $lastModifiedByUserName = null;
    private $userID = null;
    private $username = null;
    private $userGroupID = null;
    private $pointsOfSale = null;
    private $warehouses = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveEmployee"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveEmployee"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["employeeID" => $this->getEmployeeID()]);
        }
        if ($this->getFullName() != null) {
            $arr_query = array_merge($arr_query, ["fullName" => $this->getFullName()]);
        }
        if ($this->getEmployeeName() != null) {
            $arr_query = array_merge($arr_query, ["employeeName" => $this->getEmployeeName()]);
        }
        if ($this->getFirstName() != null) {
            $arr_query = array_merge($arr_query, ["firstName" => $this->getFirstName()]);
        }
        if ($this->getLastName() != null) {
            $arr_query = array_merge($arr_query, ["lastName" => $this->getLastName()]);
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
        if ($this->getFax() != null) {
            $arr_query = array_merge($arr_query, ["fax" => $this->getFax()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getDrawerID() != null) {
            $arr_query = array_merge($arr_query, ["drawerID" => $this->getDrawerID()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getLastModifiedByUserName() != null) {
            $arr_query = array_merge($arr_query, ["lastModifiedByUserName" => $this->getLastModifiedByUserName()]);
        }
        if ($this->getUserID() != null) {
            $arr_query = array_merge($arr_query, ["userID" => $this->getUserID()]);
        }
        if ($this->getUsername() != null) {
            $arr_query = array_merge($arr_query, ["username" => $this->getUsername()]);
        }
        if ($this->getUserGroupID() != null) {
            $arr_query = array_merge($arr_query, ["userGroupID" => $this->getUserGroupID()]);
        }
        if ($this->getPointsOfSale() != null) {
            $arr_query = array_merge($arr_query, ["pointsOfSale" => $this->getPointsOfSale()]);
        }
        if ($this->getWarehouses() != null) {
            $arr_query = array_merge($arr_query, ["warehouses" => $this->getWarehouses()]);
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
            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "fullName")) {
                $this->fullName = $record->fullName;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "firstName")) {
                $this->firstName = $record->firstName;
            }
            if (property_exists($record, "lastName")) {
                $this->lastName = $record->lastName;
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
            if (property_exists($record, "fax")) {
                $this->fax = $record->fax;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "drawerID")) {
                $this->drawerID = $record->drawerID;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "lastModifiedByUserName")) {
                $this->lastModifiedByUserName = $record->lastModifiedByUserName;
            }
            if (property_exists($record, "userID")) {
                $this->userID = $record->userID;
            }
            if (property_exists($record, "username")) {
                $this->username = $record->username;
            }
            if (property_exists($record, "userGroupID")) {
                $this->userGroupID = $record->userGroupID;
            }
            if (property_exists($record, "pointsOfSale")) {
                $this->pointsOfSale = $record->pointsOfSale;
            }
            if (property_exists($record, "warehouses")) {
                $this->warehouses = $record->warehouses;
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

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
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

    public function getDrawerID()
    {
        return $this->drawerID;
    }

    public function setDrawerID($drawerID)
    {
        $this->drawerID = $drawerID;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getLastModifiedByUserName()
    {
        return $this->lastModifiedByUserName;
    }

    public function setLastModifiedByUserName($lastModifiedByUserName)
    {
        $this->lastModifiedByUserName = $lastModifiedByUserName;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUserGroupID()
    {
        return $this->userGroupID;
    }

    public function setUserGroupID($userGroupID)
    {
        $this->userGroupID = $userGroupID;
    }

    public function getPointsOfSale()
    {
        return $this->pointsOfSale;
    }

    public function setPointsOfSale($pointsOfSale)
    {
        $this->pointsOfSale = $pointsOfSale;
    }

    public function getWarehouses()
    {
        return $this->warehouses;
    }

    public function setWarehouses($warehouses)
    {
        $this->warehouses = $warehouses;
    }
}
