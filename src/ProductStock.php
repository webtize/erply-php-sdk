<?php


namespace Webtize\ErplySDK;


class ProductStock
{

    private $productID = null;
    private $amountInStock = null;
    private $amountReserved = null;
    private $suggestedPurchasePrice = null;
    private $averagePurchasePrice = null;
    private $averageCost = null;
    private $firstPurchaseDate = null;
    private $lastPurchaseDate = null;
    private $lastSoldDate = null;
    private $reorderPoint = null;
    private $restockLevel = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "productID")) {
                $this->productID = $record->productID;
            }
            if (property_exists($record, "amountInStock")) {
                $this->amountInStock = $record->amountInStock;
            }
            if (property_exists($record, "amountReserved")) {
                $this->amountReserved = $record->amountReserved;
            }
            if (property_exists($record, "suggestedPurchasePrice")) {
                $this->suggestedPurchasePrice = $record->suggestedPurchasePrice;
            }
            if (property_exists($record, "averagePurchasePrice")) {
                $this->averagePurchasePrice = $record->averagePurchasePrice;
            }
            if (property_exists($record, "averageCost")) {
                $this->averageCost = $record->averageCost;
            }
            if (property_exists($record, "firstPurchaseDate")) {
                $this->firstPurchaseDate = $record->firstPurchaseDate;
            }
            if (property_exists($record, "lastPurchaseDate")) {
                $this->lastPurchaseDate = $record->lastPurchaseDate;
            }
            if (property_exists($record, "lastSoldDate")) {
                $this->lastSoldDate = $record->lastSoldDate;
            }
            if (property_exists($record, "reorderPoint")) {
                $this->reorderPoint = $record->reorderPoint;
            }
            if (property_exists($record, "restockLevel")) {
                $this->restockLevel = $record->restockLevel;
            }
        }
    }


    /**
     * @return null
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return null
     */
    public function getAmountInStock()
    {
        return $this->amountInStock;
    }

    /**
     * @return null
     */
    public function getAmountReserved()
    {
        return $this->amountReserved;
    }

    /**
     * @return null
     */
    public function getSuggestedPurchasePrice()
    {
        return $this->suggestedPurchasePrice;
    }

    /**
     * @return null
     */
    public function getAveragePurchasePrice()
    {
        return $this->averagePurchasePrice;
    }

    /**
     * @return null
     */
    public function getAverageCost()
    {
        return $this->averageCost;
    }

    /**
     * @return null
     */
    public function getFirstPurchaseDate()
    {
        return $this->firstPurchaseDate;
    }

    /**
     * @return null
     */
    public function getLastPurchaseDate()
    {
        return $this->lastPurchaseDate;
    }

    /**
     * @return null
     */
    public function getLastSoldDate()
    {
        return $this->lastSoldDate;
    }

    /**
     * @return null
     */
    public function getReorderPoint()
    {
        return $this->reorderPoint;
    }

    /**
     * @return null
     */
    public function getRestockLevel()
    {
        return $this->restockLevel;
    }


}