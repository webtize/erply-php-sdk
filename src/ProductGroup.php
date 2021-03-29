<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class ProductGroup
{
    private $id = null;
    private $productGroupID = null;
    private $name = null;
    private $showInWebshop = null;
    private $nonDiscountable = null;
    private $positionNo = null;
    private $added = null;
    private $lastModified = null;
    private $parentGroupID = null;
    private $subGroups = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveProductGroup"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveProductGroup"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getProductGroupID() != null) {
            $arr_query = array_merge($arr_query, ["productGroupID" => $this->getProductGroupID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getShowInWebshop() != null) {
            $arr_query = array_merge($arr_query, ["showInWebshop" => $this->getShowInWebshop()]);
        }
        if ($this->getNonDiscountable() != null) {
            $arr_query = array_merge($arr_query, ["nonDiscountable" => $this->getNonDiscountable()]);
        }
        if ($this->getPositionNo() != null) {
            $arr_query = array_merge($arr_query, ["positionNo" => $this->getPositionNo()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getParentGroupID() != null) {
            $arr_query = array_merge($arr_query, ["parentGroupID" => $this->getParentGroupID()]);
        }
        if ($this->getSubGroups() != null) {
            $arr_query = array_merge($arr_query, ["subGroups" => $this->getSubGroups()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "productGroupID")) {
                $this->productGroupID = $record->productGroupID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "showInWebshop")) {
                $this->showInWebshop = $record->showInWebshop;
            }
            if (property_exists($record, "nonDiscountable")) {
                $this->nonDiscountable = $record->nonDiscountable;
            }
            if (property_exists($record, "positionNo")) {
                $this->positionNo = $record->positionNo;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "parentGroupID")) {
                $this->parentGroupID = $record->parentGroupID;
            }
            if (property_exists($record, "subGroups")) {
                $this->subGroups = $record->subGroups;
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

    public function getProductGroupID()
    {
        return $this->productGroupID;
    }

    public function setProductGroupID($productGroupID)
    {
        $this->productGroupID = $productGroupID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getShowInWebshop()
    {
        return $this->showInWebshop;
    }

    public function setShowInWebshop($showInWebshop)
    {
        $this->showInWebshop = $showInWebshop;
    }

    public function getNonDiscountable()
    {
        return $this->nonDiscountable;
    }

    public function setNonDiscountable($nonDiscountable)
    {
        $this->nonDiscountable = $nonDiscountable;
    }

    public function getPositionNo()
    {
        return $this->positionNo;
    }

    public function setPositionNo($positionNo)
    {
        $this->positionNo = $positionNo;
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

    public function getParentGroupID()
    {
        return $this->parentGroupID;
    }

    public function setParentGroupID($parentGroupID)
    {
        $this->parentGroupID = $parentGroupID;
    }

    public function getSubGroups()
    {
        return $this->subGroups;
    }

    public function setSubGroups($subGroups)
    {
        $this->subGroups = $subGroups;
    }
}
