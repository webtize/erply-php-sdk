<?php

namespace Webtize\ErplySDK;

class CashIn
{

    private $transactionID;
    private $sum;
    private $currencyCode;
    private $currencyRate;
    private $warehouseID;
    private $warehouseName;
    private $pointOfSaleID;
    private $pointOfSaleName;
    private $employeeID;
    private $employeeName;
    private $dateTime;
    private $reasonID;
    private $comment;
    private $added;
    private $lastModified;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "transactionID")) {
                $this->transactionID = $record->transactionID;
            }
            if (property_exists($record, "sum")) {
                $this->sum = $record->sum;
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
            if (property_exists($record, "dateTime")) {
                $this->dateTime = $record->dateTime;
            }
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "comment")) {
                $this->comment = $record->comment;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
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
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return mixed
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     * @return mixed
     */
    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    /**
     * @return mixed
     */
    public function getWarehouseName()
    {
        return $this->warehouseName;
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
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return mixed
     */
    public function getReasonID()
    {
        return $this->reasonID;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @return mixed
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }


}