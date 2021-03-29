<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class GiftCard
{
    private $giftCardID = null;
    private $typeID = null;
    private $code = null;
    private $value = null;
    private $balance = null;
    private $purchasingCustomerID = null;
    private $redeemingCustomerID = null;
    private $purchaseDateTime = null;
    private $redemptionDateTime = null;
    private $expirationDate = null;
    private $purchaseInvoiceID = null;
    private $vatrateID = null;
    private $information = null;
    private $added = null;
    private $lastModified = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveGiftCard"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveGiftCard"]);
        }
        if ($this->getGiftCardID() != null) {
            $arr_query = array_merge($arr_query, ["giftCardID" => $this->getGiftCardID()]);
        }
        if ($this->getTypeID() != null) {
            $arr_query = array_merge($arr_query, ["typeID" => $this->getTypeID()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getValue() != null) {
            $arr_query = array_merge($arr_query, ["value" => $this->getValue()]);
        }
        if ($this->getBalance() != null) {
            $arr_query = array_merge($arr_query, ["balance" => $this->getBalance()]);
        }
        if ($this->getPurchasingCustomerID() != null) {
            $arr_query = array_merge($arr_query, ["purchasingCustomerID" => $this->getPurchasingCustomerID()]);
        }
        if ($this->getRedeemingCustomerID() != null) {
            $arr_query = array_merge($arr_query, ["redeemingCustomerID" => $this->getRedeemingCustomerID()]);
        }
        if ($this->getPurchaseDateTime() != null) {
            $arr_query = array_merge($arr_query, ["purchaseDateTime" => $this->getPurchaseDateTime()]);
        }
        if ($this->getRedemptionDateTime() != null) {
            $arr_query = array_merge($arr_query, ["redemptionDateTime" => $this->getRedemptionDateTime()]);
        }
        if ($this->getExpirationDate() != null) {
            $arr_query = array_merge($arr_query, ["expirationDate" => $this->getExpirationDate()]);
        }
        if ($this->getPurchaseInvoiceID() != null) {
            $arr_query = array_merge($arr_query, ["purchaseInvoiceID" => $this->getPurchaseInvoiceID()]);
        }
        if ($this->getVatrateID() != null) {
            $arr_query = array_merge($arr_query, ["vatrateID" => $this->getVatrateID()]);
        }
        if ($this->getInformation() != null) {
            $arr_query = array_merge($arr_query, ["information" => $this->getInformation()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "giftCardID")) {
                $this->giftCardID = $record->giftCardID;
            }
            if (property_exists($record, "typeID")) {
                $this->typeID = $record->typeID;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "value")) {
                $this->value = $record->value;
            }
            if (property_exists($record, "balance")) {
                $this->balance = $record->balance;
            }
            if (property_exists($record, "purchasingCustomerID")) {
                $this->purchasingCustomerID = $record->purchasingCustomerID;
            }
            if (property_exists($record, "redeemingCustomerID")) {
                $this->redeemingCustomerID = $record->redeemingCustomerID;
            }
            if (property_exists($record, "purchaseDateTime")) {
                $this->purchaseDateTime = $record->purchaseDateTime;
            }
            if (property_exists($record, "redemptionDateTime")) {
                $this->redemptionDateTime = $record->redemptionDateTime;
            }
            if (property_exists($record, "expirationDate")) {
                $this->expirationDate = $record->expirationDate;
            }
            if (property_exists($record, "purchaseInvoiceID")) {
                $this->purchaseInvoiceID = $record->purchaseInvoiceID;
            }
            if (property_exists($record, "vatrateID")) {
                $this->vatrateID = $record->vatrateID;
            }
            if (property_exists($record, "information")) {
                $this->information = $record->information;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    public function getGiftCardID()
    {
        return $this->giftCardID;
    }

    public function setGiftCardID($giftCardID)
    {
        $this->giftCardID = $giftCardID;
    }

    public function getTypeID()
    {
        return $this->typeID;
    }

    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getPurchasingCustomerID()
    {
        return $this->purchasingCustomerID;
    }

    public function setPurchasingCustomerID($purchasingCustomerID)
    {
        $this->purchasingCustomerID = $purchasingCustomerID;
    }

    public function getRedeemingCustomerID()
    {
        return $this->redeemingCustomerID;
    }

    public function setRedeemingCustomerID($redeemingCustomerID)
    {
        $this->redeemingCustomerID = $redeemingCustomerID;
    }

    public function getPurchaseDateTime()
    {
        return $this->purchaseDateTime;
    }

    public function setPurchaseDateTime($purchaseDateTime)
    {
        $this->purchaseDateTime = $purchaseDateTime;
    }

    public function getRedemptionDateTime()
    {
        return $this->redemptionDateTime;
    }

    public function setRedemptionDateTime($redemptionDateTime)
    {
        $this->redemptionDateTime = $redemptionDateTime;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function getPurchaseInvoiceID()
    {
        return $this->purchaseInvoiceID;
    }

    public function setPurchaseInvoiceID($purchaseInvoiceID)
    {
        $this->purchaseInvoiceID = $purchaseInvoiceID;
    }

    public function getVatrateID()
    {
        return $this->vatrateID;
    }

    public function setVatrateID($vatrateID)
    {
        $this->vatrateID = $vatrateID;
    }

    public function getInformation()
    {
        return $this->information;
    }

    public function setInformation($information)
    {
        $this->information = $information;
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
}
