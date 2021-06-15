<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;

/*
* License : check licence.md file in repository
* Created by: Jigarkumar Patel (Webtize Solutions)
*/

class Customer
{
    private $id = null;
    private $customerID = null;
    private $fullName = null;
    private $companyName = null;
    private $companyTypeID = null;
    private $firstName = null;
    private $lastName = null;
    private $personTitleID = null;
    private $eInvoiceEmail = null;
    private $emailEnabled = null;
    private $eInvoiceEnabled = null;
    private $mailEnabled = null;
    private $operatorIdentifier = null;
    private $EDI = null;
    private $groupID = null;
    private $countryID = null;
    private $payerID = null;
    private $phone = null;
    private $mobile = null;
    private $email = null;
    private $fax = null;
    private $code = null;
    private $birthday = null;
    private $integrationCode = null;
    private $flagStatus = null;
    private $colorStatus = null;
    private $credit = null;
    private $salesBlocked = null;
    private $referenceNumber = null;
    private $customerCardNumber = null;
    private $factoringContractNumber = null;
    private $groupName = null;
    private $customerType = null;
    private $address = null;
    private $street = null;
    private $address2 = null;
    private $city = null;
    private $postalCode = null;
    private $country = null;
    private $state = null;
    private $addressTypeID = null;
    private $addressTypeName = null;
    private $isPOSDefaultCustomer = null;
    private $euCustomerType = null;
    private $lastModifierUsername = null;
    private $lastModifierEmployeeID = null;
    private $taxExempt = null;
    private $paysViaFactoring = null;
    private $rewardPoints = null;
    private $twitterID = null;
    private $facebookName = null;
    private $creditCardLastNumbers = null;
    private $GLN = null;
    private $deliveryTypeID = null;
    private $image = null;
    private $customerBalanceDisabled = null;
    private $rewardPointsDisabled = null;
    private $posCouponsDisabled = null;
    private $emailOptOut = null;
    private $signUpStoreID = null;
    private $homeStoreID = null;
    private $gender = null;
    private $externalIDs = null;
    private $jobTitleID = null;
    private $paymentDays = null;
    private $vatNumber = null;
    private $priceListID = null;
    private $priceListID2 = null;
    private $priceListID3 = null;
    private $clientManagerID = null;
    private $customerManagerID = null;

    /**
     * @return null
     */
    public function getCustomerManagerID()
    {
        return $this->customerManagerID;
    }


    /**
     * @return null
     */
    public function getClientManagerID()
    {
        return $this->clientManagerID;
    }

    /**
     * @param null $clientManagerID
     */
    public function setClientManagerID($clientManagerID): void
    {
        $this->clientManagerID = $clientManagerID;
    }

    /**
     * @return null
     */
    public function getPriceListID()
    {
        return $this->priceListID;
    }

    /**
     * @return null
     */
    public function getPriceListID2()
    {
        return $this->priceListID2;
    }

    /**
     * @return null
     */
    public function getPriceListID3()
    {
        return $this->priceListID3;
    }


    /**
     * @return null
     */
    public function getJobTitleID()
    {
        return $this->jobTitleID;
    }

    /**
     * @param null $jobTitleID
     */
    public function setJobTitleID($jobTitleID)
    {
        $this->jobTitleID = $jobTitleID;
    }

    /**
     * @return null
     */
    public function getPaymentDays()
    {
        return $this->paymentDays;
    }

    /**
     * @param null $paymentDays
     */
    public function setPaymentDays($paymentDays)
    {
        $this->paymentDays = $paymentDays;
    }

