<?php


namespace Webtize\ErplySDK;


class Row1
{
    public $rowID = null;
    public $stableRowID = null;
    public $productID = null;
    public $serviceID = null;
    public $itemName = null;
    public $code = null;
    public $amount = null;
    public $price = null;
    public $discount = null;
    public $finalNetPrice = null;
    public $finalPriceWithVAT = null;
    public $rowNetTotal = null;
    public $rowVAT = null;
    public $rowTotal = null;
    public $deliveryDate = null;
    public $returnReasonID = null;
    public $employeeID = null;
    public $campaignIDs = null;
    public $containerID = null;
    public $containerAmount = null;
    public $originalPriceIsZero = null;
    public $packageID = null;
    public $amountOfPackages = null;
    public $amountInPackage = null;
    public $packageType = null;
    public $packageTypeID = null;
    public $sourceWaybillID = null;
    public $billingStatementID = null;
    public $billingStartDate = null;
    public $billingEndDate = null;
    public $batch = null;
    public $warehouseValue = null;
    public $jdoc = null;

    public function __construct($record)
    {
        if (property_exists($record, 'rowID')) {
            $this->rowID = $record->rowID;
        }
        if (property_exists($record, 'stableRowID')) {
            $this->stableRowID = $record->stableRowID;
        }
        if (property_exists($record, 'productID')) {
            $this->productID = $record->productID;
        }
        if (property_exists($record, 'serviceID')) {
            $this->serviceID = $record->serviceID;
        }
        if (property_exists($record, 'itemName')) {
            $this->itemName = $record->itemName;
        }
        if (property_exists($record, 'code')) {
            $this->code = $record->code;
        }
        if (property_exists($record, 'amount')) {
            $this->amount = $record->amount;
        }
        if (property_exists($record, 'price')) {
            $this->price = $record->price;
        }
        if (property_exists($record, 'discount')) {
            $this->discount = $record->discount;
        }
        if (property_exists($record, 'finalNetPrice')) {
            $this->finalNetPrice = $record->finalNetPrice;
        }
        if (property_exists($record, 'inalPriceWithVAT')) {
            $this->finalPriceWithVAT = $record->inalPriceWithVAT;
        }
        if (property_exists($record, 'rowNetTotal')) {
            $this->rowNetTotal = $record->rowNetTotal;
        }
        if (property_exists($record, 'rowVAT')) {
            $this->rowVAT = $record->rowVAT;
        }
        if (property_exists($record, 'rowTotal')) {
            $this->rowTotal = $record->rowTotal;
        }
        if (property_exists($record, 'deliveryDate')) {
            $this->deliveryDate = $record->deliveryDate;
        }
        if (property_exists($record, 'returnReasonID')) {
            $this->returnReasonID = $record->returnReasonID;
        }
        if (property_exists($record, 'employeeID')) {
            $this->employeeID = $record->employeeID;
        }
        if (property_exists($record, 'campaignIDs')) {
            $this->campaignIDs = $record->campaignIDs;
        }
        if (property_exists($record, 'containerID')) {
            $this->containerID = $record->containerID;
        }
        if (property_exists($record, 'containerAmount')) {
            $this->containerAmount = $record->containerAmount;
        }
        if (property_exists($record, 'originalPriceIsZero')) {
            $this->originalPriceIsZero = $record->originalPriceIsZero;
        }
        if (property_exists($record, 'packageID')) {
            $this->packageID = $record->packageID;
        }
        if (property_exists($record, 'amountOfPackages')) {
            $this->amountOfPackages = $record->amountOfPackages;
        }
        if (property_exists($record, 'amountInPackage')) {
            $this->amountInPackage = $record->amountInPackage;
        }
        if (property_exists($record, 'packageType')) {
            $this->packageType = $record->packageType;
        }
        if (property_exists($record, 'packageTypeID')) {
            $this->packageTypeID = $record->packageTypeID;
        }
        if (property_exists($record, 'sourceWaybillID')) {
            $this->sourceWaybillID = $record->sourceWaybillID;
        }
        if (property_exists($record, 'billingStatementID')) {
            $this->billingStatementID = $record->billingStatementID;
        }
        if (property_exists($record, 'billingStartDate')) {
            $this->billingStartDate = $record->billingStartDate;
        }
        if (property_exists($record, 'billingEndDate')) {
            $this->billingEndDate = $record->billingEndDate;
        }
        if (property_exists($record, 'batch')) {
            $this->batch = $record->batch;
        }
        if (property_exists($record, 'warehouseValue')) {
            $this->warehouseValue = $record->warehouseValue;
        }
        if (property_exists($record, 'jdoc')) {
            $this->jdoc = $record->jdoc;
        }
    }


    /**
     * @return null
     */
    public function getRowID()
    {
        return $this->rowID;
    }

    /**
     * @return null
     */
    public function getStableRowID()
    {
        return $this->stableRowID;
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
    public function getServiceID()
    {
        return $this->serviceID;
    }

    /**
     * @return null
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @return null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return null
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return null
     */
    public function getFinalNetPrice()
    {
        return $this->finalNetPrice;
    }

    /**
     * @return null
     */
    public function getFinalPriceWithVAT()
    {
        return $this->finalPriceWithVAT;
    }

    /**
     * @return null
     */
    public function getRowNetTotal()
    {
        return $this->rowNetTotal;
    }

    /**
     * @return null
     */
    public function getRowVAT()
    {
        return $this->rowVAT;
    }

    /**
     * @return null
     */
    public function getRowTotal()
    {
        return $this->rowTotal;
    }

    /**
     * @return null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @return null
     */
    public function getReturnReasonID()
    {
        return $this->returnReasonID;
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
    public function getCampaignIDs()
    {
        return $this->campaignIDs;
    }

    /**
     * @return null
     */
    public function getContainerID()
    {
        return $this->containerID;
    }

    /**
     * @return null
     */
    public function getContainerAmount()
    {
        return $this->containerAmount;
    }

    /**
     * @return null
     */
    public function getOriginalPriceIsZero()
    {
        return $this->originalPriceIsZero;
    }

    /**
     * @return null
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * @return null
     */
    public function getAmountOfPackages()
    {
        return $this->amountOfPackages;
    }

    /**
     * @return null
     */
    public function getAmountInPackage()
    {
        return $this->amountInPackage;
    }

    /**
     * @return null
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @return null
     */
    public function getPackageTypeID()
    {
        return $this->packageTypeID;
    }

    /**
     * @return null
     */
    public function getSourceWaybillID()
    {
        return $this->sourceWaybillID;
    }

    /**
     * @return null
     */
    public function getBillingStatementID()
    {
        return $this->billingStatementID;
    }

    /**
     * @return null
     */
    public function getBillingStartDate()
    {
        return $this->billingStartDate;
    }

    /**
     * @return null
     */
    public function getBillingEndDate()
    {
        return $this->billingEndDate;
    }

    /**
     * @return null
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @return null
     */
    public function getWarehouseValue()
    {
        return $this->warehouseValue;
    }

    /**
     * @return null
     */
    public function getJdoc()
    {
        return $this->jdoc;
    }


}