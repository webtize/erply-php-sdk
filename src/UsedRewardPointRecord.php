<?php

namespace Webtize\ErplySDK;

class UsedRewardPointRecord
{

    public $transactionID = null;
    public $customerID = null;
    public $customerCardNumber = null;
    public $invoiceID = null;
    public $invoiceNo = null;
    public $campaignID = null;
    public $warehouseID = null;
    public $pointOfSaleID = null;
    public $pointOfSaleName = null;
    public $employeeID = null;
    public $employeeName = null;
    public $usedPoints = null;
    public $createdUnixTime = null;
    public $issuedCouponID = null;
    public $description = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "transactionID")) {
                $this->transactionID = $record->transactionID;
            }
            if (property_exists($record, "customerID")) {
                $this->customerID = $record->customerID;
            }
            if (property_exists($record, "customerCardNumber")) {
                $this->customerCardNumber = $record->customerCardNumber;
            }
            if (property_exists($record, "invoiceID")) {
                $this->invoiceID = $record->invoiceID;
            }
            if (property_exists($record, "invoiceNo")) {
                $this->invoiceNo = $record->invoiceNo;
            }
            if (property_exists($record, "campaignID")) {
                $this->campaignID = $record->campaignID;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "pointOfSaleID")) {
                $this->pointOfSaleID = $record->pointOfSaleID;
            }
            if (property_exists($record, "pointOfSaleName")) {
                $this->pointOfSaleName = $record->pointOfSaleName;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "usedPoints")) {
                $this->usedPoints = $record->usedPoints;
            }
            if (property_exists($record, "createdUnixTime")) {
                $this->createdUnixTime = $record->createdUnixTime;
            }
            if (property_exists($record, "issuedCouponID")) {
                $this->issuedCouponID = $record->issuedCouponID;
            }
            if (property_exists($record, "description")) {
                $this->description = $record->description;
            }
        }
    }


    /**
     * @return null
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return null
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @return null
     */
    public function getCustomerCardNumber()
    {
        return $this->customerCardNumber;
    }

    /**
     * @return null
     */
    public function getInvoiceID()
    {
        return $this->invoiceID;
    }

    /**
     * @return null
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @return null
     */
    public function getCampaignID()
    {
        return $this->campaignID;
    }

    /**
     * @return null
     */
    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    /**
     * @return null
     */
    public function getPointOfSaleID()
    {
        return $this->pointOfSaleID;
    }

    /**
     * @return null
     */
    public function getPointOfSaleName()
    {
        return $this->pointOfSaleName;
    }

    /**
     * @return null
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @return null
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * @return null
     */
    public function getUsedPoints()
    {
        return $this->usedPoints;
    }

    /**
     * @return null
     */
    public function getCreatedUnixTime()
    {
        return $this->createdUnixTime;
    }

    /**
     * @return null
     */
    public function getIssuedCouponID()
    {
        return $this->issuedCouponID;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
    }


}