    /**
     * @return null
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param null $vatNumber
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }


    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveCustomer"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveCustomer"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getPaymentDays() != null) {
            $arr_query = array_merge($arr_query, ["paymentDays" => $this->getPaymentDays()]);
        }
        if ($this->getJobTitleID() != null) {
            $arr_query = array_merge($arr_query, ["jobTitleID" => $this->getJobTitleID()]);
        }
        if ($this->getClientManagerID() != null) {
            $arr_query = array_merge($arr_query, ["clientManagerID" => $this->getClientManagerID()]);
        }
        if ($this->getVatNumber() != null) {
            $arr_query = array_merge($arr_query, ["vatNumber" => $this->getVatNumber()]);
        }
        if ($this->getCustomerID() != null) {
            $arr_query = array_merge($arr_query, ["customerID" => $this->getCustomerID()]);
        }
        if ($this->getFullName() != null) {
            $arr_query = array_merge($arr_query, ["fullName" => $this->getFullName()]);
        }
        if ($this->getCompanyName() != null) {
            $arr_query = array_merge($arr_query, ["companyName" => $this->getCompanyName()]);
        }
        if ($this->getCompanyTypeID() != null) {
            $arr_query = array_merge($arr_query, ["companyTypeID" => $this->getCompanyTypeID()]);
        }
        if ($this->getFirstName() != null) {
            $arr_query = array_merge($arr_query, ["firstName" => $this->getFirstName()]);
        }
        if ($this->getLastName() != null) {
            $arr_query = array_merge($arr_query, ["lastName" => $this->getLastName()]);
        }
        if ($this->getPersonTitleID() != null) {
            $arr_query = array_merge($arr_query, ["personTitleID" => $this->getPersonTitleID()]);
        }
        if ($this->getEInvoiceEmail() != null) {
            $arr_query = array_merge($arr_query, ["eInvoiceEmail" => $this->getEInvoiceEmail()]);
        }
        if ($this->getEmailEnabled() != null) {
            $arr_query = array_merge($arr_query, ["emailEnabled" => $this->getEmailEnabled()]);
        }
        if ($this->getEInvoiceEnabled() != null) {
            $arr_query = array_merge($arr_query, ["eInvoiceEnabled" => $this->getEInvoiceEnabled()]);
        }
        if ($this->getMailEnabled() != null) {
            $arr_query = array_merge($arr_query, ["mailEnabled" => $this->getMailEnabled()]);
        }
        if ($this->getOperatorIdentifier() != null) {
            $arr_query = array_merge($arr_query, ["operatorIdentifier" => $this->getOperatorIdentifier()]);
        }
        if ($this->getEDI() != null) {
            $arr_query = array_merge($arr_query, ["EDI" => $this->getEDI()]);
        }
        if ($this->getGroupID() != null) {
            $arr_query = array_merge($arr_query, ["groupID" => $this->getGroupID()]);
        }
        if ($this->getCountryID() != null) {
            $arr_query = array_merge($arr_query, ["countryID" => $this->getCountryID()]);
        }
        if ($this->getPayerID() != null) {
            $arr_query = array_merge($arr_query, ["payerID" => $this->getPayerID()]);
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
        if ($this->getBirthday() != null) {
            $arr_query = array_merge($arr_query, ["birthday" => $this->getBirthday()]);
        }
        if ($this->getIntegrationCode() != null) {
            $arr_query = array_merge($arr_query, ["integrationCode" => $this->getIntegrationCode()]);
        }
        if ($this->getFlagStatus() != null) {
            $arr_query = array_merge($arr_query, ["flagStatus" => $this->getFlagStatus()]);
        }
        if ($this->getColorStatus() != null) {
            $arr_query = array_merge($arr_query, ["colorStatus" => $this->getColorStatus()]);
        }
        if ($this->getCredit() != null) {
            $arr_query = array_merge($arr_query, ["credit" => $this->getCredit()]);
        }
        if ($this->getSalesBlocked() != null) {
            $arr_query = array_merge($arr_query, ["salesBlocked" => $this->getSalesBlocked()]);
        }
        if ($this->getReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["referenceNumber" => $this->getReferenceNumber()]);
        }
        if ($this->getCustomerCardNumber() != null) {
            $arr_query = array_merge($arr_query, ["customerCardNumber" => $this->getCustomerCardNumber()]);
        }
        if ($this->getFactoringContractNumber() != null) {
            $arr_query = array_merge($arr_query, ["factoringContractNumber" => $this->getFactoringContractNumber()]);
        }
        if ($this->getGroupName() != null) {
            $arr_query = array_merge($arr_query, ["groupName" => $this->getGroupName()]);
        }
        if ($this->getCustomerType() != null) {
            $arr_query = array_merge($arr_query, ["customerType" => $this->getCustomerType()]);
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
        if ($this->getPostalCode() != null) {
            $arr_query = array_merge($arr_query, ["postalCode" => $this->getPostalCode()]);
        }
        if ($this->getCountry() != null) {
            $arr_query = array_merge($arr_query, ["country" => $this->getCountry()]);
        }
        if ($this->getState() != null) {
            $arr_query = array_merge($arr_query, ["state" => $this->getState()]);
        }
        if ($this->getAddressTypeID() != null) {
            $arr_query = array_merge($arr_query, ["addressTypeID" => $this->getAddressTypeID()]);
        }
        if ($this->getAddressTypeName() != null) {
            $arr_query = array_merge($arr_query, ["addressTypeName" => $this->getAddressTypeName()]);
        }
        if ($this->getIsPOSDefaultCustomer() != null) {
            $arr_query = array_merge($arr_query, ["isPOSDefaultCustomer" => $this->getIsPOSDefaultCustomer()]);
        }
        if ($this->getEuCustomerType() != null) {
            $arr_query = array_merge($arr_query, ["euCustomerType" => $this->getEuCustomerType()]);
        }
        if ($this->getLastModifierUsername() != null) {
            $arr_query = array_merge($arr_query, ["lastModifierUsername" => $this->getLastModifierUsername()]);
        }
        if ($this->getLastModifierEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["lastModifierEmployeeID" => $this->getLastModifierEmployeeID()]);
        }
        if ($this->getTaxExempt() != null) {
            $arr_query = array_merge($arr_query, ["taxExempt" => $this->getTaxExempt()]);
        }
        if ($this->getPaysViaFactoring() != null) {
            $arr_query = array_merge($arr_query, ["paysViaFactoring" => $this->getPaysViaFactoring()]);
        }
        if ($this->getRewardPoints() != null) {
            $arr_query = array_merge($arr_query, ["rewardPoints" => $this->getRewardPoints()]);
        }
        if ($this->getTwitterID() != null) {
            $arr_query = array_merge($arr_query, ["twitterID" => $this->getTwitterID()]);
        }
        if ($this->getFacebookName() != null) {
            $arr_query = array_merge($arr_query, ["facebookName" => $this->getFacebookName()]);
        }
        if ($this->getCreditCardLastNumbers() != null) {
            $arr_query = array_merge($arr_query, ["creditCardLastNumbers" => $this->getCreditCardLastNumbers()]);
        }
        if ($this->getGLN() != null) {
            $arr_query = array_merge($arr_query, ["GLN" => $this->getGLN()]);
        }
        if ($this->getDeliveryTypeID() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTypeID" => $this->getDeliveryTypeID()]);
        }
        if ($this->getImage() != null) {
            $arr_query = array_merge($arr_query, ["image" => $this->getImage()]);
        }
        if ($this->getCustomerBalanceDisabled() != null) {
            $arr_query = array_merge($arr_query, ["customerBalanceDisabled" => $this->getCustomerBalanceDisabled()]);
        }
        if ($this->getRewardPointsDisabled() != null) {
            $arr_query = array_merge($arr_query, ["rewardPointsDisabled" => $this->getRewardPointsDisabled()]);
        }
        if ($this->getPosCouponsDisabled() != null) {
            $arr_query = array_merge($arr_query, ["posCouponsDisabled" => $this->getPosCouponsDisabled()]);
        }
        if ($this->getEmailOptOut() != null) {
            $arr_query = array_merge($arr_query, ["emailOptOut" => $this->getEmailOptOut()]);
        }
        if ($this->getSignUpStoreID() != null) {
            $arr_query = array_merge($arr_query, ["signUpStoreID" => $this->getSignUpStoreID()]);
        }
        if ($this->getHomeStoreID() != null) {
            $arr_query = array_merge($arr_query, ["homeStoreID" => $this->getHomeStoreID()]);
        }
        if ($this->getGender() != null) {
            $arr_query = array_merge($arr_query, ["gender" => $this->getGender()]);
        }
        if ($this->getExternalIDs() != null) {
            $arr_query = array_merge($arr_query, ["externalIDs" => $this->getExternalIDs()]);
        }
        if ($this->getPriceListID() != null) {
            $arr_query = array_merge($arr_query, ["priceListID" => $this->getPriceListID()]);
        }
        if ($this->getPriceListID2() != null) {
            $arr_query = array_merge($arr_query, ["priceListID2" => $this->getPriceListID2()]);
        }
        if ($this->getPriceListID3() != null) {
            $arr_query = array_merge($arr_query, ["priceListID3" => $this->getPriceListID3()]);
        }
        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }
        return $arr_query;
    }

    /**
     * @param null $priceListID
     */
    public function setPriceListID($priceListID): void
    {
        $this->priceListID = $priceListID;
    }

