<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SupplierGroup
{
    private $supplierGroupID = null;
    private $name = null;
    private $added = null;
    private $lastModified = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveSupplierGroup"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveSupplierGroup"]);
        }
        if ($this->getSupplierGroupID() != null) {
            $arr_query = array_merge($arr_query, ["supplierGroupID" => $this->getSupplierGroupID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
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
            if (property_exists($record, "supplierGroupID")) {
                $this->supplierGroupID = $record->supplierGroupID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    public function getSupplierGroupID()
    {
        return $this->supplierGroupID;
    }

    public function setSupplierGroupID($supplierGroupID)
    {
        $this->supplierGroupID = $supplierGroupID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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
