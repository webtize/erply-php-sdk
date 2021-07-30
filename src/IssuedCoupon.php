<?php


namespace Webtize\ErplySDK;


class IssuedCoupon
{

    private $issuedCouponID;
    private $couponID;
    private $couponCode;
    private $campaignName;
    private $uniqueIdentifier;
    private $issuedTimestamp;
    private $expiryDate;
    private $issuedInvoiceID;
    private $issuedInvoiceNo;
    private $issuedCustomerID;
    private $issuedCustomerCardNumber;
    private $issuedWarehouseID;
    private $issuedWarehouseCode;
    private $issuedPointOfSaleID;
    private $issuedEmployeeID;
    private $isPrintedAutomatically;
    private $redeemedTimestamp;
    private $redeemedInvoiceID;
    private $redeemedInvoiceNo;
    private $redeemedCustomerID;
    private $redeemedCustomerCardNumber;
    private $redeemedWarehouseID;
    private $redeemedWarehouseCode;
    private $redeemedPointOfSaleID;
    private $redeemedEmployeeID;
    private $status;
    private $added;
    private $lastModified;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "issuedCouponID")) {
                $this->issuedCouponID = $record->issuedCouponID;
            }
            if (property_exists($record, "couponID")) {
                $this->couponID = $record->couponID;
            }
            if (property_exists($record, "couponCode")) {
                $this->couponCode = $record->couponCode;
            }
            if (property_exists($record, "campaignName")) {
                $this->campaignName = $record->campaignName;
            }
            if (property_exists($record, "uniqueIdentifier")) {
                $this->uniqueIdentifier = $record->uniqueIdentifier;
            }
            if (property_exists($record, "issuedTimestamp")) {
                $this->issuedTimestamp = $record->issuedTimestamp;
            }
            if (property_exists($record, "expiryDate")) {
                $this->expiryDate = $record->expiryDate;
            }
            if (property_exists($record, "issuedInvoiceID")) {
                $this->issuedInvoiceID = $record->issuedInvoiceID;
            }
            if (property_exists($record, "issuedInvoiceNo")) {
                $this->issuedInvoiceNo = $record->issuedInvoiceNo;
            }
            if (property_exists($record, "issuedCustomerID")) {
                $this->issuedCustomerID = $record->issuedCustomerID;
            }
            if (property_exists($record, "issuedCustomerCardNumber")) {
                $this->issuedCustomerCardNumber = $record->issuedCustomerCardNumber;
            }
            if (property_exists($record, "issuedWarehouseID")) {
                $this->issuedWarehouseID = $record->issuedWarehouseID;
            }
            if (property_exists($record, "issuedWarehouseCode")) {
                $this->issuedWarehouseCode = $record->issuedWarehouseCode;
            }
            if (property_exists($record, "issuedPointOfSaleID")) {
                $this->issuedPointOfSaleID = $record->issuedPointOfSaleID;
            }
            if (property_exists($record, "issuedEmployeeID")) {
                $this->issuedEmployeeID = $record->issuedEmployeeID;
            }
            if (property_exists($record, "isPrintedAutomatically")) {
                $this->isPrintedAutomatically = $record->isPrintedAutomatically;
            }
            if (property_exists($record, "redeemedTimestamp")) {
                $this->redeemedTimestamp = $record->redeemedTimestamp;
            }
            if (property_exists($record, "redeemedInvoiceID")) {
                $this->redeemedInvoiceID = $record->redeemedInvoiceID;
            }
            if (property_exists($record, "redeemedInvoiceNo")) {
                $this->redeemedInvoiceNo = $record->redeemedInvoiceNo;
            }
            if (property_exists($record, "redeemedCustomerID")) {
                $this->redeemedCustomerID = $record->redeemedCustomerID;
            }
            if (property_exists($record, "redeemedCustomerCardNumber")) {
                $this->redeemedCustomerCardNumber = $record->redeemedCustomerCardNumber;
            }
            if (property_exists($record, "redeemedWarehouseID")) {
                $this->redeemedWarehouseID = $record->redeemedWarehouseID;
            }
            if (property_exists($record, "redeemedWarehouseCode")) {
                $this->redeemedWarehouseCode = $record->redeemedWarehouseCode;
            }
            if (property_exists($record, "redeemedPointOfSaleID")) {
                $this->redeemedPointOfSaleID = $record->redeemedPointOfSaleID;
            }
            if (property_exists($record, "redeemedEmployeeID")) {
                $this->redeemedEmployeeID = $record->redeemedEmployeeID;
            }
            if (property_exists($record, "status")) {
                $this->status = $record->status;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    public function getIssuedCouponID()
    {
        return $this->issuedCouponID;
    }

    public function getCouponID()
    {
        return $this->couponID;
    }

    public function getCouponCode()
    {
        return $this->couponCode;
    }

    public function getCampaignName()
    {
        return $this->campaignName;
    }

    public function getUniqueIdentifier()
    {
        return $this->uniqueIdentifier;
    }

    public function getIssuedTimestamp()
    {
        return $this->issuedTimestamp;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function getIssuedInvoiceID()
    {
        return $this->issuedInvoiceID;
    }

    public function getIssuedInvoiceNo()
    {
        return $this->issuedInvoiceNo;
    }

    public function getIssuedCustomerID()
    {
        return $this->issuedCustomerID;
    }

    public function getIssuedCustomerCardNumber()
    {
        return $this->issuedCustomerCardNumber;
    }

    public function getIssuedWarehouseID()
    {
        return $this->issuedWarehouseID;
    }

    public function getIssuedWarehouseCode()
    {
        return $this->issuedWarehouseCode;
    }

    public function getIssuedPointOfSaleID()
    {
        return $this->issuedPointOfSaleID;
    }

    public function getIssuedEmployeeID()
    {
        return $this->issuedEmployeeID;
    }

    public function getIsPrintedAutomatically()
    {
        return $this->isPrintedAutomatically;
    }

    public function getRedeemedTimestamp()
    {
        return $this->redeemedTimestamp;
    }

    public function getRedeemedInvoiceID()
    {
        return $this->redeemedInvoiceID;
    }

    public function getRedeemedInvoiceNo()
    {
        return $this->redeemedInvoiceNo;
    }

    public function getRedeemedCustomerID()
    {
        return $this->redeemedCustomerID;
    }

    public function getRedeemedCustomerCardNumber()
    {
        return $this->redeemedCustomerCardNumber;
    }

    public function getRedeemedWarehouseID()
    {
        return $this->redeemedWarehouseID;
    }

    public function getRedeemedWarehouseCode()
    {
        return $this->redeemedWarehouseCode;
    }

    public function getRedeemedPointOfSaleID()
    {
        return $this->redeemedPointOfSaleID;
    }

    public function getRedeemedEmployeeID()
    {
        return $this->redeemedEmployeeID;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getAdded()
    {
        return $this->added;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }


}