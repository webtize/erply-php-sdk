<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Currency
{
    private $currencyID = null;
    private $name = null;
    private $code = null;
    private $rate = null;
    private $nameShort = null;
    private $nameFraction = null;
    private $default = null;
    private $added = null;
    private $lastModified = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveCurrency"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveCurrency"]);
        }
        if ($this->getCurrencyID() != null) {
            $arr_query = array_merge($arr_query, ["currencyID" => $this->getCurrencyID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getRate() != null) {
            $arr_query = array_merge($arr_query, ["rate" => $this->getRate()]);
        }
        if ($this->getNameShort() != null) {
            $arr_query = array_merge($arr_query, ["nameShort" => $this->getNameShort()]);
        }
        if ($this->getNameFraction() != null) {
            $arr_query = array_merge($arr_query, ["nameFraction" => $this->getNameFraction()]);
        }
        if ($this->getDefault() != null) {
            $arr_query = array_merge($arr_query, ["default" => $this->getDefault()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
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
            if (property_exists($record, "currencyID")) {
                $this->currencyID = $record->currencyID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "rate")) {
                $this->rate = $record->rate;
            }
            if (property_exists($record, "nameShort")) {
                $this->nameShort = $record->nameShort;
            }
            if (property_exists($record, "nameFraction")) {
                $this->nameFraction = $record->nameFraction;
            }
            if (property_exists($record, "default")) {
                $this->default = $record->default;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
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

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function getNameShort()
    {
        return $this->nameShort;
    }

    public function setNameShort($nameShort)
    {
        $this->nameShort = $nameShort;
    }

    public function getNameFraction()
    {
        return $this->nameFraction;
    }

    public function setNameFraction($nameFraction)
    {
        $this->nameFraction = $nameFraction;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setDefault($default)
    {
        $this->default = $default;
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
