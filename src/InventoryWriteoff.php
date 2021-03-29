<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class InventoryWriteoff
{
    private $inventoryWriteOffID = null;
    private $inventoryWriteOffNo = null;
    private $creatorID = null;
    private $warehouseID = null;
    private $inventoryID = null;
    private $stocktakingID = null;
    private $recipientID = null;
    private $currencyCode = null;
    private $currencyRate = null;
    private $date = null;
    private $inventoryTransactionDate = null;
    private $comments = null;
    private $reasonID = null;
    private $confirmed = null;
    private $added = null;
    private $lastModified = null;
    private $rows = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveInventoryWriteOff"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveInventoryWriteOff"]);
        }
        if ($this->getInventoryWriteOffID() != null) {
            $arr_query = array_merge($arr_query, ["inventoryWriteOffID" => $this->getInventoryWriteOffID()]);
        }
        if ($this->getInventoryWriteOffNo() != null) {
            $arr_query = array_merge($arr_query, ["inventoryWriteOffNo" => $this->getInventoryWriteOffNo()]);
        }
        if ($this->getCreatorID() != null) {
            $arr_query = array_merge($arr_query, ["creatorID" => $this->getCreatorID()]);
        }
        if ($this->getWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
        }
        if ($this->getInventoryID() != null) {
            $arr_query = array_merge($arr_query, ["inventoryID" => $this->getInventoryID()]);
        }
        if ($this->getStocktakingID() != null) {
            $arr_query = array_merge($arr_query, ["stocktakingID" => $this->getStocktakingID()]);
        }
        if ($this->getRecipientID() != null) {
            $arr_query = array_merge($arr_query, ["recipientID" => $this->getRecipientID()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getCurrencyRate() != null) {
            $arr_query = array_merge($arr_query, ["currencyRate" => $this->getCurrencyRate()]);
        }
        if ($this->getDate() != null) {
            $arr_query = array_merge($arr_query, ["date" => $this->getDate()]);
        }
        if ($this->getInventoryTransactionDate() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransactionDate" => $this->getInventoryTransactionDate()]);
        }
        if ($this->getComments() != null) {
            $arr_query = array_merge($arr_query, ["comments" => $this->getComments()]);
        }
        if ($this->getReasonID() != null) {
            $arr_query = array_merge($arr_query, ["reasonID" => $this->getReasonID()]);
        }
        if ($this->getConfirmed() != null) {
            $arr_query = array_merge($arr_query, ["confirmed" => $this->getConfirmed()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getRows() != null) {
            $arr_query = array_merge($arr_query, ["rows" => $this->getRows()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {

            if (property_exists($record, "inventoryWriteOffID")) {
                $this->inventoryWriteOffID = $record->inventoryWriteOffID;
            }
            if (property_exists($record, "inventoryWriteOffNo")) {
                $this->inventoryWriteOffNo = $record->inventoryWriteOffNo;
            }
            if (property_exists($record, "creatorID")) {
                $this->creatorID = $record->creatorID;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "inventoryID")) {
                $this->inventoryID = $record->inventoryID;
            }
            if (property_exists($record, "stocktakingID")) {
                $this->stocktakingID = $record->stocktakingID;
            }
            if (property_exists($record, "recipientID")) {
                $this->recipientID = $record->recipientID;
            }
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "currencyRate")) {
                $this->currencyRate = $record->currencyRate;
            }
            if (property_exists($record, "date")) {
                $this->date = $record->date;
            }
            if (property_exists($record, "inventoryTransactionDate")) {
                $this->inventoryTransactionDate = $record->inventoryTransactionDate;
            }
            if (property_exists($record, "comments")) {
                $this->comments = $record->comments;
            }
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "confirmed")) {
                $this->confirmed = $record->confirmed;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "rows")) {
                $this->rows = $record->rows;
            }
        }
    }

    public function getInventoryWriteOffID()
    {
        return $this->inventoryWriteOffID;
    }

    public function setInventoryWriteOffID($inventoryWriteOffID)
    {
        $this->inventoryWriteOffID = $inventoryWriteOffID;
    }

    public function getInventoryWriteOffNo()
    {
        return $this->inventoryWriteOffNo;
    }

    public function setInventoryWriteOffNo($inventoryWriteOffNo)
    {
        $this->inventoryWriteOffNo = $inventoryWriteOffNo;
    }

    public function getCreatorID()
    {
        return $this->creatorID;
    }

    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;
    }

    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    public function setWarehouseID($warehouseID)
    {
        $this->warehouseID = $warehouseID;
    }

    public function getInventoryID()
    {
        return $this->inventoryID;
    }

    public function setInventoryID($inventoryID)
    {
        $this->inventoryID = $inventoryID;
    }

    public function getStocktakingID()
    {
        return $this->stocktakingID;
    }

    public function setStocktakingID($stocktakingID)
    {
        $this->stocktakingID = $stocktakingID;
    }

    public function getRecipientID()
    {
        return $this->recipientID;
    }

    public function setRecipientID($recipientID)
    {
        $this->recipientID = $recipientID;
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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getInventoryTransactionDate()
    {
        return $this->inventoryTransactionDate;
    }

    public function setInventoryTransactionDate($inventoryTransactionDate)
    {
        $this->inventoryTransactionDate = $inventoryTransactionDate;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getReasonID()
    {
        return $this->reasonID;
    }

    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;
    }

    public function getConfirmed()
    {
        return $this->confirmed;
    }

    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
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

    public function getRows()
    {
        return $this->rows;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }
}
