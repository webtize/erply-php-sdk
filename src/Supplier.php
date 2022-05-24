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
    private $vatNumber = null;
    private $fax = null;
    private $bankName = null;
    private $bankAccountNumber = null;
    private $bankIBAN = null;
    private $bankSWIFT = null;
    private $deliveryTermsID = null;
    private $paymentDays = null;
    private $code = null;
    private $integrationCode = null;
    private $countryID = null;
    private $countryName = null;
    private $countryCode = null;
    private $address = null;
    private $currencyCode = null;
    private $notes = null;
    private $GLN = null;
    private $attributes = null;
    private $website = null;
    private $skype = null;
    private $birthday = null;

    /**
     * @return null
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param null $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return null
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param null $skype
     */
    public function setSkype($skype): void
    {
        $this->skype = $skype;
    }


    /**
     * @return null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null $website
     */
    public function setWebsite($website): void
    {
        $this->website = $website;
    }


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
        if ($this->getVatNumber() != null) {
            $arr_query = array_merge($arr_query, ["vatNumber" => $this->getVatNumber()]);
        }
        if ($this->getPaymentDays() != null) {
            $arr_query = array_merge($arr_query, ["paymentDays" => $this->getPaymentDays()]);
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
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getBankName() != null) {
            $arr_query = array_merge($arr_query, ["bankName" => $this->getBankName()]);
        }
        if ($this->getBankAccountNumber() != null) {
            $arr_query = array_merge($arr_query, ["bankAccountNumber" => $this->getBankAccountNumber()]);
        }
        if ($this->getBankIBAN() != null) {
            $arr_query = array_merge($arr_query, ["bankIBAN" => $this->getBankIBAN()]);
        }
        if ($this->getBankSWIFT() != null) {
            $arr_query = array_merge($arr_query, ["bankSWIFT" => $this->getBankSWIFT()]);
        }
        if ($this->getSkype() != null) {
            $arr_query = array_merge($arr_query, ["skype" => $this->getSkype()]);
        }
        if ($this->getBirthday() != null) {
            $arr_query = array_merge($arr_query, ["birthday" => $this->getBirthday()]);
        }
        if ($this->getWebsite() != null) {
            $arr_query = array_merge($arr_query, ["website" => $this->getWebsite()]);
        }
        if ($this->getDeliveryTermsID() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTermsID" => $this->getDeliveryTermsID()]);
        }
        if ($this->getAttributes() != null) {
            foreach ($this->getAttributes() as $key => $attribute) {
                $arr_query = array_merge($arr_query, [$key => $attribute]);
            }
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

            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }

            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "birthday")) {
                $this->birthday = $record->birthday;
            }
            if (property_exists($record, "vatNumber")) {
                $this->vatNumber = $record->vatNumber;
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
            if (property_exists($record, "paymentDays")) {
                $this->paymentDays = $record->paymentDays;
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
            if (property_exists($record, "bankName")) {
                $this->bankName = $record->bankName;
            }
            if (property_exists($record, "bankAccountNumber")) {
                $this->bankAccountNumber = $record->bankAccountNumber;
            }
            if (property_exists($record, "bankIBAN")) {
                $this->bankIBAN = $record->bankIBAN;
            }
            if (property_exists($record, "bankSWIFT")) {
                $this->bankSWIFT = $record->bankSWIFT;
            }
            if (property_exists($record, "GLN")) {
                $this->GLN = $record->GLN;
            }
            if (property_exists($record, "deliveryTermsID")) {
                $this->deliveryTermsID = $record->deliveryTermsID;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
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

    /**
     * @return null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param null $notes
     */
    public function setNotes($notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return null
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param null $bankName
     */
    public function setBankName($bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * @return null
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param null $bankAccountNumber
     */
    public function setBankAccountNumber($bankAccountNumber): void
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    /**
     * @return null
     */
    public function getBankIBAN()
    {
        return $this->bankIBAN;
    }

    /**
     * @param null $bankIBAN
     */
    public function setBankIBAN($bankIBAN): void
    {
        $this->bankIBAN = $bankIBAN;
    }

    /**
     * @return null
     */
    public function getBankSWIFT()
    {
        return $this->bankSWIFT;
    }

    /**
     * @param null $bankSWIFT
     */
    public function setBankSWIFT($bankSWIFT): void
    {
        $this->bankSWIFT = $bankSWIFT;
    }

    /**
     * @return null
     */
    public function getDeliveryTermsID()
    {
        return $this->deliveryTermsID;
    }

    /**
     * @param null $deliveryTermsID
     */
    public function setDeliveryTermsID($deliveryTermsID): void
    {
        $this->deliveryTermsID = $deliveryTermsID;
    }

    /**
     * @return null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param null $attributes
     */
    public function setAttributes($attributes): void
    {
        $this->attributes = $attributes;
    }


    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function setVatNumber($vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    public function getPaymentDays()
    {
        return $this->paymentDays;
    }

    public function setPaymentDays($paymentDays): void
    {
        $this->paymentDays = $paymentDays;
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
