<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaleDocument
{
    private $id = null;
    private $currencyRate = null;
    private $warehouseID = null;
    private $number = null;
    private $date = null;
    private $time = null;
    private $inventoryTransactionDate = null;
    private $clientID = null;
    private $addressID = null;
    private $contactID = null;
    private $shipToContactID = null;
    private $employeeID = null;
    private $projectID = null;
    private $paymentDays = null;
    private $confirmed = null;
    private $notes = null;
    private $internalNotes = null;
    private $lastModified = null;
    private $trackingNumber = null;
    private $fulfillmentStatus = null;
    private $printDiscounts = null;
    private $reserveGoods = null;
    private $reserveGoodsUntilDate = null;
    private $packingUnitsDescription = null;
    private $penalty = null;
    private $triangularTransaction = null;
    private $purchaseOrderDone = null;
    private $pricelistID = null;
    private $currencyCode = null;
    private $warehouseName = null;
    private $clientName = null;
    private $clientEmail = null;
    private $clientCardNumber = null;
    private $clientFactoringContractNumber = null;
    private $clientPaysViaFactoring = null;
    private $shipToID = null;
    private $shipToName = null;
    private $shipToContactName = null;
    private $contactName = null;
    private $employeeName = null;
    private $type = null;
    private $invoiceState = null;
    private $paymentType = null;
    private $paymentTypeID = null;
    private $baseDocuments = null;
    private $followUpDocuments = null;
    private $shipToAddressID = null;
    private $shipToAddress = null;
    private $netTotal = null;
    private $vatTotal = null;
    private $netTotalsByRate = null;
    private $vatTotalsByRate = null;
    private $netTotalsByTaxRate = null;
    private $vatTotalsByTaxRate = null;
    private $rounding = null;
    private $total = null;
    private $paid = null;
    private $invoiceLink = null;
    private $receiptLink = null;
    private $attributes = null;
    private $taxExemptCertificateNumber = null;
    private $otherCommissionReceivers = null;
    private $deliveryTypeID = null;
    private $deliveryTypeName = null;
    private $deliveryDate = null;
    private $shippingDate = null;
    private $packerID = null;
    private $referenceNumber = null;
    private $customReferenceNumber = null;
    private $webShopOrderNumbers = null;
    private $pointOfSaleID = null;
    private $pointOfSaleName = null;
    private $transactionTypeID = null;
    private $transactionTypeName = null;
    private $transportTypeID = null;
    private $transportTypeName = null;
    private $deliveryTerms = null;
    private $deliveryTermsLocation = null;
    private $euInvoiceType = null;
    private $paymentStatus = null;
    private $lastModifierUsername = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveSalesDocument"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveSalesDocument"]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getCurrencyRate() != null) {
            $arr_query = array_merge($arr_query, ["currencyRate" => $this->getCurrencyRate()]);
        }
        if ($this->getWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
        }
        if ($this->getNumber() != null) {
            $arr_query = array_merge($arr_query, ["number" => $this->getNumber()]);
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
        if ($this->getClientID() != null) {
            $arr_query = array_merge($arr_query, ["clientID" => $this->getClientID()]);
        }
        if ($this->getAddressID() != null) {
            $arr_query = array_merge($arr_query, ["addressID" => $this->getAddressID()]);
        }
        if ($this->getContactID() != null) {
            $arr_query = array_merge($arr_query, ["contactID" => $this->getContactID()]);
        }
        if ($this->getShipToContactID() != null) {
            $arr_query = array_merge($arr_query, ["shipToContactID" => $this->getShipToContactID()]);
        }
        if ($this->getEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["employeeID" => $this->getEmployeeID()]);
        }
        if ($this->getProjectID() != null) {
            $arr_query = array_merge($arr_query, ["projectID" => $this->getProjectID()]);
        }
        if ($this->getPaymentDays() != null) {
            $arr_query = array_merge($arr_query, ["paymentDays" => $this->getPaymentDays()]);
        }
        if ($this->getConfirmed() != null) {
            $arr_query = array_merge($arr_query, ["confirmed" => $this->getConfirmed()]);
        }
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getInternalNotes() != null) {
            $arr_query = array_merge($arr_query, ["internalNotes" => $this->getInternalNotes()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getTrackingNumber() != null) {
            $arr_query = array_merge($arr_query, ["trackingNumber" => $this->getTrackingNumber()]);
        }
        if ($this->getFulfillmentStatus() != null) {
            $arr_query = array_merge($arr_query, ["fulfillmentStatus" => $this->getFulfillmentStatus()]);
        }
        if ($this->getPrintDiscounts() != null) {
            $arr_query = array_merge($arr_query, ["printDiscounts" => $this->getPrintDiscounts()]);
        }
        if ($this->getReserveGoods() != null) {
            $arr_query = array_merge($arr_query, ["reserveGoods" => $this->getReserveGoods()]);
        }
        if ($this->getReserveGoodsUntilDate() != null) {
            $arr_query = array_merge($arr_query, ["reserveGoodsUntilDate" => $this->getReserveGoodsUntilDate()]);
        }
        if ($this->getPackingUnitsDescription() != null) {
            $arr_query = array_merge($arr_query, ["packingUnitsDescription" => $this->getPackingUnitsDescription()]);
        }
        if ($this->getPenalty() != null) {
            $arr_query = array_merge($arr_query, ["penalty" => $this->getPenalty()]);
        }
        if ($this->getTriangularTransaction() != null) {
            $arr_query = array_merge($arr_query, ["triangularTransaction" => $this->getTriangularTransaction()]);
        }
        if ($this->getPurchaseOrderDone() != null) {
            $arr_query = array_merge($arr_query, ["purchaseOrderDone" => $this->getPurchaseOrderDone()]);
        }
        if ($this->getPricelistID() != null) {
            $arr_query = array_merge($arr_query, ["pricelistID" => $this->getPricelistID()]);
        }
        if ($this->getCurrencyCode() != null) {
            $arr_query = array_merge($arr_query, ["currencyCode" => $this->getCurrencyCode()]);
        }
        if ($this->getWarehouseName() != null) {
            $arr_query = array_merge($arr_query, ["warehouseName" => $this->getWarehouseName()]);
        }
        if ($this->getClientName() != null) {
            $arr_query = array_merge($arr_query, ["clientName" => $this->getClientName()]);
        }
        if ($this->getClientEmail() != null) {
            $arr_query = array_merge($arr_query, ["clientEmail" => $this->getClientEmail()]);
        }
        if ($this->getClientCardNumber() != null) {
            $arr_query = array_merge($arr_query, ["clientCardNumber" => $this->getClientCardNumber()]);
        }
        if ($this->getClientFactoringContractNumber() != null) {
            $arr_query = array_merge($arr_query, ["clientFactoringContractNumber" => $this->getClientFactoringContractNumber()]);
        }
        if ($this->getClientPaysViaFactoring() != null) {
            $arr_query = array_merge($arr_query, ["clientPaysViaFactoring" => $this->getClientPaysViaFactoring()]);
        }
        if ($this->getShipToID() != null) {
            $arr_query = array_merge($arr_query, ["shipToID" => $this->getShipToID()]);
        }
        if ($this->getShipToName() != null) {
            $arr_query = array_merge($arr_query, ["shipToName" => $this->getShipToName()]);
        }
        if ($this->getShipToContactName() != null) {
            $arr_query = array_merge($arr_query, ["shipToContactName" => $this->getShipToContactName()]);
        }
        if ($this->getContactName() != null) {
            $arr_query = array_merge($arr_query, ["contactName" => $this->getContactName()]);
        }
        if ($this->getEmployeeName() != null) {
            $arr_query = array_merge($arr_query, ["employeeName" => $this->getEmployeeName()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getInvoiceState() != null) {
            $arr_query = array_merge($arr_query, ["invoiceState" => $this->getInvoiceState()]);
        }
        if ($this->getPaymentType() != null) {
            $arr_query = array_merge($arr_query, ["paymentType" => $this->getPaymentType()]);
        }
        if ($this->getPaymentTypeID() != null) {
            $arr_query = array_merge($arr_query, ["paymentTypeID" => $this->getPaymentTypeID()]);
        }
        if ($this->getBaseDocuments() != null) {
            $arr_query = array_merge($arr_query, ["baseDocuments" => $this->getBaseDocuments()]);
        }
        if ($this->getFollowUpDocuments() != null) {
            $arr_query = array_merge($arr_query, ["followUpDocuments" => $this->getFollowUpDocuments()]);
        }
        if ($this->getShipToAddressID() != null) {
            $arr_query = array_merge($arr_query, ["shipToAddressID" => $this->getShipToAddressID()]);
        }
        if ($this->getShipToAddress() != null) {
            $arr_query = array_merge($arr_query, ["shipToAddress" => $this->getShipToAddress()]);
        }
        if ($this->getNetTotal() != null) {
            $arr_query = array_merge($arr_query, ["netTotal" => $this->getNetTotal()]);
        }
        if ($this->getVatTotal() != null) {
            $arr_query = array_merge($arr_query, ["vatTotal" => $this->getVatTotal()]);
        }
        if ($this->getNetTotalsByRate() != null) {
            $arr_query = array_merge($arr_query, ["netTotalsByRate" => $this->getNetTotalsByRate()]);
        }
        if ($this->getVatTotalsByRate() != null) {
            $arr_query = array_merge($arr_query, ["vatTotalsByRate" => $this->getVatTotalsByRate()]);
        }
        if ($this->getNetTotalsByTaxRate() != null) {
            $arr_query = array_merge($arr_query, ["netTotalsByTaxRate" => $this->getNetTotalsByTaxRate()]);
        }
        if ($this->getVatTotalsByTaxRate() != null) {
            $arr_query = array_merge($arr_query, ["vatTotalsByTaxRate" => $this->getVatTotalsByTaxRate()]);
        }
        if ($this->getRounding() != null) {
            $arr_query = array_merge($arr_query, ["rounding" => $this->getRounding()]);
        }
        if ($this->getTotal() != null) {
            $arr_query = array_merge($arr_query, ["total" => $this->getTotal()]);
        }
        if ($this->getPaid() != null) {
            $arr_query = array_merge($arr_query, ["paid" => $this->getPaid()]);
        }
        if ($this->getInvoiceLink() != null) {
            $arr_query = array_merge($arr_query, ["invoiceLink" => $this->getInvoiceLink()]);
        }
        if ($this->getReceiptLink() != null) {
            $arr_query = array_merge($arr_query, ["receiptLink" => $this->getReceiptLink()]);
        }
        if ($this->getAttributes() != null) {
            $arr_query = array_merge($arr_query, ["attributes" => $this->getAttributes()]);
        }
        if ($this->getTaxExemptCertificateNumber() != null) {
            $arr_query = array_merge($arr_query, ["taxExemptCertificateNumber" => $this->getTaxExemptCertificateNumber()]);
        }
        if ($this->getOtherCommissionReceivers() != null) {
            $arr_query = array_merge($arr_query, ["otherCommissionReceivers" => $this->getOtherCommissionReceivers()]);
        }
        if ($this->getDeliveryTypeID() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTypeID" => $this->getDeliveryTypeID()]);
        }
        if ($this->getDeliveryTypeName() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTypeName" => $this->getDeliveryTypeName()]);
        }
        if ($this->getDeliveryDate() != null) {
            $arr_query = array_merge($arr_query, ["deliveryDate" => $this->getDeliveryDate()]);
        }
        if ($this->getShippingDate() != null) {
            $arr_query = array_merge($arr_query, ["shippingDate" => $this->getShippingDate()]);
        }
        if ($this->getPackerID() != null) {
            $arr_query = array_merge($arr_query, ["packerID" => $this->getPackerID()]);
        }
        if ($this->getReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["referenceNumber" => $this->getReferenceNumber()]);
        }
        if ($this->getCustomReferenceNumber() != null) {
            $arr_query = array_merge($arr_query, ["customReferenceNumber" => $this->getCustomReferenceNumber()]);
        }
        if ($this->getWebShopOrderNumbers() != null) {
            $arr_query = array_merge($arr_query, ["webShopOrderNumbers" => $this->getWebShopOrderNumbers()]);
        }
        if ($this->getPointOfSaleID() != null) {
            $arr_query = array_merge($arr_query, ["pointOfSaleID" => $this->getPointOfSaleID()]);
        }
        if ($this->getPointOfSaleName() != null) {
            $arr_query = array_merge($arr_query, ["pointOfSaleName" => $this->getPointOfSaleName()]);
        }
        if ($this->getTransactionTypeID() != null) {
            $arr_query = array_merge($arr_query, ["transactionTypeID" => $this->getTransactionTypeID()]);
        }
        if ($this->getTransactionTypeName() != null) {
            $arr_query = array_merge($arr_query, ["transactionTypeName" => $this->getTransactionTypeName()]);
        }
        if ($this->getTransportTypeID() != null) {
            $arr_query = array_merge($arr_query, ["transportTypeID" => $this->getTransportTypeID()]);
        }
        if ($this->getTransportTypeName() != null) {
            $arr_query = array_merge($arr_query, ["transportTypeName" => $this->getTransportTypeName()]);
        }
        if ($this->getDeliveryTerms() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTerms" => $this->getDeliveryTerms()]);
        }
        if ($this->getDeliveryTermsLocation() != null) {
            $arr_query = array_merge($arr_query, ["deliveryTermsLocation" => $this->getDeliveryTermsLocation()]);
        }
        if ($this->getEuInvoiceType() != null) {
            $arr_query = array_merge($arr_query, ["euInvoiceType" => $this->getEuInvoiceType()]);
        }
        if ($this->getPaymentStatus() != null) {
            $arr_query = array_merge($arr_query, ["paymentStatus" => $this->getPaymentStatus()]);
        }
        if ($this->getLastModifierUsername() != null) {
            $arr_query = array_merge($arr_query, ["lastModifierUsername" => $this->getLastModifierUsername()]);
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
            if (property_exists($record, "currencyRate")) {
                $this->currencyRate = $record->currencyRate;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "number")) {
                $this->number = $record->number;
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
            if (property_exists($record, "clientID")) {
                $this->clientID = $record->clientID;
            }
            if (property_exists($record, "addressID")) {
                $this->addressID = $record->addressID;
            }
            if (property_exists($record, "contactID")) {
                $this->contactID = $record->contactID;
            }
            if (property_exists($record, "shipToContactID")) {
                $this->shipToContactID = $record->shipToContactID;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "projectID")) {
                $this->projectID = $record->projectID;
            }
            if (property_exists($record, "paymentDays")) {
                $this->paymentDays = $record->paymentDays;
            }
            if (property_exists($record, "confirmed")) {
                $this->confirmed = $record->confirmed;
            }
            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }
            if (property_exists($record, "internalNotes")) {
                $this->internalNotes = $record->internalNotes;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "trackingNumber")) {
                $this->trackingNumber = $record->trackingNumber;
            }
            if (property_exists($record, "fulfillmentStatus")) {
                $this->fulfillmentStatus = $record->fulfillmentStatus;
            }
            if (property_exists($record, "printDiscounts")) {
                $this->printDiscounts = $record->printDiscounts;
            }
            if (property_exists($record, "reserveGoods")) {
                $this->reserveGoods = $record->reserveGoods;
            }
            if (property_exists($record, "reserveGoodsUntilDate")) {
                $this->reserveGoodsUntilDate = $record->reserveGoodsUntilDate;
            }
            if (property_exists($record, "packingUnitsDescription")) {
                $this->packingUnitsDescription = $record->packingUnitsDescription;
            }
            if (property_exists($record, "penalty")) {
                $this->penalty = $record->penalty;
            }
            if (property_exists($record, "triangularTransaction")) {
                $this->triangularTransaction = $record->triangularTransaction;
            }
            if (property_exists($record, "purchaseOrderDone")) {
                $this->purchaseOrderDone = $record->purchaseOrderDone;
            }
            if (property_exists($record, "pricelistID")) {
                $this->pricelistID = $record->pricelistID;
            }
            if (property_exists($record, "currencyCode")) {
                $this->currencyCode = $record->currencyCode;
            }
            if (property_exists($record, "warehouseName")) {
                $this->warehouseName = $record->warehouseName;
            }
            if (property_exists($record, "clientName")) {
                $this->clientName = $record->clientName;
            }
            if (property_exists($record, "clientEmail")) {
                $this->clientEmail = $record->clientEmail;
            }
            if (property_exists($record, "clientCardNumber")) {
                $this->clientCardNumber = $record->clientCardNumber;
            }
            if (property_exists($record, "clientFactoringContractNumber")) {
                $this->clientFactoringContractNumber = $record->clientFactoringContractNumber;
            }
            if (property_exists($record, "clientPaysViaFactoring")) {
                $this->clientPaysViaFactoring = $record->clientPaysViaFactoring;
            }
            if (property_exists($record, "shipToID")) {
                $this->shipToID = $record->shipToID;
            }
            if (property_exists($record, "shipToName")) {
                $this->shipToName = $record->shipToName;
            }
            if (property_exists($record, "shipToContactName")) {
                $this->shipToContactName = $record->shipToContactName;
            }
            if (property_exists($record, "contactName")) {
                $this->contactName = $record->contactName;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "invoiceState")) {
                $this->invoiceState = $record->invoiceState;
            }
            if (property_exists($record, "paymentType")) {
                $this->paymentType = $record->paymentType;
            }
            if (property_exists($record, "paymentTypeID")) {
                $this->paymentTypeID = $record->paymentTypeID;
            }
            if (property_exists($record, "baseDocuments")) {
                $this->baseDocuments = $record->baseDocuments;
            }
            if (property_exists($record, "followUpDocuments")) {
                $this->followUpDocuments = $record->followUpDocuments;
            }
            if (property_exists($record, "shipToAddressID")) {
                $this->shipToAddressID = $record->shipToAddressID;
            }
            if (property_exists($record, "shipToAddress")) {
                $this->shipToAddress = $record->shipToAddress;
            }
            if (property_exists($record, "netTotal")) {
                $this->netTotal = $record->netTotal;
            }
            if (property_exists($record, "vatTotal")) {
                $this->vatTotal = $record->vatTotal;
            }
            if (property_exists($record, "netTotalsByRate")) {
                $this->netTotalsByRate = $record->netTotalsByRate;
            }
            if (property_exists($record, "vatTotalsByRate")) {
                $this->vatTotalsByRate = $record->vatTotalsByRate;
            }
            if (property_exists($record, "netTotalsByTaxRate")) {
                $this->netTotalsByTaxRate = $record->netTotalsByTaxRate;
            }
            if (property_exists($record, "vatTotalsByTaxRate")) {
                $this->vatTotalsByTaxRate = $record->vatTotalsByTaxRate;
            }
            if (property_exists($record, "rounding")) {
                $this->rounding = $record->rounding;
            }
            if (property_exists($record, "total")) {
                $this->total = $record->total;
            }
            if (property_exists($record, "paid")) {
                $this->paid = $record->paid;
            }
            if (property_exists($record, "invoiceLink")) {
                $this->invoiceLink = $record->invoiceLink;
            }
            if (property_exists($record, "receiptLink")) {
                $this->receiptLink = $record->receiptLink;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
            }
            if (property_exists($record, "taxExemptCertificateNumber")) {
                $this->taxExemptCertificateNumber = $record->taxExemptCertificateNumber;
            }
            if (property_exists($record, "otherCommissionReceivers")) {
                $this->otherCommissionReceivers = $record->otherCommissionReceivers;
            }
            if (property_exists($record, "deliveryTypeID")) {
                $this->deliveryTypeID = $record->deliveryTypeID;
            }
            if (property_exists($record, "deliveryTypeName")) {
                $this->deliveryTypeName = $record->deliveryTypeName;
            }
            if (property_exists($record, "deliveryDate")) {
                $this->deliveryDate = $record->deliveryDate;
            }
            if (property_exists($record, "shippingDate")) {
                $this->shippingDate = $record->shippingDate;
            }
            if (property_exists($record, "packerID")) {
                $this->packerID = $record->packerID;
            }
            if (property_exists($record, "referenceNumber")) {
                $this->referenceNumber = $record->referenceNumber;
            }
            if (property_exists($record, "customReferenceNumber")) {
                $this->customReferenceNumber = $record->customReferenceNumber;
            }
            if (property_exists($record, "webShopOrderNumbers")) {
                $this->webShopOrderNumbers = $record->webShopOrderNumbers;
            }
            if (property_exists($record, "pointOfSaleID")) {
                $this->pointOfSaleID = $record->pointOfSaleID;
            }
            if (property_exists($record, "pointOfSaleName")) {
                $this->pointOfSaleName = $record->pointOfSaleName;
            }
            if (property_exists($record, "transactionTypeID")) {
                $this->transactionTypeID = $record->transactionTypeID;
            }
            if (property_exists($record, "transactionTypeName")) {
                $this->transactionTypeName = $record->transactionTypeName;
            }
            if (property_exists($record, "transportTypeID")) {
                $this->transportTypeID = $record->transportTypeID;
            }
            if (property_exists($record, "transportTypeName")) {
                $this->transportTypeName = $record->transportTypeName;
            }
            if (property_exists($record, "deliveryTerms")) {
                $this->deliveryTerms = $record->deliveryTerms;
            }
            if (property_exists($record, "deliveryTermsLocation")) {
                $this->deliveryTermsLocation = $record->deliveryTermsLocation;
            }
            if (property_exists($record, "euInvoiceType")) {
                $this->euInvoiceType = $record->euInvoiceType;
            }
            if (property_exists($record, "paymentStatus")) {
                $this->paymentStatus = $record->paymentStatus;
            }
            if (property_exists($record, "lastModifierUsername")) {
                $this->lastModifierUsername = $record->lastModifierUsername;
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

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
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

    public function getClientID()
    {
        return $this->clientID;
    }

    public function setClientID($clientID)
    {
        $this->clientID = $clientID;
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

    public function getShipToContactID()
    {
        return $this->shipToContactID;
    }

    public function setShipToContactID($shipToContactID)
    {
        $this->shipToContactID = $shipToContactID;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getProjectID()
    {
        return $this->projectID;
    }

    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;
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

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getInternalNotes()
    {
        return $this->internalNotes;
    }

    public function setInternalNotes($internalNotes)
    {
        $this->internalNotes = $internalNotes;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    public function getFulfillmentStatus()
    {
        return $this->fulfillmentStatus;
    }

    public function setFulfillmentStatus($fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
    }

    public function getPrintDiscounts()
    {
        return $this->printDiscounts;
    }

    public function setPrintDiscounts($printDiscounts)
    {
        $this->printDiscounts = $printDiscounts;
    }

    public function getReserveGoods()
    {
        return $this->reserveGoods;
    }

    public function setReserveGoods($reserveGoods)
    {
        $this->reserveGoods = $reserveGoods;
    }

    public function getReserveGoodsUntilDate()
    {
        return $this->reserveGoodsUntilDate;
    }

    public function setReserveGoodsUntilDate($reserveGoodsUntilDate)
    {
        $this->reserveGoodsUntilDate = $reserveGoodsUntilDate;
    }

    public function getPackingUnitsDescription()
    {
        return $this->packingUnitsDescription;
    }

    public function setPackingUnitsDescription($packingUnitsDescription)
    {
        $this->packingUnitsDescription = $packingUnitsDescription;
    }

    public function getPenalty()
    {
        return $this->penalty;
    }

    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;
    }

    public function getTriangularTransaction()
    {
        return $this->triangularTransaction;
    }

    public function setTriangularTransaction($triangularTransaction)
    {
        $this->triangularTransaction = $triangularTransaction;
    }

    public function getPurchaseOrderDone()
    {
        return $this->purchaseOrderDone;
    }

    public function setPurchaseOrderDone($purchaseOrderDone)
    {
        $this->purchaseOrderDone = $purchaseOrderDone;
    }

    public function getPricelistID()
    {
        return $this->pricelistID;
    }

    public function setPricelistID($pricelistID)
    {
        $this->pricelistID = $pricelistID;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName = $warehouseName;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }

    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;
    }

    public function getClientCardNumber()
    {
        return $this->clientCardNumber;
    }

    public function setClientCardNumber($clientCardNumber)
    {
        $this->clientCardNumber = $clientCardNumber;
    }

    public function getClientFactoringContractNumber()
    {
        return $this->clientFactoringContractNumber;
    }

    public function setClientFactoringContractNumber($clientFactoringContractNumber)
    {
        $this->clientFactoringContractNumber = $clientFactoringContractNumber;
    }

    public function getClientPaysViaFactoring()
    {
        return $this->clientPaysViaFactoring;
    }

    public function setClientPaysViaFactoring($clientPaysViaFactoring)
    {
        $this->clientPaysViaFactoring = $clientPaysViaFactoring;
    }

    public function getShipToID()
    {
        return $this->shipToID;
    }

    public function setShipToID($shipToID)
    {
        $this->shipToID = $shipToID;
    }

    public function getShipToName()
    {
        return $this->shipToName;
    }

    public function setShipToName($shipToName)
    {
        $this->shipToName = $shipToName;
    }

    public function getShipToContactName()
    {
        return $this->shipToContactName;
    }

    public function setShipToContactName($shipToContactName)
    {
        $this->shipToContactName = $shipToContactName;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getInvoiceState()
    {
        return $this->invoiceState;
    }

    public function setInvoiceState($invoiceState)
    {
        $this->invoiceState = $invoiceState;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    public function getPaymentTypeID()
    {
        return $this->paymentTypeID;
    }

    public function setPaymentTypeID($paymentTypeID)
    {
        $this->paymentTypeID = $paymentTypeID;
    }

    public function getBaseDocuments()
    {
        return $this->baseDocuments;
    }

    public function setBaseDocuments($baseDocuments)
    {
        $this->baseDocuments = $baseDocuments;
    }

    public function getFollowUpDocuments()
    {
        return $this->followUpDocuments;
    }

    public function setFollowUpDocuments($followUpDocuments)
    {
        $this->followUpDocuments = $followUpDocuments;
    }

    public function getShipToAddressID()
    {
        return $this->shipToAddressID;
    }

    public function setShipToAddressID($shipToAddressID)
    {
        $this->shipToAddressID = $shipToAddressID;
    }

    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
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

    public function getNetTotalsByRate()
    {
        return $this->netTotalsByRate;
    }

    public function setNetTotalsByRate($netTotalsByRate)
    {
        $this->netTotalsByRate = $netTotalsByRate;
    }

    public function getVatTotalsByRate()
    {
        return $this->vatTotalsByRate;
    }

    public function setVatTotalsByRate($vatTotalsByRate)
    {
        $this->vatTotalsByRate = $vatTotalsByRate;
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

    public function getRounding()
    {
        return $this->rounding;
    }

    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    public function getInvoiceLink()
    {
        return $this->invoiceLink;
    }

    public function setInvoiceLink($invoiceLink)
    {
        $this->invoiceLink = $invoiceLink;
    }

    public function getReceiptLink()
    {
        return $this->receiptLink;
    }

    public function setReceiptLink($receiptLink)
    {
        $this->receiptLink = $receiptLink;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getTaxExemptCertificateNumber()
    {
        return $this->taxExemptCertificateNumber;
    }

    public function setTaxExemptCertificateNumber($taxExemptCertificateNumber)
    {
        $this->taxExemptCertificateNumber = $taxExemptCertificateNumber;
    }

    public function getOtherCommissionReceivers()
    {
        return $this->otherCommissionReceivers;
    }

    public function setOtherCommissionReceivers($otherCommissionReceivers)
    {
        $this->otherCommissionReceivers = $otherCommissionReceivers;
    }

    public function getDeliveryTypeID()
    {
        return $this->deliveryTypeID;
    }

    public function setDeliveryTypeID($deliveryTypeID)
    {
        $this->deliveryTypeID = $deliveryTypeID;
    }

    public function getDeliveryTypeName()
    {
        return $this->deliveryTypeName;
    }

    public function setDeliveryTypeName($deliveryTypeName)
    {
        $this->deliveryTypeName = $deliveryTypeName;
    }

    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
    }

    public function getPackerID()
    {
        return $this->packerID;
    }

    public function setPackerID($packerID)
    {
        $this->packerID = $packerID;
    }

    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getCustomReferenceNumber()
    {
        return $this->customReferenceNumber;
    }

    public function setCustomReferenceNumber($customReferenceNumber)
    {
        $this->customReferenceNumber = $customReferenceNumber;
    }

    public function getWebShopOrderNumbers()
    {
        return $this->webShopOrderNumbers;
    }

    public function setWebShopOrderNumbers($webShopOrderNumbers)
    {
        $this->webShopOrderNumbers = $webShopOrderNumbers;
    }

    public function getPointOfSaleID()
    {
        return $this->pointOfSaleID;
    }

    public function setPointOfSaleID($pointOfSaleID)
    {
        $this->pointOfSaleID = $pointOfSaleID;
    }

    public function getPointOfSaleName()
    {
        return $this->pointOfSaleName;
    }

    public function setPointOfSaleName($pointOfSaleName)
    {
        $this->pointOfSaleName = $pointOfSaleName;
    }

    public function getTransactionTypeID()
    {
        return $this->transactionTypeID;
    }

    public function setTransactionTypeID($transactionTypeID)
    {
        $this->transactionTypeID = $transactionTypeID;
    }

    public function getTransactionTypeName()
    {
        return $this->transactionTypeName;
    }

    public function setTransactionTypeName($transactionTypeName)
    {
        $this->transactionTypeName = $transactionTypeName;
    }

    public function getTransportTypeID()
    {
        return $this->transportTypeID;
    }

    public function setTransportTypeID($transportTypeID)
    {
        $this->transportTypeID = $transportTypeID;
    }

    public function getTransportTypeName()
    {
        return $this->transportTypeName;
    }

    public function setTransportTypeName($transportTypeName)
    {
        $this->transportTypeName = $transportTypeName;
    }

    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    public function setDeliveryTerms($deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
    }

    public function getDeliveryTermsLocation()
    {
        return $this->deliveryTermsLocation;
    }

    public function setDeliveryTermsLocation($deliveryTermsLocation)
    {
        $this->deliveryTermsLocation = $deliveryTermsLocation;
    }

    public function getEuInvoiceType()
    {
        return $this->euInvoiceType;
    }

    public function setEuInvoiceType($euInvoiceType)
    {
        $this->euInvoiceType = $euInvoiceType;
    }

    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function getLastModifierUsername()
    {
        return $this->lastModifierUsername;
    }

    public function setLastModifierUsername($lastModifierUsername)
    {
        $this->lastModifierUsername = $lastModifierUsername;
    }
}
