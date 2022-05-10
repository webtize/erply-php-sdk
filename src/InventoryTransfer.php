<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class InventoryTransfer
{
    private $inventoryTransferID = null;
    private $inventoryTransferNo = null;
    private $inventoryTransferOrderID = null;
    private $creatorID = null;
    private $warehouseFromID = null;
    private $warehouseToID = null;
    private $currencyCode = null;
    private $currencyRate = null;
    private $followupInventoryTransferID = null;
    private $date = null;
    private $inventoryTransactionDate = null;
    private $shippingDateRequested = null;
    private $shippingDateActual = null;
    private $notes = null;
    private $status = null;
    private $confirmed = null;
    private $added = null;
    private $lastModified = null;
    private $type = null;
    private $rows = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveInventoryTransfer"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveInventoryTransfer"]);
        }
        if ($this->getInventoryTransferID() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransferID" => $this->getInventoryTransferID()]);
        }
        if ($this->getInventoryTransferNo() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransferNo" => $this->getInventoryTransferNo()]);
        }
        if ($this->getCreatorID() != null) {
            $arr_query = array_merge($arr_query, ["creatorID" => $this->getCreatorID()]);
        }
        if ($this->getWarehouseFromID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseFromID" => $this->getWarehouseFromID()]);
        }
        if ($this->getWarehouseToID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseToID" => $this->getWarehouseToID()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getCurrencyRate() != null) {
            $arr_query = array_merge($arr_query, ["currencyRate" => $this->getCurrencyRate()]);
        }
        if ($this->getFollowupInventoryTransferID() != null) {
            $arr_query = array_merge($arr_query, ["followupInventoryTransferID" => $this->getFollowupInventoryTransferID()]);
        }
        if ($this->getDate() != null) {
            $arr_query = array_merge($arr_query, ["date" => $this->getDate()]);
        }
        if ($this->getInventoryTransactionDate() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransactionDate" => $this->getInventoryTransactionDate()]);
        }
        if ($this->getShippingDateRequested() != null) {
            $arr_query = array_merge($arr_query, ["shippingDateRequested" => $this->getShippingDateRequested()]);
        }
        if ($this->getShippingDateActual() != null) {
            $arr_query = array_merge($arr_query, ["shippingDateActual" => $this->getShippingDateActual()]);
        }
        if ($this->getInventoryTransferOrderID() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransferOrderID" => $this->getInventoryTransferOrderID()]);
        }
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getStatus() != null) {
            $arr_query = array_merge($arr_query, ["status" => $this->getStatus()]);
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
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getRows() != null) {
            $arr_query = array_merge($arr_query, ["rows" => $this->getRows()]);
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

            if (property_exists($record, "inventoryTransferID")) {
                $this->inventoryTransferID = $record->inventoryTransferID;
            }
            if (property_exists($record, "inventoryTransferNo")) {
                $this->inventoryTransferNo = $record->inventoryTransferNo;
            }
            if (property_exists($record, "creatorID")) {
                $this->creatorID = $record->creatorID;
            }
            if (property_exists($record, "warehouseFromID")) {
                $this->warehouseFromID = $record->warehouseFromID;
            }
            if (property_exists($record, "warehouseToID")) {
                $this->warehouseToID = $record->warehouseToID;
            }
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "inventoryTransferOrderID")) {
                $this->inventoryTransferOrderID = $record->inventoryTransferOrderID;
            }
            if (property_exists($record, "currencyRate")) {
                $this->currencyRate = $record->currencyRate;
            }
            if (property_exists($record, "followupInventoryTransferID")) {
                $this->followupInventoryTransferID = $record->followupInventoryTransferID;
            }
            if (property_exists($record, "date")) {
                $this->date = $record->date;
            }
            if (property_exists($record, "inventoryTransactionDate")) {
                $this->inventoryTransactionDate = $record->inventoryTransactionDate;
            }
            if (property_exists($record, "shippingDateRequested")) {
                $this->shippingDateRequested = $record->shippingDateRequested;
            }
            if (property_exists($record, "shippingDateActual")) {
                $this->shippingDateActual = $record->shippingDateActual;
            }
            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }
            if (property_exists($record, "status")) {
                $this->status = $record->status;
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
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "rows")) {
                $this->rows = $record->rows;
            }
        }
    }

    public function getInventoryTransferID()
    {
        return $this->inventoryTransferID;
    }

    public function setInventoryTransferID($inventoryTransferID)
    {
        $this->inventoryTransferID = $inventoryTransferID;
    }

    public function getInventoryTransferNo()
    {
        return $this->inventoryTransferNo;
    }

    public function setInventoryTransferNo($inventoryTransferNo)
    {
        $this->inventoryTransferNo = $inventoryTransferNo;
    }

    public function getCreatorID()
    {
        return $this->creatorID;
    }

    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;
    }

    public function getWarehouseFromID()
    {
        return $this->warehouseFromID;
    }

    public function setWarehouseFromID($warehouseFromID)
    {
        $this->warehouseFromID = $warehouseFromID;
    }

    public function getWarehouseToID()
    {
        return $this->warehouseToID;
    }

    public function setWarehouseToID($warehouseToID)
    {
        $this->warehouseToID = $warehouseToID;
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

    public function getFollowupInventoryTransferID()
    {
        return $this->followupInventoryTransferID;
    }

    public function setFollowupInventoryTransferID($followupInventoryTransferID)
    {
        $this->followupInventoryTransferID = $followupInventoryTransferID;
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

    public function getShippingDateRequested()
    {
        return $this->shippingDateRequested;
    }

    public function setShippingDateRequested($shippingDateRequested)
    {
        $this->shippingDateRequested = $shippingDateRequested;
    }

    public function getShippingDateActual()
    {
        return $this->shippingDateActual;
    }

    /**
     * @return null
     */
    public function getInventoryTransferOrderID()
    {
        return $this->inventoryTransferOrderID;
    }

    /**
     * @param null $inventoryTransferOrderID
     */
    public function setInventoryTransferOrderID($inventoryTransferOrderID): void
    {
        $this->inventoryTransferOrderID = $inventoryTransferOrderID;
    }


    public function setShippingDateActual($shippingDateActual)
    {
        $this->shippingDateActual = $shippingDateActual;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
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
