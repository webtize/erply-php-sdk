<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class InventoryRegistration
{
    private $inventoryRegistrationID = null;
    private $inventoryRegistrationNo = null;
    private $creatorID = null;
    private $warehouseID = null;
    private $inventoryID = null;
    private $stocktakingID = null;
    private $supplierID = null;
    private $currencyCode = null;
    private $currencyRate = null;
    private $date = null;
    private $inventoryTransactionDate = null;
    private $cause = null;
    private $reasonID = null;
    private $confirmed = null;
    private $added = null;
    private $lastModified = null;
    private $rows = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveInventoryRegistration"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveInventoryRegistration"]);
        }
        if ($this->getInventoryRegistrationID() != null) {
            $arr_query = array_merge($arr_query, ["inventoryRegistrationID" => $this->getInventoryRegistrationID()]);
        }
        if ($this->getInventoryRegistrationNo() != null) {
            $arr_query = array_merge($arr_query, ["inventoryRegistrationNo" => $this->getInventoryRegistrationNo()]);
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
        if ($this->getSupplierID() != null) {
            $arr_query = array_merge($arr_query, ["supplierID" => $this->getSupplierID()]);
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
        if ($this->getCause() != null) {
            $arr_query = array_merge($arr_query, ["cause" => $this->getCause()]);
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
        if ($this->getReasonID() != null) {
            $arr_query = array_merge($arr_query, ["reasonID" => $this->getReasonID()]);
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

            if (property_exists($record, "inventoryRegistrationID")) {
                $this->inventoryRegistrationID = $record->inventoryRegistrationID;
            }
            if (property_exists($record, "inventoryRegistrationNo")) {
                $this->inventoryRegistrationNo = $record->inventoryRegistrationNo;
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
            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
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
            if (property_exists($record, "cause")) {
                $this->cause = $record->cause;
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
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "rows")) {
                $this->rows = $record->rows;
            }
        }
    }

    public function getInventoryRegistrationID()
    {
        return $this->inventoryRegistrationID;
    }

    public function setInventoryRegistrationID($inventoryRegistrationID)
    {
        $this->inventoryRegistrationID = $inventoryRegistrationID;
    }

    public function getInventoryRegistrationNo()
    {
        return $this->inventoryRegistrationNo;
    }

    public function setInventoryRegistrationNo($inventoryRegistrationNo)
    {
        $this->inventoryRegistrationNo = $inventoryRegistrationNo;
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

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        $this->supplierID = $supplierID;
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

    public function getCause()
    {
        return $this->cause;
    }

    public function setCause($cause)
    {
        $this->cause = $cause;
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

    /**
     * @return null
     */
    public function getReasonID()
    {
        return $this->reasonID;
    }

    /**
     * @param null $reasonID
     */
    public function setReasonID($reasonID): void
    {
        $this->reasonID = $reasonID;
    }
}
