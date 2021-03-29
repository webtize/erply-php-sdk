<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class VatRate
{
    private $id = null;
    private $name = null;
    private $rate = null;
    private $code = null;
    private $active = null;
    private $added = null;
    private $lastModified = null;
    private $isReverseVat = null;
    private $reverseRate = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveVatRate"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveVatRate"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getRate() != null) {
            $arr_query = array_merge($arr_query, ["rate" => $this->getRate()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getActive() != null) {
            $arr_query = array_merge($arr_query, ["active" => $this->getActive()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getIsReverseVat() != null) {
            $arr_query = array_merge($arr_query, ["isReverseVat" => $this->getIsReverseVat()]);
        }
        if ($this->getReverseRate() != null) {
            $arr_query = array_merge($arr_query, ["reverseRate" => $this->getReverseRate()]);
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
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "rate")) {
                $this->rate = $record->rate;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "active")) {
                $this->active = $record->active;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "isReverseVat")) {
                $this->isReverseVat = $record->isReverseVat;
            }
            if (property_exists($record, "reverseRate")) {
                $this->reverseRate = $record->reverseRate;
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
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

    public function getIsReverseVat()
    {
        return $this->isReverseVat;
    }

    public function setIsReverseVat($isReverseVat)
    {
        $this->isReverseVat = $isReverseVat;
    }

    public function getReverseRate()
    {
        return $this->reverseRate;
    }

    public function setReverseRate($reverseRate)
    {
        $this->reverseRate = $reverseRate;
    }
}
