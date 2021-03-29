<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class CustomerGroup
{
    private $clientGroupID = null;
    private $customerGroupID = null;
    private $parentID = null;
    private $name = null;
    private $pricelistID = null;
    private $pricelistID2 = null;
    private $pricelistID3 = null;
    private $pricelistID4 = null;
    private $pricelistID5 = null;
    private $added = null;
    private $lastModified = null;

    public function __construct($record)
    {
        if (property_exists($record, "clientGroupID")) {
            $this->clientGroupID = $record->clientGroupID;
        }
        if (property_exists($record, "customerGroupID")) {
            $this->customerGroupID = $record->customerGroupID;
        }
        if (property_exists($record, "parentID")) {
            $this->parentID = $record->parentID;
        }
        if (property_exists($record, "name")) {
            $this->name = $record->name;
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
        if (property_exists($record, "added")) {
            $this->added = $record->added;
        }
        if (property_exists($record, "lastModified")) {
            $this->lastModified = $record->lastModified;
        }
    }
    /*
        public function getQuery($bulk)
        {
            $arr_query = [];
            if ($bulk) {
                array_merge($arr_query, ["requestName" => ""]);
            } else {
                array_merge($arr_query, ["request" => ""]);
            }
            if ($this->getClientGroupID() != null) {
                array_merge($arr_query, ["clientGroupID" => $this->getClientGroupID()]);
            }
            if ($this->getCustomerGroupID() != null) {
                array_merge($arr_query, ["customerGroupID" => $this->getCustomerGroupID()]);
            }
            if ($this->getParentID() != null) {
                array_merge($arr_query, ["parentID" => $this->getParentID()]);
            }
            if ($this->getName() != null) {
                array_merge($arr_query, ["name" => $this->getName()]);
            }
            if ($this->getPricelistID() != null) {
                array_merge($arr_query, ["pricelistID" => $this->getPricelistID()]);
            }
            if ($this->getPricelistID2() != null) {
                array_merge($arr_query, ["pricelistID2" => $this->getPricelistID2()]);
            }
            if ($this->getPricelistID3() != null) {
                array_merge($arr_query, ["pricelistID3" => $this->getPricelistID3()]);
            }
            if ($this->getPricelistID4() != null) {
                array_merge($arr_query, ["pricelistID4" => $this->getPricelistID4()]);
            }
            if ($this->getPricelistID5() != null) {
                array_merge($arr_query, ["pricelistID5" => $this->getPricelistID5()]);
            }
            if ($this->getAdded() != null) {
                array_merge($arr_query, ["added" => $this->getAdded()]);
            }
            if ($this->getLastModified() != null) {
                array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
            }
            return $arr_query;
        }
    */
    public function getClientGroupID()
    {
        return $this->clientGroupID;
    }

    public function setClientGroupID($clientGroupID)
    {
        $this->clientGroupID = $clientGroupID;
    }

    public function getCustomerGroupID()
    {
        return $this->customerGroupID;
    }

    public function setCustomerGroupID($customerGroupID)
    {
        $this->customerGroupID = $customerGroupID;
    }

    public function getParentID()
    {
        return $this->parentID;
    }

    public function setParentID($parentID)
    {
        $this->parentID = $parentID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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
