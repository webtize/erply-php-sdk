<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class PurchaseDocument
{
    private $id = null;
    private $currencyCode = null;
    private $currencyRate = null;
    private $warehouseID = null;
    private $warehouseName = null;
    private $number = null;
    private $regnumber = null;
    private $date = null;
    private $time = null;
    private $inventoryTransactionDate = null;
    private $supplierID = null;
    private $supplierName = null;
    private $supplierGroupID = null;
    private $addressID = null;
    private $contactID = null;
    private $contactName = null;
    private $employeeID = null;
    private $employeeName = null;
    private $supplierID2 = null;
    private $supplierName2 = null;
    private $stateID = null;
    private $paymentDays = null;
    private $confirmed = null;
    private $referenceNumber = null;
    private $notes = null;
    private $lastModified = null;
    private $projectID = null;
    private $transactionTypeID = null;
    private $transportTypeID = null;
    private $deliveryTermsID = null;
    private $deliveryTermsLocation = null;
    private $triangularTransaction = null;
    private $paid = null;
    private $netTotalForAccounting = null;
    private $totalForAccounting = null;
    private $reasonID = null;
    private $type = null;
    private $status = null;
    private $rounding = null;
    private $netTotal = null;
    private $vatTotal = null;
    private $rows = null;
    private $total = null;
    private $netTotalsByTaxRate = null;
    private $vatTotalsByTaxRate = null;
    private $invoiceLink = null;
    private $baseToDocuments = null;
    private $baseDocuments = null;

    public function getRows()
    {
        return $this->rows;
    }


    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "savePurchaseDocument"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "savePurchaseDocument"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getCurrencyRate() != null) {
            $arr_query = array_merge($arr_query, ["currencyRate" => $this->getCurrencyRate()]);
        }
        if ($this->getWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
        }
        if ($this->getWarehouseName() != null) {
            $arr_query = array_merge($arr_query, ["warehouseName" => $this->getWarehouseName()]);
        }
        if ($this->getNumber() != null) {
            $arr_query = array_merge($arr_query, ["number" => $this->getNumber()]);
        }
        if ($this->getRegnumber() != null) {
            $arr_query = array_merge($arr_query, ["regnumber" => $this->getRegnumber()]);
        }
        if ($this->getDate() != null) {
            $arr_query = array_merge($arr_query, ["date" => $this->getDate()]);
        }
        if ($this->getTime() != null) {
            $arr_query = array_merge($arr_query, ["time" => $this->getTime()]);
        }
        if ($this->getInventoryTransactionDate() != null) {
            $arr_query = array_merge($arr_query, ["inventoryTransactionDate" => $this->getInventoryTransactionDate()]);
        }
        if ($this->getSupplierID() != null) {
            $arr_query = array_merge($arr_query, ["supplierID" => $this->getSupplierID()]);
        }
        if ($this->getSupplierName() != null) {
            $arr_query = array_merge($arr_query, ["supplierName" => $this->getSupplierName()]);
        }
        if ($this->getSupplierGroupID() != null) {
            $arr_query = array_merge($arr_query, ["supplierGroupID" => $this->getSupplierGroupID()]);
        }
        if ($this->getAddressID() != null) {
            $arr_query = array_merge($arr_query, ["addressID" => $this->getAddressID()]);
        }
        if ($this->getContactID() != null) {
            $arr_query = array_merge($arr_query, ["contactID" => $this->getContactID()]);
        }
        if ($this->getContactName() != null) {
            $arr_query = array_merge($arr_query, ["contactName" => $this->getContactName()]);
        }
        if ($this->getEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["employeeID" => $this->getEmployeeID()]);
        }
        if ($this->getEmployeeName() != null) {
            $arr_query = array_merge($arr_query, ["employeeName" => $this->getEmployeeName()]);
        }
        if ($this->getSupplierID2() != null) {
            $arr_query = array_merge($arr_query, ["supplierID2" => $this->getSupplierID2()]);
        }
        if ($this->getSupplierName2() != null) {
            $arr_query = array_merge($arr_query, ["supplierName2" => $this->getSupplierName2()]);
        }
        if ($this->getStateID() != null) {
            $arr_query = array_merge($arr_query, ["stateID" => $this->getStateID()]);
        }
        if ($this->getPaymentDays() != null) {
            $arr_query = array_merge($arr_query, ["paymentDays" => $this->getPaymentDays()]);
        }
        if ($this->getConfirmed() != null) {
            $arr_query = array_merge($arr_query, ["confirmed" => $this->getConfirmed()]);
        }
        if ($this->getReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["referenceNumber" => $this->getReferenceNumber()]);
        }
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getProjectID() != null) {
            $arr_query = array_merge($arr_query, ["projectID" => $this->getProjectID()]);
        }
        if ($this->getTransactionTypeID() != null) {
            $arr_query = array_merge($arr_query, ["transactionTypeID" => $this->getTransactionTypeID()]);
        }
        if ($this->getTransportTypeID() != null) {
            $arr_query = array_merge($arr_query, ["transportTypeID" => $this->getTransportTypeID()]);
        }
        if ($this->getDeliveryTermsID() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTermsID" => $this->getDeliveryTermsID()]);
        }
        if ($this->getDeliveryTermsLocation() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTermsLocation" => $this->getDeliveryTermsLocation()]);
        }
        if ($this->getTriangularTransaction() != null) {
            $arr_query = array_merge($arr_query, ["triangularTransaction" => $this->getTriangularTransaction()]);
        }
        if ($this->getPaid() != null) {
            $arr_query = array_merge($arr_query, ["paid" => $this->getPaid()]);
        }
        if ($this->getNetTotalForAccounting() != null) {
            $arr_query = array_merge($arr_query, ["netTotalForAccounting" => $this->getNetTotalForAccounting()]);
        }
        if ($this->getTotalForAccounting() != null) {
            $arr_query = array_merge($arr_query, ["totalForAccounting" => $this->getTotalForAccounting()]);
        }
        if ($this->getReasonID() != null) {
            $arr_query = array_merge($arr_query, ["reasonID" => $this->getReasonID()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getStatus() != null) {
            $arr_query = array_merge($arr_query, ["status" => $this->getStatus()]);
        }
        if ($this->getRounding() != null) {
            $arr_query = array_merge($arr_query, ["rounding" => $this->getRounding()]);
        }
        if ($this->getNetTotal() != null) {
            $arr_query = array_merge($arr_query, ["netTotal" => $this->getNetTotal()]);
        }
        if ($this->getVatTotal() != null) {
            $arr_query = array_merge($arr_query, ["vatTotal" => $this->getVatTotal()]);
        }
        if ($this->getTotal() != null) {
            $arr_query = array_merge($arr_query, ["total" => $this->getTotal()]);
        }
        if ($this->getNetTotalsByTaxRate() != null) {
            $arr_query = array_merge($arr_query, ["netTotalsByTaxRate" => $this->getNetTotalsByTaxRate()]);
        }
        if ($this->getVatTotalsByTaxRate() != null) {
            $arr_query = array_merge($arr_query, ["vatTotalsByTaxRate" => $this->getVatTotalsByTaxRate()]);
        }
        if ($this->getInvoiceLink() != null) {
            $arr_query = array_merge($arr_query, ["invoiceLink" => $this->getInvoiceLink()]);
        }
        if ($this->getBaseToDocuments() != null) {
            $arr_query = array_merge($arr_query, ["baseToDocuments" => $this->getBaseToDocuments()]);
        }
        if ($this->getBaseDocuments() != null) {
            $arr_query = array_merge($arr_query, ["baseDocuments" => $this->getBaseDocuments()]);
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
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "currencyRate")) {
                $this->currencyRate = $record->currencyRate;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "warehouseName")) {
                $this->warehouseName = $record->warehouseName;
            }
            if (property_exists($record, "number")) {
                $this->number = $record->number;
            }
            if (property_exists($record, "regnumber")) {
                $this->regnumber = $record->regnumber;
            }
            if (property_exists($record, "rows")) {
                $this->rows = [];
                foreach ($record->rows as $row) {
                    array_push($this->rows, new Row1($row));
                }
            }
            if (property_exists($record, "date")) {
                $this->date = $record->date;
            }
            if (property_exists($record, "time")) {
                $this->time = $record->time;
            }
            if (property_exists($record, "inventoryTransactionDate")) {
                $this->inventoryTransactionDate = $record->inventoryTransactionDate;
            }
            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
            }
            if (property_exists($record, "supplierName")) {
                $this->supplierName = $record->supplierName;
            }
            if (property_exists($record, "supplierGroupID")) {
                $this->supplierGroupID = $record->supplierGroupID;
            }
            if (property_exists($record, "addressID")) {
                $this->addressID = $record->addressID;
            }
            if (property_exists($record, "contactID")) {
                $this->contactID = $record->contactID;
            }
            if (property_exists($record, "contactName")) {
                $this->contactName = $record->contactName;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "supplierID2")) {
                $this->supplierID2 = $record->supplierID2;
            }
            if (property_exists($record, "supplierName2")) {
                $this->supplierName2 = $record->supplierName2;
            }
            if (property_exists($record, "stateID")) {
                $this->stateID = $record->stateID;
            }
            if (property_exists($record, "paymentDays")) {
                $this->paymentDays = $record->paymentDays;
            }
            if (property_exists($record, "confirmed")) {
                $this->confirmed = $record->confirmed;
            }
            if (property_exists($record, "referenceNumber")) {
                $this->referenceNumber = $record->referenceNumber;
            }
            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "projectID")) {
                $this->projectID = $record->projectID;
            }
            if (property_exists($record, "transactionTypeID")) {
                $this->transactionTypeID = $record->transactionTypeID;
            }
            if (property_exists($record, "transportTypeID")) {
                $this->transportTypeID = $record->transportTypeID;
            }
            if (property_exists($record, "deliveryTermsID")) {
                $this->deliveryTermsID = $record->deliveryTermsID;
            }
            if (property_exists($record, "deliveryTermsLocation")) {
                $this->deliveryTermsLocation = $record->deliveryTermsLocation;
            }
            if (property_exists($record, "triangularTransaction")) {
                $this->triangularTransaction = $record->triangularTransaction;
            }
            if (property_exists($record, "paid")) {
                $this->paid = $record->paid;
            }
            if (property_exists($record, "netTotalForAccounting")) {
                $this->netTotalForAccounting = $record->netTotalForAccounting;
            }
            if (property_exists($record, "totalForAccounting")) {
                $this->totalForAccounting = $record->totalForAccounting;
            }
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "status")) {
                $this->status = $record->status;
            }
            if (property_exists($record, "rounding")) {
                $this->rounding = $record->rounding;
            }
            if (property_exists($record, "netTotal")) {
                $this->netTotal = $record->netTotal;
            }
            if (property_exists($record, "vatTotal")) {
                $this->vatTotal = $record->vatTotal;
            }
            if (property_exists($record, "total")) {
                $this->total = $record->total;
            }
            if (property_exists($record, "netTotalsByTaxRate")) {
                $this->netTotalsByTaxRate = $record->netTotalsByTaxRate;
            }
            if (property_exists($record, "vatTotalsByTaxRate")) {
                $this->vatTotalsByTaxRate = $record->vatTotalsByTaxRate;
            }
            if (property_exists($record, "invoiceLink")) {
                $this->invoiceLink = $record->invoiceLink;
            }
            if (property_exists($record, "baseToDocuments")) {
                $this->baseToDocuments = $record->baseToDocuments;
            }
            if (property_exists($record, "baseDocuments")) {
                $this->baseDocuments = $record->baseDocuments;
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

    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    public function setWarehouseID($warehouseID)
    {
        $this->warehouseID = $warehouseID;
    }

    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName = $warehouseName;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getRegnumber()
    {
        return $this->regnumber;
    }

    public function setRegnumber($regnumber)
    {
        $this->regnumber = $regnumber;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getInventoryTransactionDate()
    {
        return $this->inventoryTransactionDate;
    }

    public function setInventoryTransactionDate($inventoryTransactionDate)
    {
        $this->inventoryTransactionDate = $inventoryTransactionDate;
    }

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        $this->supplierID = $supplierID;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    }

    public function getSupplierGroupID()
    {
        return $this->supplierGroupID;
    }

    public function setSupplierGroupID($supplierGroupID)
    {
        $this->supplierGroupID = $supplierGroupID;
    }

    public function getAddressID()
    {
        return $this->addressID;
    }

    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
    }

    public function getContactID()
    {
        return $this->contactID;
    }

    public function setContactID($contactID)
    {
        $this->contactID = $contactID;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }

    public function getSupplierID2()
    {
        return $this->supplierID2;
    }


    public function setSupplierID2($supplierID2)
    {
        $this->supplierID2 = $supplierID2;
    }

    public function getSupplierName2()
    {
        return $this->supplierName2;
    }

    public function setSupplierName2($supplierName2)
    {
        $this->supplierName2 = $supplierName2;
    }

    public function getStateID()
    {
        return $this->stateID;
    }

    public function setStateID($stateID)
    {
        $this->stateID = $stateID;
    }

    public function getPaymentDays()
    {
        return $this->paymentDays;
    }

    public function setPaymentDays($paymentDays)
    {
        $this->paymentDays = $paymentDays;
    }

    public function getConfirmed()
    {
        return $this->confirmed;
    }

    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
    }

    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getProjectID()
    {
        return $this->projectID;
    }

    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;
    }

    public function getTransactionTypeID()
    {
        return $this->transactionTypeID;
    }

    public function setTransactionTypeID($transactionTypeID)
    {
        $this->transactionTypeID = $transactionTypeID;
    }

    public function getTransportTypeID()
    {
        return $this->transportTypeID;
    }

    public function setTransportTypeID($transportTypeID)
    {
        $this->transportTypeID = $transportTypeID;
    }

    public function getDeliveryTermsID()
    {
        return $this->deliveryTermsID;
    }

    public function setDeliveryTermsID($deliveryTermsID)
    {
        $this->deliveryTermsID = $deliveryTermsID;
    }

    public function getDeliveryTermsLocation()
    {
        return $this->deliveryTermsLocation;
    }

    public function setDeliveryTermsLocation($deliveryTermsLocation)
    {
        $this->deliveryTermsLocation = $deliveryTermsLocation;
    }

    public function getTriangularTransaction()
    {
        return $this->triangularTransaction;
    }

    public function setTriangularTransaction($triangularTransaction)
    {
        $this->triangularTransaction = $triangularTransaction;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    public function getNetTotalForAccounting()
    {
        return $this->netTotalForAccounting;
    }

    public function setNetTotalForAccounting($netTotalForAccounting)
    {
        $this->netTotalForAccounting = $netTotalForAccounting;
    }

    public function getTotalForAccounting()
    {
        return $this->totalForAccounting;
    }

    public function setTotalForAccounting($totalForAccounting)
    {
        $this->totalForAccounting = $totalForAccounting;
    }

    public function getReasonID()
    {
        return $this->reasonID;
    }

    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getRounding()
    {
        return $this->rounding;
    }

    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
    }

    public function getNetTotal()
    {
        return $this->netTotal;
    }

    public function setNetTotal($netTotal)
    {
        $this->netTotal = $netTotal;
    }

    public function getVatTotal()
    {
        return $this->vatTotal;
    }

    public function setVatTotal($vatTotal)
    {
        $this->vatTotal = $vatTotal;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getNetTotalsByTaxRate()
    {
        return $this->netTotalsByTaxRate;
    }

    public function setNetTotalsByTaxRate($netTotalsByTaxRate)
    {
        $this->netTotalsByTaxRate = $netTotalsByTaxRate;
    }

    public function getVatTotalsByTaxRate()
    {
        return $this->vatTotalsByTaxRate;
    }

    public function setVatTotalsByTaxRate($vatTotalsByTaxRate)
    {
        $this->vatTotalsByTaxRate = $vatTotalsByTaxRate;
    }

    public function getInvoiceLink()
    {
        return $this->invoiceLink;
    }

    public function setInvoiceLink($invoiceLink)
    {
        $this->invoiceLink = $invoiceLink;
    }

    public function getBaseToDocuments()
    {
        return $this->baseToDocuments;
    }

    public function setBaseToDocuments($baseToDocuments)
    {
        $this->baseToDocuments = $baseToDocuments;
    }

    public function getBaseDocuments()
    {
        return $this->baseDocuments;
    }

    public function setBaseDocuments($baseDocuments)
    {
        $this->baseDocuments = $baseDocuments;
    }
}
