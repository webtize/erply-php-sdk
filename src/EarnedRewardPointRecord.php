<?php

namespace Webtize\ErplySDK;

class EarnedRewardPointRecord
{

    public $transactionID = null;
    public $customerID = null;
    public $customerCardNumber = null;
    public $invoiceID = null;
    public $invoiceNo = null;
    public $earnedPoints = null;
    public $remainingPoints = null;
    public $createdUnixTime = null;
    public $expiryUnixTime = null;
    public $pointOfSaleID = null;
    public $pointOfSaleName = null;
    public $employeeID = null;
    public $employeeName = null;
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
            if (property_exists($record, "earnedPoints")) {
                $this->earnedPoints = $record->earnedPoints;
            }
            if (property_exists($record, "remainingPoints")) {
                $this->remainingPoints = $record->remainingPoints;
            }
            if (property_exists($record, "createdUnixTime")) {
                $this->createdUnixTime = $record->createdUnixTime;
            }
            if (property_exists($record, "expiryUnixTime")) {
                $this->expiryUnixTime = $record->expiryUnixTime;
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
    public function getEarnedPoints()
    {
        return $this->earnedPoints;
    }

    /**
     * @return null
     */
    public function getRemainingPoints()
    {
        return $this->remainingPoints;
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
    public function getExpiryUnixTime()
    {
        return $this->expiryUnixTime;
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
    public function getDescription()
    {
        return $this->description;
    }


}