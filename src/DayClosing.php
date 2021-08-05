<?php

namespace Webtize\ErplySDK;

class DayClosing
{

    private $dayID;
    private $warehouseID;
    private $warehouseName;
    private $pointOfSaleID;
    private $pointOfSaleName;
    private $drawerID;
    private $shiftType;
    private $employees;
    private $openedUnixTime;
    private $openedByEmployeeID;
    private $openedByEmployeeName;
    private $openedSum;
    private $closedUnixTime;
    private $closedByEmployeeID;
    private $closedByEmployeeName;
    private $closedSum;
    private $bankedSum;
    private $notes;
    private $reasonID;
    private $currencyCod;
    private $attributes;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "dayID")) {
                $this->dayID = $record->dayID;
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
            if (property_exists($record, "drawerID")) {
                $this->drawerID = $record->drawerID;
            }
            if (property_exists($record, "shiftType")) {
                $this->shiftType = $record->shiftType;
            }
            if (property_exists($record, "employees")) {
                $this->employees = $record->employees;
            }
            if (property_exists($record, "openedUnixTime")) {
                $this->openedUnixTime = $record->openedUnixTime;
            }
            if (property_exists($record, "openedByEmployeeID")) {
                $this->openedByEmployeeID = $record->openedByEmployeeID;
            }
            if (property_exists($record, "openedByEmployeeName")) {
                $this->openedByEmployeeName = $record->openedByEmployeeName;
            }
            if (property_exists($record, "openedSum")) {
                $this->openedSum = $record->openedSum;
            }
            if (property_exists($record, "closedUnixTime")) {
                $this->closedUnixTime = $record->closedUnixTime;
            }
            if (property_exists($record, "closedByEmployeeID")) {
                $this->closedByEmployeeID = $record->closedByEmployeeID;
            }
            if (property_exists($record, "closedByEmployeeName")) {
                $this->closedByEmployeeName = $record->closedByEmployeeName;
            }
            if (property_exists($record, "closedSum")) {
                $this->closedSum = $record->closedSum;
            }
            if (property_exists($recoDayrd, "bankedSum")) {
                $this->bankedSum = $record->bankedSum;
            }
            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "currencyCod")) {
                $this->currencyCod = $record->currencyCod;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
            }
        }

    }


    /**
     * @return mixed
     */
    public function getDayID()
    {
        return $this->dayID;
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
    public function getDrawerID()
    {
        return $this->drawerID;
    }

    /**
     * @return mixed
     */
    public function getShiftType()
    {
        return $this->shiftType;
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @return mixed
     */
    public function getOpenedUnixTime()
    {
        return $this->openedUnixTime;
    }

    /**
     * @return mixed
     */
    public function getOpenedByEmployeeID()
    {
        return $this->openedByEmployeeID;
    }

    /**
     * @return mixed
     */
    public function getOpenedByEmployeeName()
    {
        return $this->openedByEmployeeName;
    }

    /**
     * @return mixed
     */
    public function getOpenedSum()
    {
        return $this->openedSum;
    }

    /**
     * @return mixed
     */
    public function getClosedUnixTime()
    {
        return $this->closedUnixTime;
    }

    /**
     * @return mixed
     */
    public function getClosedByEmployeeID()
    {
        return $this->closedByEmployeeID;
    }

    /**
     * @return mixed
     */
    public function getClosedByEmployeeName()
    {
        return $this->closedByEmployeeName;
    }

    /**
     * @return mixed
     */
    public function getClosedSum()
    {
        return $this->closedSum;
    }

    /**
     * @return mixed
     */
    public function getBankedSum()
    {
        return $this->bankedSum;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
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
    public function getCurrencyCod()
    {
        return $this->currencyCod;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }


}