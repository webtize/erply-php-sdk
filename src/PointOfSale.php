<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class PointOfSale
{
    private $pointOfSaleID = null;
    private $type = null;
    private $name = null;
    private $warehouseID = null;
    private $warehouseName = null;
    private $address = null;
    private $phone = null;
    private $storeHours = null;
    private $geoLatitude = null;
    private $geoLongitude = null;
    private $paymentServiceProvider = null;
    private $receiptWidth = null;
    private $vatrateID = null;
    private $vatrate = null;
    private $printSalesPersonName = null;
    private $shopName = null;
    private $defaultCustomerID = null;
    private $added = null;
    private $lastModified = null;
    private $lastInvoiceNo = null;
    private $lastCouponNo = null;
    private $attributes = null;
    private $storeCreditEnabled = null;
    private $vatSumRange1 = null;
    private $vatrateIDrange1 = null;
    private $vatSumRange2 = null;
    private $vatrateIDrange2 = null;
    private $quickButtons = null;

    public function __construct($record = null)
    {
        if($record==null){
            $record = (object)[];
        }
        if (property_exists($record, "pointOfSaleID")) {
            $this->pointOfSaleID = $record->pointOfSaleID;
        }
        if (property_exists($record, "type")) {
            $this->type = $record->type;
        }
        if (property_exists($record, "name")) {
            $this->name = $record->name;
        }
        if (property_exists($record, "warehouseID")) {
            $this->warehouseID = $record->warehouseID;
        }
        if (property_exists($record, "warehouseName")) {
            $this->warehouseName = $record->warehouseName;
        }
        if (property_exists($record, "address")) {
            $this->address = $record->address;
        }
        if (property_exists($record, "phone")) {
            $this->phone = $record->phone;
        }
        if (property_exists($record, "storeHours")) {
            $this->storeHours = $record->storeHours;
        }
        if (property_exists($record, "geoLatitude")) {
            $this->geoLatitude = $record->geoLatitude;
        }
        if (property_exists($record, "geoLongitude")) {
            $this->geoLongitude = $record->geoLongitude;
        }
        if (property_exists($record, "paymentServiceProvider")) {
            $this->paymentServiceProvider = $record->paymentServiceProvider;
        }
        if (property_exists($record, "receiptWidth")) {
            $this->receiptWidth = $record->receiptWidth;
        }
        if (property_exists($record, "vatrateID")) {
            $this->vatrateID = $record->vatrateID;
        }
        if (property_exists($record, "vatrate")) {
            $this->vatrate = $record->vatrate;
        }
        if (property_exists($record, "printSalesPersonName")) {
            $this->printSalesPersonName = $record->printSalesPersonName;
        }
        if (property_exists($record, "shopName")) {
            $this->shopName = $record->shopName;
        }
        if (property_exists($record, "defaultCustomerID")) {
            $this->defaultCustomerID = $record->defaultCustomerID;
        }
        if (property_exists($record, "added")) {
            $this->added = $record->added;
        }
        if (property_exists($record, "lastModified")) {
            $this->lastModified = $record->lastModified;
        }
        if (property_exists($record, "lastInvoiceNo")) {
            $this->lastInvoiceNo = $record->lastInvoiceNo;
        }
        if (property_exists($record, "lastCouponNo")) {
            $this->lastCouponNo = $record->lastCouponNo;
        }
        if (property_exists($record, "attributes")) {
            $this->attributes = $record->attributes;
        }
        if (property_exists($record, "storeCreditEnabled")) {
            $this->storeCreditEnabled = $record->storeCreditEnabled;
        }
        if (property_exists($record, "vatSumRange1")) {
            $this->vatSumRange1 = $record->vatSumRange1;
        }
        if (property_exists($record, "vatrateIDrange1")) {
            $this->vatrateIDrange1 = $record->vatrateIDrange1;
        }
        if (property_exists($record, "vatSumRange2")) {
            $this->vatSumRange2 = $record->vatSumRange2;
        }
        if (property_exists($record, "vatrateIDrange2")) {
            $this->vatrateIDrange2 = $record->vatrateIDrange2;
        }
        if (property_exists($record, "quickButtons")) {
            $this->quickButtons = $record->quickButtons;
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
            if ($this->getPointOfSaleID() != null) {
                array_merge($arr_query, ["pointOfSaleID" => $this->getPointOfSaleID()]);
            }
            if ($this->getType() != null) {
                array_merge($arr_query, ["type" => $this->getType()]);
            }
            if ($this->getName() != null) {
                array_merge($arr_query, ["name" => $this->getName()]);
            }
            if ($this->getWarehouseID() != null) {
                array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
            }
            if ($this->getWarehouseName() != null) {
                array_merge($arr_query, ["warehouseName" => $this->getWarehouseName()]);
            }
            if ($this->getAddress() != null) {
                array_merge($arr_query, ["address" => $this->getAddress()]);
            }
            if ($this->getPhone() != null) {
                array_merge($arr_query, ["phone" => $this->getPhone()]);
            }
            if ($this->getStoreHours() != null) {
                array_merge($arr_query, ["storeHours" => $this->getStoreHours()]);
            }
            if ($this->getGeoLatitude() != null) {
                array_merge($arr_query, ["geoLatitude" => $this->getGeoLatitude()]);
            }
            if ($this->getGeoLongitude() != null) {
                array_merge($arr_query, ["geoLongitude" => $this->getGeoLongitude()]);
            }
            if ($this->getPaymentServiceProvider() != null) {
                array_merge($arr_query, ["paymentServiceProvider" => $this->getPaymentServiceProvider()]);
            }
            if ($this->getReceiptWidth() != null) {
                array_merge($arr_query, ["receiptWidth" => $this->getReceiptWidth()]);
            }
            if ($this->getVatrateID() != null) {
                array_merge($arr_query, ["vatrateID" => $this->getVatrateID()]);
            }
            if ($this->getVatrate() != null) {
                array_merge($arr_query, ["vatrate" => $this->getVatrate()]);
            }
            if ($this->getPrintSalesPersonName() != null) {
                array_merge($arr_query, ["printSalesPersonName" => $this->getPrintSalesPersonName()]);
            }
            if ($this->getShopName() != null) {
                array_merge($arr_query, ["shopName" => $this->getShopName()]);
            }
            if ($this->getDefaultCustomerID() != null) {
                array_merge($arr_query, ["defaultCustomerID" => $this->getDefaultCustomerID()]);
            }
            if ($this->getAdded() != null) {
                array_merge($arr_query, ["added" => $this->getAdded()]);
            }
            if ($this->getLastModified() != null) {
                array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
            }
            if ($this->getLastInvoiceNo() != null) {
                array_merge($arr_query, ["lastInvoiceNo" => $this->getLastInvoiceNo()]);
            }
            if ($this->getLastCouponNo() != null) {
                array_merge($arr_query, ["lastCouponNo" => $this->getLastCouponNo()]);
            }
            if ($this->getAttributes() != null) {
                array_merge($arr_query, ["attributes" => $this->getAttributes()]);
            }
            if ($this->getStoreCreditEnabled() != null) {
                array_merge($arr_query, ["storeCreditEnabled" => $this->getStoreCreditEnabled()]);
            }
            if ($this->getVatSumRange1() != null) {
                array_merge($arr_query, ["vatSumRange1" => $this->getVatSumRange1()]);
            }
            if ($this->getVatrateIDrange1() != null) {
                array_merge($arr_query, ["vatrateIDrange1" => $this->getVatrateIDrange1()]);
            }
            if ($this->getVatSumRange2() != null) {
                array_merge($arr_query, ["vatSumRange2" => $this->getVatSumRange2()]);
            }
            if ($this->getVatrateIDrange2() != null) {
                array_merge($arr_query, ["vatrateIDrange2" => $this->getVatrateIDrange2()]);
            }
            if ($this->getQuickButtons() != null) {
                array_merge($arr_query, ["quickButtons" => $this->getQuickButtons()]);
            }
            return $arr_query;
        }
    */
    public function getPointOfSaleID()
    {
        return $this->pointOfSaleID;
    }

    public function setPointOfSaleID($pointOfSaleID)
    {
        $this->pointOfSaleID = $pointOfSaleID;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getStoreHours()
    {
        return $this->storeHours;
    }

    public function setStoreHours($storeHours)
    {
        $this->storeHours = $storeHours;
    }

    public function getGeoLatitude()
    {
        return $this->geoLatitude;
    }

    public function setGeoLatitude($geoLatitude)
    {
        $this->geoLatitude = $geoLatitude;
    }

    public function getGeoLongitude()
    {
        return $this->geoLongitude;
    }

    public function setGeoLongitude($geoLongitude)
    {
        $this->geoLongitude = $geoLongitude;
    }

    public function getPaymentServiceProvider()
    {
        return $this->paymentServiceProvider;
    }

    public function setPaymentServiceProvider($paymentServiceProvider)
    {
        $this->paymentServiceProvider = $paymentServiceProvider;
    }

    public function getReceiptWidth()
    {
        return $this->receiptWidth;
    }

    public function setReceiptWidth($receiptWidth)
    {
        $this->receiptWidth = $receiptWidth;
    }

    public function getVatrateID()
    {
        return $this->vatrateID;
    }

    public function setVatrateID($vatrateID)
    {
        $this->vatrateID = $vatrateID;
    }

    public function getVatrate()
    {
        return $this->vatrate;
    }

    public function setVatrate($vatrate)
    {
        $this->vatrate = $vatrate;
    }

    public function getPrintSalesPersonName()
    {
        return $this->printSalesPersonName;
    }

    public function setPrintSalesPersonName($printSalesPersonName)
    {
        $this->printSalesPersonName = $printSalesPersonName;
    }

    public function getShopName()
    {
        return $this->shopName;
    }

    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
    }

    public function getDefaultCustomerID()
    {
        return $this->defaultCustomerID;
    }

    public function setDefaultCustomerID($defaultCustomerID)
    {
        $this->defaultCustomerID = $defaultCustomerID;
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

    public function getLastInvoiceNo()
    {
        return $this->lastInvoiceNo;
    }

    public function setLastInvoiceNo($lastInvoiceNo)
    {
        $this->lastInvoiceNo = $lastInvoiceNo;
    }

    public function getLastCouponNo()
    {
        return $this->lastCouponNo;
    }

    public function setLastCouponNo($lastCouponNo)
    {
        $this->lastCouponNo = $lastCouponNo;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getStoreCreditEnabled()
    {
        return $this->storeCreditEnabled;
    }

    public function setStoreCreditEnabled($storeCreditEnabled)
    {
        $this->storeCreditEnabled = $storeCreditEnabled;
    }

    public function getVatSumRange1()
    {
        return $this->vatSumRange1;
    }

    public function setVatSumRange1($vatSumRange1)
    {
        $this->vatSumRange1 = $vatSumRange1;
    }

    public function getVatrateIDrange1()
    {
        return $this->vatrateIDrange1;
    }

    public function setVatrateIDrange1($vatrateIDrange1)
    {
        $this->vatrateIDrange1 = $vatrateIDrange1;
    }

    public function getVatSumRange2()
    {
        return $this->vatSumRange2;
    }

    public function setVatSumRange2($vatSumRange2)
    {
        $this->vatSumRange2 = $vatSumRange2;
    }

    public function getVatrateIDrange2()
    {
        return $this->vatrateIDrange2;
    }

    public function setVatrateIDrange2($vatrateIDrange2)
    {
        $this->vatrateIDrange2 = $vatrateIDrange2;
    }

    public function getQuickButtons()
    {
        return $this->quickButtons;
    }

    public function setQuickButtons($quickButtons)
    {
        $this->quickButtons = $quickButtons;
    }
}