    /**
     * @param null $priceListID2
     */
    public function setPriceListID2($priceListID2): void
    {
        $this->priceListID2 = $priceListID2;
    }

    /**
     * @param null $priceListID3
     */
    public function setPriceListID3($priceListID3): void
    {
        $this->priceListID3 = $priceListID3;
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
            if (property_exists($record, "vatNumber")) {
                $this->vatNumber = $record->vatNumber;
            }
            if (property_exists($record, "jobTitleID")) {
                $this->jobTitleID = $record->jobTitleID;
            }
            if (property_exists($record, "customerManagerID")) {
                $this->customerManagerID = $record->customerManagerID;
            }
            if (property_exists($record, "paymentDays")) {
                $this->paymentDays = $record->paymentDays;
            }
            if (property_exists($record, "customerID")) {
                $this->customerID = $record->customerID;
            }
            if (property_exists($record, "fullName")) {
                $this->fullName = $record->fullName;
            }
            if (property_exists($record, "companyName")) {
                $this->companyName = $record->companyName;
            }
            if (property_exists($record, "companyTypeID")) {
                $this->companyTypeID = $record->companyTypeID;
            }
            if (property_exists($record, "firstName")) {
                $this->firstName = $record->firstName;
            }
            if (property_exists($record, "lastName")) {
                $this->lastName = $record->lastName;
            }
            if (property_exists($record, "personTitleID")) {
                $this->personTitleID = $record->personTitleID;
            }
            if (property_exists($record, "eInvoiceEmail")) {
                $this->eInvoiceEmail = $record->eInvoiceEmail;
            }
            if (property_exists($record, "emailEnabled")) {
                $this->emailEnabled = $record->emailEnabled;
            }
            if (property_exists($record, "eInvoiceEnabled")) {
                $this->eInvoiceEnabled = $record->eInvoiceEnabled;
            }
            if (property_exists($record, "mailEnabled")) {
                $this->mailEnabled = $record->mailEnabled;
            }
            if (property_exists($record, "operatorIdentifier")) {
                $this->operatorIdentifier = $record->operatorIdentifier;
            }
            if (property_exists($record, "EDI")) {
                $this->EDI = $record->EDI;
            }
            if (property_exists($record, "groupID")) {
                $this->groupID = $record->groupID;
            }
            if (property_exists($record, "countryID")) {
                $this->countryID = $record->countryID;
            }
            if (property_exists($record, "payerID")) {
                $this->payerID = $record->payerID;
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
            if (property_exists($record, "birthday")) {
                $this->birthday = $record->birthday;
            }
            if (property_exists($record, "integrationCode")) {
                $this->integrationCode = $record->integrationCode;
            }
            if (property_exists($record, "flagStatus")) {
                $this->flagStatus = $record->flagStatus;
            }
            if (property_exists($record, "colorStatus")) {
                $this->colorStatus = $record->colorStatus;
            }
            if (property_exists($record, "credit")) {
                $this->credit = $record->credit;
            }
            if (property_exists($record, "salesBlocked")) {
                $this->salesBlocked = $record->salesBlocked;
            }
            if (property_exists($record, "referenceNumber")) {
                $this->referenceNumber = $record->referenceNumber;
            }
            if (property_exists($record, "customerCardNumber")) {
                $this->customerCardNumber = $record->customerCardNumber;
            }
            if (property_exists($record, "factoringContractNumber")) {
                $this->factoringContractNumber = $record->factoringContractNumber;
            }
            if (property_exists($record, "groupName")) {
                $this->groupName = $record->groupName;
            }
            if (property_exists($record, "customerType")) {
                $this->customerType = $record->customerType;
            }
            if (property_exists($record, "address")) {
                $this->address = $record->address;
            }
            if (property_exists($record, "street")) {
                $this->street = $record->street;
            }
            if (property_exists($record, "priceListID")) {
                $this->priceListID = $record->priceListID;
            }
            if (property_exists($record, "priceListID2")) {
                $this->priceListID2 = $record->priceListID2;
            }
            if (property_exists($record, "priceListID3")) {
                $this->priceListID3 = $record->priceListID3;
            }
            if (property_exists($record, "address2")) {
                $this->address2 = $record->address2;
            }
            if (property_exists($record, "city")) {
                $this->city = $record->city;
            }
            if (property_exists($record, "postalCode")) {
                $this->postalCode = $record->postalCode;
            }
            if (property_exists($record, "country")) {
                $this->country = $record->country;
            }
            if (property_exists($record, "state")) {
                $this->state = $record->state;
            }
            if (property_exists($record, "addressTypeID")) {
                $this->addressTypeID = $record->addressTypeID;
            }
            if (property_exists($record, "addressTypeName")) {
                $this->addressTypeName = $record->addressTypeName;
            }
            if (property_exists($record, "isPOSDefaultCustomer")) {
                $this->isPOSDefaultCustomer = $record->isPOSDefaultCustomer;
            }
            if (property_exists($record, "euCustomerType")) {
                $this->euCustomerType = $record->euCustomerType;
            }
            if (property_exists($record, "lastModifierUsername")) {
                $this->lastModifierUsername = $record->lastModifierUsername;
            }
            if (property_exists($record, "lastModifierEmployeeID")) {
                $this->lastModifierEmployeeID = $record->lastModifierEmployeeID;
            }
            if (property_exists($record, "taxExempt")) {
                $this->taxExempt = $record->taxExempt;
            }
            if (property_exists($record, "paysViaFactoring")) {
                $this->paysViaFactoring = $record->paysViaFactoring;
            }
            if (property_exists($record, "rewardPoints")) {
                $this->rewardPoints = $record->rewardPoints;
            }
            if (property_exists($record, "twitterID")) {
                $this->twitterID = $record->twitterID;
            }
            if (property_exists($record, "facebookName")) {
                $this->facebookName = $record->facebookName;
            }
            if (property_exists($record, "creditCardLastNumbers")) {
                $this->creditCardLastNumbers = $record->creditCardLastNumbers;
            }
            if (property_exists($record, "GLN")) {
                $this->GLN = $record->GLN;
            }
            if (property_exists($record, "deliveryTypeID")) {
                $this->deliveryTypeID = $record->deliveryTypeID;
            }
            if (property_exists($record, "image")) {
                $this->image = $record->image;
            }
            if (property_exists($record, "customerBalanceDisabled")) {
                $this->customerBalanceDisabled = $record->customerBalanceDisabled;
            }
            if (property_exists($record, "rewardPointsDisabled")) {
                $this->rewardPointsDisabled = $record->rewardPointsDisabled;
            }
            if (property_exists($record, "posCouponsDisabled")) {
                $this->posCouponsDisabled = $record->posCouponsDisabled;
            }
            if (property_exists($record, "emailOptOut")) {
                $this->emailOptOut = $record->emailOptOut;
            }
            if (property_exists($record, "signUpStoreID")) {
                $this->signUpStoreID = $record->signUpStoreID;
            }
            if (property_exists($record, "homeStoreID")) {
                $this->homeStoreID = $record->homeStoreID;
            }
            if (property_exists($record, "gender")) {
                $this->gender = $record->gender;
            }
            if (property_exists($record, "externalIDs")) {
                $this->externalIDs = $record->externalIDs;
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

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
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

    public function getCompanyTypeID()
    {
        return $this->companyTypeID;
    }

    public function setCompanyTypeID($companyTypeID)
    {
        $this->companyTypeID = $companyTypeID;
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

    public function getPersonTitleID()
    {
        return $this->personTitleID;
    }

    public function setPersonTitleID($personTitleID)
    {
        $this->personTitleID = $personTitleID;
    }

    public function getEInvoiceEmail()
    {
        return $this->eInvoiceEmail;
    }

    public function setEInvoiceEmail($eInvoiceEmail)
    {
        $this->eInvoiceEmail = $eInvoiceEmail;
    }

    public function getEmailEnabled()
    {
        return $this->emailEnabled;
    }

    public function setEmailEnabled($emailEnabled)
    {
        $this->emailEnabled = $emailEnabled;
    }

    public function getEInvoiceEnabled()
    {
        return $this->eInvoiceEnabled;
    }

    public function setEInvoiceEnabled($eInvoiceEnabled)
    {
        $this->eInvoiceEnabled = $eInvoiceEnabled;
    }

    public function getMailEnabled()
    {
        return $this->mailEnabled;
    }

    public function setMailEnabled($mailEnabled)
    {
        $this->mailEnabled = $mailEnabled;
    }

    public function getOperatorIdentifier()
    {
        return $this->operatorIdentifier;
    }

    public function setOperatorIdentifier($operatorIdentifier)
    {
        $this->operatorIdentifier = $operatorIdentifier;
    }

    public function getEDI()
    {
        return $this->EDI;
    }

    public function setEDI($EDI)
    {
        $this->EDI = $EDI;
    }

    public function getGroupID()
    {
        return $this->groupID;
    }

    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
    }

    public function getCountryID()
    {
        return $this->countryID;
    }

    public function setCountryID($countryID)
    {
        $this->countryID = $countryID;
    }

    public function getPayerID()
    {
        return $this->payerID;
    }

    public function setPayerID($payerID)
    {
        $this->payerID = $payerID;
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

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getIntegrationCode()
    {
        return $this->integrationCode;
    }

    public function setIntegrationCode($integrationCode)
    {
        $this->integrationCode = $integrationCode;
    }

    public function getFlagStatus()
    {
        return $this->flagStatus;
    }

    public function setFlagStatus($flagStatus)
    {
        $this->flagStatus = $flagStatus;
    }

    public function getColorStatus()
    {
        return $this->colorStatus;
    }

    public function setColorStatus($colorStatus)
    {
        $this->colorStatus = $colorStatus;
    }

    public function getCredit()
    {
        return $this->credit;
    }

    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    public function getSalesBlocked()
    {
        return $this->salesBlocked;
    }

    public function setSalesBlocked($salesBlocked)
    {
        $this->salesBlocked = $salesBlocked;
    }

    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getCustomerCardNumber()
    {
        return $this->customerCardNumber;
    }

    public function setCustomerCardNumber($customerCardNumber)
    {
        $this->customerCardNumber = $customerCardNumber;
    }

    public function getFactoringContractNumber()
    {
        return $this->factoringContractNumber;
    }

    public function setFactoringContractNumber($factoringContractNumber)
    {
        $this->factoringContractNumber = $factoringContractNumber;
    }

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    public function getCustomerType()
    {
        return $this->customerType;
    }

    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
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

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getAddressTypeID()
    {
        return $this->addressTypeID;
    }

    public function setAddressTypeID($addressTypeID)
    {
        $this->addressTypeID = $addressTypeID;
    }

    public function getAddressTypeName()
    {
        return $this->addressTypeName;
    }

    public function setAddressTypeName($addressTypeName)
    {
        $this->addressTypeName = $addressTypeName;
    }

    public function getIsPOSDefaultCustomer()
    {
        return $this->isPOSDefaultCustomer;
    }

    public function setIsPOSDefaultCustomer($isPOSDefaultCustomer)
    {
        $this->isPOSDefaultCustomer = $isPOSDefaultCustomer;
    }

    public function getEuCustomerType()
    {
        return $this->euCustomerType;
    }

    public function setEuCustomerType($euCustomerType)
    {
        $this->euCustomerType = $euCustomerType;
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

    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;
    }

    public function getPaysViaFactoring()
    {
        return $this->paysViaFactoring;
    }

    public function setPaysViaFactoring($paysViaFactoring)
    {
        $this->paysViaFactoring = $paysViaFactoring;
    }

    public function getRewardPoints()
    {
        return $this->rewardPoints;
    }

    public function setRewardPoints($rewardPoints)
    {
        $this->rewardPoints = $rewardPoints;
    }

    public function getTwitterID()
    {
        return $this->twitterID;
    }

    public function setTwitterID($twitterID)
    {
        $this->twitterID = $twitterID;
    }

    public function getFacebookName()
    {
        return $this->facebookName;
    }

    public function setFacebookName($facebookName)
    {
        $this->facebookName = $facebookName;
    }

    public function getCreditCardLastNumbers()
    {
        return $this->creditCardLastNumbers;
    }

    public function setCreditCardLastNumbers($creditCardLastNumbers)
    {
        $this->creditCardLastNumbers = $creditCardLastNumbers;
    }

    public function getGLN()
    {
        return $this->GLN;
    }

    public function setGLN($GLN)
    {
        $this->GLN = $GLN;
    }

    public function getDeliveryTypeID()
    {
        return $this->deliveryTypeID;
    }

    public function setDeliveryTypeID($deliveryTypeID)
    {
        $this->deliveryTypeID = $deliveryTypeID;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getCustomerBalanceDisabled()
    {
        return $this->customerBalanceDisabled;
    }

    public function setCustomerBalanceDisabled($customerBalanceDisabled)
    {
        $this->customerBalanceDisabled = $customerBalanceDisabled;
    }

    public function getRewardPointsDisabled()
    {
        return $this->rewardPointsDisabled;
    }

    public function setRewardPointsDisabled($rewardPointsDisabled)
    {
        $this->rewardPointsDisabled = $rewardPointsDisabled;
    }

    public function getPosCouponsDisabled()
    {
        return $this->posCouponsDisabled;
    }

    public function setPosCouponsDisabled($posCouponsDisabled)
    {
        $this->posCouponsDisabled = $posCouponsDisabled;
    }

    public function getEmailOptOut()
    {
        return $this->emailOptOut;
    }

    public function setEmailOptOut($emailOptOut)
    {
        $this->emailOptOut = $emailOptOut;
    }

    public function getSignUpStoreID()
    {
        return $this->signUpStoreID;
    }

    public function setSignUpStoreID($signUpStoreID)
    {
        $this->signUpStoreID = $signUpStoreID;
    }

    public function getHomeStoreID()
    {
        return $this->homeStoreID;
    }

    public function setHomeStoreID($homeStoreID)
    {
        $this->homeStoreID = $homeStoreID;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getExternalIDs()
    {
        return $this->externalIDs;
    }

    public function setExternalIDs($externalIDs)
    {
        $this->externalIDs = $externalIDs;
    }
}
