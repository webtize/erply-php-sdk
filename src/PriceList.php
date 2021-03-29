<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class PriceList
{
    private $pricelistID = null;
    private $name = null;
    private $startDate = null;
    private $endDate = null;
    private $active = null;
    private $added = null;
    private $addedByUserName = null;
    private $lastModified = null;
    private $lastModifiedByUserName = null;
    private $pricelistRules = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "savePriceList"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "savePriceList"]);
        }
        if ($this->getPricelistID() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID" => $this->getPricelistID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getStartDate() != null) {
            $arr_query = array_merge($arr_query, ["startDate" => $this->getStartDate()]);
        }
        if ($this->getEndDate() != null) {
            $arr_query = array_merge($arr_query, ["endDate" => $this->getEndDate()]);
        }
        if ($this->getActive() != null) {
            $arr_query = array_merge($arr_query, ["active" => $this->getActive()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getAddedByUserName() != null) {
            $arr_query = array_merge($arr_query, ["addedByUserName" => $this->getAddedByUserName()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getLastModifiedByUserName() != null) {
            $arr_query = array_merge($arr_query, ["lastModifiedByUserName" => $this->getLastModifiedByUserName()]);
        }
        if ($this->getPricelistRules() != null) {
            $arr_query = array_merge($arr_query, ["pricelistRules" => $this->getPricelistRules()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {

            if (property_exists($record, "pricelistID")) {
                $this->pricelistID = $record->pricelistID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "startDate")) {
                $this->startDate = $record->startDate;
            }
            if (property_exists($record, "endDate")) {
                $this->endDate = $record->endDate;
            }
            if (property_exists($record, "active")) {
                $this->active = $record->active;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "addedByUserName")) {
                $this->addedByUserName = $record->addedByUserName;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "lastModifiedByUserName")) {
                $this->lastModifiedByUserName = $record->lastModifiedByUserName;
            }
            if (property_exists($record, "pricelistRules")) {
                $this->pricelistRules = $record->pricelistRules;
            }
        }
    }

    public function getPricelistID()
    {
        return $this->pricelistID;
    }

    public function setPricelistID($pricelistID)
    {
        $this->pricelistID = $pricelistID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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

    public function getAddedByUserName()
    {
        return $this->addedByUserName;
    }

    public function setAddedByUserName($addedByUserName)
    {
        $this->addedByUserName = $addedByUserName;
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

    public function getPricelistRules()
    {
        return $this->pricelistRules;
    }

    public function setPricelistRules($pricelistRules)
    {
        $this->pricelistRules = $pricelistRules;
    }
}
