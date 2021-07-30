<?php


namespace Webtize\ErplySDK;


class RewardPoint
{

    private $transactionID;
    private $customerID;
    private $customerCardNumber;
    private $invoiceID;
    private $invoiceNo;
    private $earnedPoints;
    private $remainingPoints;
    private $createdUnixTime;
    private $expiryUnixTime;
    private $pointOfSaleID;
    private $pointOfSaleName;
    private $employeeID;
    private $employeeName;
    private $description;

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
     * @return mixed
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @return mixed
     */
    public function getCustomerCardNumber()
    {
        return $this->customerCardNumber;
    }

    /**
     * @return mixed
     */
    public function getInvoiceID()
    {
        return $this->invoiceID;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @return mixed
     */
    public function getEarnedPoints()
    {
        return $this->earnedPoints;
    }

    /**
     * @return mixed
     */
    public function getRemainingPoints()
    {
        return $this->remainingPoints;
    }

    /**
     * @return mixed
     */
    public function getCreatedUnixTime()
    {
        return $this->createdUnixTime;
    }

    /**
     * @return mixed
     */
    public function getExpiryUnixTime()
    {
        return $this->expiryUnixTime;
    }

    /**
     * @return mixed
     */
    public function getPointOfSaleID()
    {
        return $this->pointOfSaleID;
    }

    /**
     * @return mixed
     */
    public function getPointOfSaleName()
    {
        return $this->pointOfSaleName;
    }

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @return mixed
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


}