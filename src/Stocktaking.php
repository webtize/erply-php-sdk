<?php

namespace Webtize\ErplySDK;

class Stocktaking
{

    private $stocktakingID = null;
    private $warehouses = null;
    private $prodgroupID = null;
    private $productCategoryID = null;
    private $brandID = null;
    private $supplierID = null;
    private $locationInWarehouse = null;
    private $onlyItemsWithoutWarehouseLocation = null;
    private $excludeReservations = null;
    private $status = null;
    private $numberOfRows = null;
    private $inventoryRegistrationID = null;
    private $inventoryWriteOffID = null;
    private $added = null;
    private $addedByUserName = null;
    private $addedByEmployeeID = null;
    private $confirmedTimestamp = null;
    private $confirmedByUserName = null;
    private $confirmedByEmployeeID = null;
    private $lastModified = null;

    public function __construct($record = null)
    {
        if ($record != null) {

            if (property_exists($record, "stocktakingID")) {
                $this->stocktakingID = $record->stocktakingID;
            }

            if (property_exists($record, "warehouses")) {
                $this->warehouses = $record->warehouses;
            }

            if (property_exists($record, "prodgroupID")) {
                $this->prodgroupID = $record->prodgroupID;
            }

            if (property_exists($record, "productCategoryID")) {
                $this->productCategoryID = $record->productCategoryID;
            }

            if (property_exists($record, "brandID")) {
                $this->brandID = $record->brandID;
            }

            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
            }

            if (property_exists($record, "locationInWarehouse")) {
                $this->locationInWarehouse = $record->locationInWarehouse;
            }

            if (property_exists($record, "onlyItemsWithoutWarehouseLocation")) {
                $this->onlyItemsWithoutWarehouseLocation = $record->onlyItemsWithoutWarehouseLocation;
            }

            if (property_exists($record, "excludeReservations")) {
                $this->excludeReservations = $record->excludeReservations;
            }

            if (property_exists($record, "status")) {
                $this->status = $record->status;
            }

            if (property_exists($record, "numberOfRows")) {
                $this->numberOfRows = $record->numberOfRows;
            }

            if (property_exists($record, "inventoryRegistrationID")) {
                $this->inventoryRegistrationID = $record->inventoryRegistrationID;
            }

            if (property_exists($record, "inventoryWriteOffID")) {
                $this->inventoryWriteOffID = $record->inventoryWriteOffID;
            }

            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }

            if (property_exists($record, "addedByUserName")) {
                $this->addedByUserName = $record->addedByUserName;
            }

            if (property_exists($record, "addedByEmployeeID")) {
                $this->addedByEmployeeID = $record->addedByEmployeeID;
            }

            if (property_exists($record, "confirmedTimestamp")) {
                $this->confirmedTimestamp = $record->confirmedTimestamp;
            }

            if (property_exists($record, "confirmedByUserName")) {
                $this->confirmedByUserName = $record->confirmedByUserName;
            }

            if (property_exists($record, "confirmedByEmployeeID")) {
                $this->confirmedByEmployeeID = $record->confirmedByEmployeeID;
            }

            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
    }


    /**
     * @return null
     */
    public
    function getStocktakingID()
    {
        return $this->stocktakingID;
    }

    /**
     * @return null
     */
    public
    function getWarehouses()
    {
        return $this->warehouses;
    }

    /**
     * @return null
     */
    public
    function getProdgroupID()
    {
        return $this->prodgroupID;
    }

    /**
     * @return null
     */
    public
    function getProductCategoryID()
    {
        return $this->productCategoryID;
    }

    /**
     * @return null
     */
    public
    function getBrandID()
    {
        return $this->brandID;
    }

    /**
     * @return null
     */
    public
    function getSupplierID()
    {
        return $this->supplierID;
    }

    /**
     * @return null
     */
    public
    function getLocationInWarehouse()
    {
        return $this->locationInWarehouse;
    }

    /**
     * @return null
     */
    public
    function getOnlyItemsWithoutWarehouseLocation()
    {
        return $this->onlyItemsWithoutWarehouseLocation;
    }

    /**
     * @return null
     */
    public
    function getExcludeReservations()
    {
        return $this->excludeReservations;
    }

    /**
     * @return null
     */
    public
    function getStatus()
    {
        return $this->status;
    }

    /**
     * @return null
     */
    public
    function getNumberOfRows()
    {
        return $this->numberOfRows;
    }

    /**
     * @return null
     */
    public
    function getInventoryRegistrationID()
    {
        return $this->inventoryRegistrationID;
    }

    /**
     * @return null
     */
    public
    function getInventoryWriteOffID()
    {
        return $this->inventoryWriteOffID;
    }

    /**
     * @return null
     */
    public
    function getAdded()
    {
        return $this->added;
    }

    /**
     * @return null
     */
    public
    function getAddedByUserName()
    {
        return $this->addedByUserName;
    }

    /**
     * @return null
     */
    public
    function getAddedByEmployeeID()
    {
        return $this->addedByEmployeeID;
    }

    /**
     * @return null
     */
    public
    function getConfirmedTimestamp()
    {
        return $this->confirmedTimestamp;
    }

    /**
     * @return null
     */
    public
    function getConfirmedByUserName()
    {
        return $this->confirmedByUserName;
    }

    /**
     * @return null
     */
    public
    function getConfirmedByEmployeeID()
    {
        return $this->confirmedByEmployeeID;
    }

    /**
     * @return null
     */
    public
    function getLastModified()
    {
        return $this->lastModified;
    }


}