<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Payment
{
    private $paymentID = null;
    private $customerID = null;
    private $documentID = null;
    private $typeID = null;
    private $bankTransactionID = null;
    private $type = null;
    private $date = null;
    private $sum = null;
    private $cashPaid = null;
    private $cashChange = null;
    private $receipt_payer = null;
    private $info = null;
    private $cardHolder = null;
    private $cardType = null;
    private $cardNumber = null;
    private $authorizationCode = null;
    private $referenceNumber = null;
    private $isPrepayment = null;
    private $isReservation = null;
    private $giftCardVatRateID = null;
    private $added = null;
    private $lastModified = null;
    private $currencyCode = null;
    private $currencyRate = null;
    private $storeCredit = null;
    private $bankAccount = null;
    private $bankDocumentNumber = null;
    private $bankDate = null;
    private $bankPayerAccount = null;
    private $bankPayerName = null;
    private $bankPayerCode = null;
    private $bankSum = null;
    private $bankReferenceNumber = null;
    private $bankDescription = null;
    private $bankCurrency = null;
    private $archivalNumber = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "savePayment"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "savePayment"]);
        }
        if ($this->getPaymentID() != null) {
            $arr_query = array_merge($arr_query, ["paymentID" => $this->getPaymentID()]);
        }
        if ($this->getCustomerID() != null) {
            $arr_query = array_merge($arr_query, ["customerID" => $this->getCustomerID()]);
        }
        if ($this->getDocumentID() != null) {
            $arr_query = array_merge($arr_query, ["documentID" => $this->getDocumentID()]);
        }
        if ($this->getTypeID() != null) {
            $arr_query = array_merge($arr_query, ["typeID" => $this->getTypeID()]);
        }
        if ($this->getBankTransactionID() != null) {
            $arr_query = array_merge($arr_query, ["bankTransactionID" => $this->getBankTransactionID()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getDate() != null) {
            $arr_query = array_merge($arr_query, ["date" => $this->getDate()]);
        }
        if ($this->getSum() != null) {
            $arr_query = array_merge($arr_query, ["sum" => $this->getSum()]);
        }
        if ($this->getCashPaid() != null) {
            $arr_query = array_merge($arr_query, ["cashPaid" => $this->getCashPaid()]);
        }
        if ($this->getCashChange() != null) {
            $arr_query = array_merge($arr_query, ["cashChange" => $this->getCashChange()]);
        }
        if ($this->getReceipt_payer() != null) {
            $arr_query = array_merge($arr_query, ["receipt_payer" => $this->getReceipt_payer()]);
        }
        if ($this->getInfo() != null) {
            $arr_query = array_merge($arr_query, ["info" => $this->getInfo()]);
        }
        if ($this->getCardHolder() != null) {
            $arr_query = array_merge($arr_query, ["cardHolder" => $this->getCardHolder()]);
        }
        if ($this->getCardType() != null) {
            $arr_query = array_merge($arr_query, ["cardType" => $this->getCardType()]);
        }
        if ($this->getCardNumber() != null) {
            $arr_query = array_merge($arr_query, ["cardNumber" => $this->getCardNumber()]);
        }
        if ($this->getAuthorizationCode() != null) {
            $arr_query = array_merge($arr_query, ["authorizationCode" => $this->getAuthorizationCode()]);
        }
        if ($this->getReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["referenceNumber" => $this->getReferenceNumber()]);
        }
        if ($this->getIsPrepayment() != null) {
            $arr_query = array_merge($arr_query, ["isPrepayment" => $this->getIsPrepayment()]);
        }
        if ($this->getIsReservation() != null) {
            $arr_query = array_merge($arr_query, ["isReservation" => $this->getIsReservation()]);
        }
        if ($this->getGiftCardVatRateID() != null) {
            $arr_query = array_merge($arr_query, ["giftCardVatRateID" => $this->getGiftCardVatRateID()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getCurrencyRate() != null) {
            $arr_query = array_merge($arr_query, ["currencyRate" => $this->getCurrencyRate()]);
        }
        if ($this->getStoreCredit() != null) {
            $arr_query = array_merge($arr_query, ["storeCredit" => $this->getStoreCredit()]);
        }
        if ($this->getBankAccount() != null) {
            $arr_query = array_merge($arr_query, ["bankAccount" => $this->getBankAccount()]);
        }
        if ($this->getBankDocumentNumber() != null) {
            $arr_query = array_merge($arr_query, ["bankDocumentNumber" => $this->getBankDocumentNumber()]);
        }
        if ($this->getBankDate() != null) {
            $arr_query = array_merge($arr_query, ["bankDate" => $this->getBankDate()]);
        }
        if ($this->getBankPayerAccount() != null) {
            $arr_query = array_merge($arr_query, ["bankPayerAccount" => $this->getBankPayerAccount()]);
        }
        if ($this->getBankPayerName() != null) {
            $arr_query = array_merge($arr_query, ["bankPayerName" => $this->getBankPayerName()]);
        }
        if ($this->getBankPayerCode() != null) {
            $arr_query = array_merge($arr_query, ["bankPayerCode" => $this->getBankPayerCode()]);
        }
        if ($this->getBankSum() != null) {
            $arr_query = array_merge($arr_query, ["bankSum" => $this->getBankSum()]);
        }
        if ($this->getBankReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["bankReferenceNumber" => $this->getBankReferenceNumber()]);
        }
        if ($this->getBankDescription() != null) {
            $arr_query = array_merge($arr_query, ["bankDescription" => $this->getBankDescription()]);
        }
        if ($this->getBankCurrency() != null) {
            $arr_query = array_merge($arr_query, ["bankCurrency" => $this->getBankCurrency()]);
        }
        if ($this->getArchivalNumber() != null) {
            $arr_query = array_merge($arr_query, ["archivalNumber" => $this->getArchivalNumber()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "paymentID")) {
                $this->paymentID = $record->paymentID;
            }
            if (property_exists($record, "customerID")) {
                $this->customerID = $record->customerID;
            }
            if (property_exists($record, "documentID")) {
                $this->documentID = $record->documentID;
            }
            if (property_exists($record, "typeID")) {
                $this->typeID = $record->typeID;
            }
            if (property_exists($record, "bankTransactionID")) {
                $this->bankTransactionID = $record->bankTransactionID;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "date")) {
                $this->date = $record->date;
            }
            if (property_exists($record, "sum")) {
                $this->sum = $record->sum;
            }
            if (property_exists($record, "cashPaid")) {
                $this->cashPaid = $record->cashPaid;
            }
            if (property_exists($record, "cashChange")) {
                $this->cashChange = $record->cashChange;
            }
            if (property_exists($record, "receipt_payer")) {
                $this->receipt_payer = $record->receipt_payer;
            }
            if (property_exists($record, "info")) {
                $this->info = $record->info;
            }
            if (property_exists($record, "cardHolder")) {
                $this->cardHolder = $record->cardHolder;
            }
            if (property_exists($record, "cardType")) {
                $this->cardType = $record->cardType;
            }
            if (property_exists($record, "cardNumber")) {
                $this->cardNumber = $record->cardNumber;
            }
            if (property_exists($record, "authorizationCode")) {
                $this->authorizationCode = $record->authorizationCode;
            }
            if (property_exists($record, "referenceNumber")) {
                $this->referenceNumber = $record->referenceNumber;
            }
            if (property_exists($record, "isPrepayment")) {
                $this->isPrepayment = $record->isPrepayment;
            }
            if (property_exists($record, "isReservation")) {
                $this->isReservation = $record->isReservation;
            }
            if (property_exists($record, "giftCardVatRateID")) {
                $this->giftCardVatRateID = $record->giftCardVatRateID;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "currencyRate")) {
                $this->currencyRate = $record->currencyRate;
            }
            if (property_exists($record, "storeCredit")) {
                $this->storeCredit = $record->storeCredit;
            }
            if (property_exists($record, "bankAccount")) {
                $this->bankAccount = $record->bankAccount;
            }
            if (property_exists($record, "bankDocumentNumber")) {
                $this->bankDocumentNumber = $record->bankDocumentNumber;
            }
            if (property_exists($record, "bankDate")) {
                $this->bankDate = $record->bankDate;
            }
            if (property_exists($record, "bankPayerAccount")) {
                $this->bankPayerAccount = $record->bankPayerAccount;
            }
            if (property_exists($record, "bankPayerName")) {
                $this->bankPayerName = $record->bankPayerName;
            }
            if (property_exists($record, "bankPayerCode")) {
                $this->bankPayerCode = $record->bankPayerCode;
            }
            if (property_exists($record, "bankSum")) {
                $this->bankSum = $record->bankSum;
            }
            if (property_exists($record, "bankReferenceNumber")) {
                $this->bankReferenceNumber = $record->bankReferenceNumber;
            }
            if (property_exists($record, "bankDescription")) {
                $this->bankDescription = $record->bankDescription;
            }
            if (property_exists($record, "bankCurrency")) {
                $this->bankCurrency = $record->bankCurrency;
            }
            if (property_exists($record, "archivalNumber")) {
                $this->archivalNumber = $record->archivalNumber;
            }
        }
    }

    public function getPaymentID()
    {
        return $this->paymentID;
    }

    public function setPaymentID($paymentID)
    {
        $this->paymentID = $paymentID;
    }

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    public function getDocumentID()
    {
        return $this->documentID;
    }

    public function setDocumentID($documentID)
    {
        $this->documentID = $documentID;
    }

    public function getTypeID()
    {
        return $this->typeID;
    }

    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;
    }

    public function getBankTransactionID()
    {
        return $this->bankTransactionID;
    }

    public function setBankTransactionID($bankTransactionID)
    {
        $this->bankTransactionID = $bankTransactionID;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    public function getCashPaid()
    {
        return $this->cashPaid;
    }

    public function setCashPaid($cashPaid)
    {
        $this->cashPaid = $cashPaid;
    }

    public function getCashChange()
    {
        return $this->cashChange;
    }

    public function setCashChange($cashChange)
    {
        $this->cashChange = $cashChange;
    }

    public function getReceipt_payer()
    {
        return $this->receipt_payer;
    }

    public function setReceipt_payer($receipt_payer)
    {
        $this->receipt_payer = $receipt_payer;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    public function getCardType()
    {
        return $this->cardType;
    }

    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getIsPrepayment()
    {
        return $this->isPrepayment;
    }

    public function setIsPrepayment($isPrepayment)
    {
        $this->isPrepayment = $isPrepayment;
    }

    public function getIsReservation()
    {
        return $this->isReservation;
    }

    public function setIsReservation($isReservation)
    {
        $this->isReservation = $isReservation;
    }

    public function getGiftCardVatRateID()
    {
        return $this->giftCardVatRateID;
    }

    public function setGiftCardVatRateID($giftCardVatRateID)
    {
        $this->giftCardVatRateID = $giftCardVatRateID;
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

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    public function setCurrencyRate($currencyRate)
    {
        $this->currencyRate = $currencyRate;
    }

    public function getStoreCredit()
    {
        return $this->storeCredit;
    }

    public function setStoreCredit($storeCredit)
    {
        $this->storeCredit = $storeCredit;
    }

    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    public function getBankDocumentNumber()
    {
        return $this->bankDocumentNumber;
    }

    public function setBankDocumentNumber($bankDocumentNumber)
    {
        $this->bankDocumentNumber = $bankDocumentNumber;
    }

    public function getBankDate()
    {
        return $this->bankDate;
    }

    public function setBankDate($bankDate)
    {
        $this->bankDate = $bankDate;
    }

    public function getBankPayerAccount()
    {
        return $this->bankPayerAccount;
    }

    public function setBankPayerAccount($bankPayerAccount)
    {
        $this->bankPayerAccount = $bankPayerAccount;
    }

    public function getBankPayerName()
    {
        return $this->bankPayerName;
    }

    public function setBankPayerName($bankPayerName)
    {
        $this->bankPayerName = $bankPayerName;
    }

    public function getBankPayerCode()
    {
        return $this->bankPayerCode;
    }

    public function setBankPayerCode($bankPayerCode)
    {
        $this->bankPayerCode = $bankPayerCode;
    }

    public function getBankSum()
    {
        return $this->bankSum;
    }

    public function setBankSum($bankSum)
    {
        $this->bankSum = $bankSum;
    }

    public function getBankReferenceNumber()
    {
        return $this->bankReferenceNumber;
    }

    public function setBankReferenceNumber($bankReferenceNumber)
    {
        $this->bankReferenceNumber = $bankReferenceNumber;
    }

    public function getBankDescription()
    {
        return $this->bankDescription;
    }

    public function setBankDescription($bankDescription)
    {
        $this->bankDescription = $bankDescription;
    }

    public function getBankCurrency()
    {
        return $this->bankCurrency;
    }

    public function setBankCurrency($bankCurrency)
    {
        $this->bankCurrency = $bankCurrency;
    }

    public function getArchivalNumber()
    {
        return $this->archivalNumber;
    }

    public function setArchivalNumber($archivalNumber)
    {
        $this->archivalNumber = $archivalNumber;
    }
}
