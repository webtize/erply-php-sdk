<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class ProductCategory
{
    private $productCategoryID = null;
    private $parentCategoryID = null;
    private $productCategoryName = null;
    private $added = null;
    private $lastModified = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveProductCategory"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveProductCategory"]);
        }
        if ($this->getProductCategoryID() != null) {
            $arr_query = array_merge($arr_query, ["productCategoryID" => $this->getProductCategoryID()]);
        }
        if ($this->getParentCategoryID() != null) {
            $arr_query = array_merge($arr_query, ["parentCategoryID" => $this->getParentCategoryID()]);
        }
        if ($this->getProductCategoryName() != null) {
            $arr_query = array_merge($arr_query, ["productCategoryName" => $this->getProductCategoryName()]);
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

            if (property_exists($record, "productCategoryID")) {
                $this->productCategoryID = $record->productCategoryID;
            }
            if (property_exists($record, "parentCategoryID")) {
                $this->parentCategoryID = $record->parentCategoryID;
            }
            if (property_exists($record, "productCategoryName")) {
                $this->productCategoryName = $record->productCategoryName;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    public function getProductCategoryID()
    {
        return $this->productCategoryID;
    }

    public function setProductCategoryID($productCategoryID)
    {
        $this->productCategoryID = $productCategoryID;
    }

    public function getParentCategoryID()
    {
        return $this->parentCategoryID;
    }

    public function setParentCategoryID($parentCategoryID)
    {
        $this->parentCategoryID = $parentCategoryID;
    }

    public function getProductCategoryName()
    {
        return $this->productCategoryName;
    }

    public function setProductCategoryName($productCategoryName)
    {
        $this->productCategoryName = $productCategoryName;
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
