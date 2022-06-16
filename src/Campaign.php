<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Campaign
{
    private $campaignID = null;
    private $startDate = null;
    private $endDate = null;
    private $name = null;
    private $type = null;
    private $warehouseID = null;
    private $warehouseIDs = null;
    private $tierID = null;
    private $purchasedProductGroupID = null;
    private $purchasedBrandID = null;
    private $purchasedAmount = null;
    private $purchaseTotalValue = null;
    private $rewardPoints = null;
    private $percentageOffEntirePurchase = null;
    private $sumOffEntirePurchase = null;
    private $specialPrice = null;
    private $awardedProductGroupID = null;
    private $awardedBrandID = null;
    private $lowestPriceItemIsAwarded = null;
    private $percentageOFF = null;
    private $sumOFF = null;
    private $discountForOneLine = null;
    private $excludePromotionItemsFromPercentageOffEntirePurchase = null;
    private $oncePerDay = null;
    private $maximumNumberOfMatchingItems = null;
    private $onlyForDiscountedItems = null;
    private $enabled = null;
    private $added = null;
    private $lastModified = null;
    private $requiredCouponID = null;
    private $requiredCouponCode = null;
    private $purchasedProducts = null;
    private $awardedProducts = null;
    private $excludedProducts = null;
    private $percentageOffExcludedProducts = null;
    private $percentageOffIncludedProducts = null;
    private $sumOffExcludedProducts = null;
    private $sumOffIncludedProducts = null;
    private $awardedAmount = null;
    private $purchasedProductCategoryID = null;
    private $awardedProductCategoryID = null;
    private $maximumPointsDiscount = null;
    private $customerCanUseOnlyOnce = null;
    private $isBirthdayPromotion = null;
    private $oncePerBirthday = null;
    private $priceAtLeast = null;
    private $priceAtMost = null;
    private $requiresManagerOverride = null;
    private $sumOffMatchingItems = null;
    private $percentageOffMatchingItems = null;
    private $excludeDiscountedFromPercentageOffEntirePurchase = null;
    private $reasonID = null;
    private $specialUnitPrice = null;
    private $maxItemsWithSpecialUnitPrice = null;
    private $redemptionLimit = null;
    private $isStackable = null;
    private $storeGroup = null;
    private $startTime = null;
    private $endTime = null;
    private $purchasedProductGroupIDs = null;
    private $purchasedProductCategoryIDs = null;
    private $purchasedBrandIDs = null;
    private $awardedProductGroupIDs = null;
    private $awardedProductCategoryIDs = null;
    private $awardedBrandIDs = null;
    private $purchaseTotalValueMax = null;
    private $canBeAppliedManuallyMultipleTimes = null;
    private $formula = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveCampaign"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveCampaign"]);
        }
        if ($this->getCampaignID() != null) {
            $arr_query = array_merge($arr_query, ["campaignID" => $this->getCampaignID()]);
        }
        if ($this->getStartDate() != null) {
            $arr_query = array_merge($arr_query, ["startDate" => $this->getStartDate()]);
        }
        if ($this->getEndDate() != null) {
            $arr_query = array_merge($arr_query, ["endDate" => $this->getEndDate()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["warehouseID" => $this->getWarehouseID()]);
        }
        if ($this->getTierID() != null) {
            $arr_query = array_merge($arr_query, ["tierID" => $this->getTierID()]);
        }
        if ($this->getPurchasedProductGroupID() != null) {
            $arr_query = array_merge($arr_query, ["purchasedProductGroupID" => $this->getPurchasedProductGroupID()]);
        }
        if ($this->getPurchasedBrandID() != null) {
            $arr_query = array_merge($arr_query, ["purchasedBrandID" => $this->getPurchasedBrandID()]);
        }
        if ($this->getPurchasedAmount() != null) {
            $arr_query = array_merge($arr_query, ["purchasedAmount" => $this->getPurchasedAmount()]);
        }
        if ($this->getPurchaseTotalValue() != null) {
            $arr_query = array_merge($arr_query, ["purchaseTotalValue" => $this->getPurchaseTotalValue()]);
        }
        if ($this->getRewardPoints() != null) {
            $arr_query = array_merge($arr_query, ["rewardPoints" => $this->getRewardPoints()]);
        }
        if ($this->getPercentageOffEntirePurchase() != null) {
            $arr_query = array_merge($arr_query, ["percentageOffEntirePurchase" => $this->getPercentageOffEntirePurchase()]);
        }
        if ($this->getSumOffEntirePurchase() != null) {
            $arr_query = array_merge($arr_query, ["sumOffEntirePurchase" => $this->getSumOffEntirePurchase()]);
        }
        if ($this->getSpecialPrice() != null) {
            $arr_query = array_merge($arr_query, ["specialPrice" => $this->getSpecialPrice()]);
        }
        if ($this->getAwardedProductGroupID() != null) {
            $arr_query = array_merge($arr_query, ["awardedProductGroupID" => $this->getAwardedProductGroupID()]);
        }
        if ($this->getAwardedBrandID() != null) {
            $arr_query = array_merge($arr_query, ["awardedBrandID" => $this->getAwardedBrandID()]);
        }
        if ($this->getLowestPriceItemIsAwarded() != null) {
            $arr_query = array_merge($arr_query, ["lowestPriceItemIsAwarded" => $this->getLowestPriceItemIsAwarded()]);
        }
        if ($this->getPercentageOFF() != null) {
            $arr_query = array_merge($arr_query, ["percentageOFF" => $this->getPercentageOFF()]);
        }
        if ($this->getSumOFF() != null) {
            $arr_query = array_merge($arr_query, ["sumOFF" => $this->getSumOFF()]);
        }
        if ($this->getDiscountForOneLine() != null) {
            $arr_query = array_merge($arr_query, ["discountForOneLine" => $this->getDiscountForOneLine()]);
        }
        if ($this->getExcludePromotionItemsFromPercentageOffEntirePurchase() != null) {
            $arr_query = array_merge($arr_query, ["excludePromotionItemsFromPercentageOffEntirePurchase" => $this->getExcludePromotionItemsFromPercentageOffEntirePurchase()]);
        }
        if ($this->getOncePerDay() != null) {
            $arr_query = array_merge($arr_query, ["oncePerDay" => $this->getOncePerDay()]);
        }
        if ($this->getMaximumNumberOfMatchingItems() != null) {
            $arr_query = array_merge($arr_query, ["maximumNumberOfMatchingItems" => $this->getMaximumNumberOfMatchingItems()]);
        }
        if ($this->getOnlyForDiscountedItems() != null) {
            $arr_query = array_merge($arr_query, ["onlyForDiscountedItems" => $this->getOnlyForDiscountedItems()]);
        }
        if ($this->getEnabled() != null) {
            $arr_query = array_merge($arr_query, ["enabled" => $this->getEnabled()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getRequiredCouponID() != null) {
            $arr_query = array_merge($arr_query, ["requiredCouponID" => $this->getRequiredCouponID()]);
        }
        if ($this->getRequiredCouponCode() != null) {
            $arr_query = array_merge($arr_query, ["requiredCouponCode" => $this->getRequiredCouponCode()]);
        }
        if ($this->getPurchasedProducts() != null) {
            $arr_query = array_merge($arr_query, ["purchasedProducts" => $this->getPurchasedProducts()]);
        }
        if ($this->getAwardedProducts() != null) {
            $arr_query = array_merge($arr_query, ["awardedProducts" => $this->getAwardedProducts()]);
        }
        if ($this->getExcludedProducts() != null) {
            $arr_query = array_merge($arr_query, ["excludedProducts" => $this->getExcludedProducts()]);
        }
        if ($this->getPercentageOffExcludedProducts() != null) {
            $arr_query = array_merge($arr_query, ["percentageOffExcludedProducts" => $this->getPercentageOffExcludedProducts()]);
        }
        if ($this->getPercentageOffIncludedProducts() != null) {
            $arr_query = array_merge($arr_query, ["percentageOffIncludedProducts" => $this->getPercentageOffIncludedProducts()]);
        }
        if ($this->getSumOffExcludedProducts() != null) {
            $arr_query = array_merge($arr_query, ["sumOffExcludedProducts" => $this->getSumOffExcludedProducts()]);
        }
        if ($this->getSumOffIncludedProducts() != null) {
            $arr_query = array_merge($arr_query, ["sumOffIncludedProducts" => $this->getSumOffIncludedProducts()]);
        }
        if ($this->getAwardedAmount() != null) {
            $arr_query = array_merge($arr_query, ["awardedAmount" => $this->getAwardedAmount()]);
        }
        if ($this->getPurchasedProductCategoryID() != null) {
            $arr_query = array_merge($arr_query, ["purchasedProductCategoryID" => $this->getPurchasedProductCategoryID()]);
        }
        if ($this->getAwardedProductCategoryID() != null) {
            $arr_query = array_merge($arr_query, ["awardedProductCategoryID" => $this->getAwardedProductCategoryID()]);
        }
        if ($this->getMaximumPointsDiscount() != null) {
            $arr_query = array_merge($arr_query, ["maximumPointsDiscount" => $this->getMaximumPointsDiscount()]);
        }
        if ($this->getCustomerCanUseOnlyOnce() != null) {
            $arr_query = array_merge($arr_query, ["customerCanUseOnlyOnce" => $this->getCustomerCanUseOnlyOnce()]);
        }
        if ($this->getIsBirthdayPromotion() != null) {
            $arr_query = array_merge($arr_query, ["isBirthdayPromotion" => $this->getIsBirthdayPromotion()]);
        }
        if ($this->getOncePerBirthday() != null) {
            $arr_query = array_merge($arr_query, ["oncePerBirthday" => $this->getOncePerBirthday()]);
        }
        if ($this->getPriceAtLeast() != null) {
            $arr_query = array_merge($arr_query, ["priceAtLeast" => $this->getPriceAtLeast()]);
        }
        if ($this->getPriceAtMost() != null) {
            $arr_query = array_merge($arr_query, ["priceAtMost" => $this->getPriceAtMost()]);
        }
        if ($this->getRequiresManagerOverride() != null) {
            $arr_query = array_merge($arr_query, ["requiresManagerOverride" => $this->getRequiresManagerOverride()]);
        }
        if ($this->getSumOffMatchingItems() != null) {
            $arr_query = array_merge($arr_query, ["sumOffMatchingItems" => $this->getSumOffMatchingItems()]);
        }
        if ($this->getPercentageOffMatchingItems() != null) {
            $arr_query = array_merge($arr_query, ["percentageOffMatchingItems" => $this->getPercentageOffMatchingItems()]);
        }
        if ($this->getExcludeDiscountedFromPercentageOffEntirePurchase() != null) {
            $arr_query = array_merge($arr_query, ["excludeDiscountedFromPercentageOffEntirePurchase" => $this->getExcludeDiscountedFromPercentageOffEntirePurchase()]);
        }
        if ($this->getReasonID() != null) {
            $arr_query = array_merge($arr_query, ["reasonID" => $this->getReasonID()]);
        }
        if ($this->getSpecialUnitPrice() != null) {
            $arr_query = array_merge($arr_query, ["specialUnitPrice" => $this->getSpecialUnitPrice()]);
        }
        if ($this->getMaxItemsWithSpecialUnitPrice() != null) {
            $arr_query = array_merge($arr_query, ["maxItemsWithSpecialUnitPrice" => $this->getMaxItemsWithSpecialUnitPrice()]);
        }
        if ($this->getRedemptionLimit() != null) {
            $arr_query = array_merge($arr_query, ["redemptionLimit" => $this->getRedemptionLimit()]);
        }
        if ($this->getIsStackable() != null) {
            $arr_query = array_merge($arr_query, ["isStackable" => $this->getIsStackable()]);
        }
        if ($this->getStoreGroup() != null) {
            $arr_query = array_merge($arr_query, ["storeGroup" => $this->getStoreGroup()]);
        }
        if ($this->getStartTime() != null) {
            $arr_query = array_merge($arr_query, ["startTime" => $this->getStartTime()]);
        }
        if ($this->getEndTime() != null) {
            $arr_query = array_merge($arr_query, ["endTime" => $this->getEndTime()]);
        }
        if ($this->getPurchasedProductGroupIDs() != null) {
            $arr_query = array_merge($arr_query, ["purchasedProductGroupIDs" => $this->getPurchasedProductGroupIDs()]);
        }
        if ($this->getPurchasedProductCategoryIDs() != null) {
            $arr_query = array_merge($arr_query, ["purchasedProductCategoryIDs" => $this->getPurchasedProductCategoryIDs()]);
        }
        if ($this->getPurchasedBrandIDs() != null) {
            $arr_query = array_merge($arr_query, ["purchasedBrandIDs" => $this->getPurchasedBrandIDs()]);
        }
        if ($this->getAwardedProductGroupIDs() != null) {
            $arr_query = array_merge($arr_query, ["awardedProductGroupIDs" => $this->getAwardedProductGroupIDs()]);
        }
        if ($this->getAwardedProductCategoryIDs() != null) {
            $arr_query = array_merge($arr_query, ["awardedProductCategoryIDs" => $this->getAwardedProductCategoryIDs()]);
        }
        if ($this->getAwardedBrandIDs() != null) {
            $arr_query = array_merge($arr_query, ["awardedBrandIDs" => $this->getAwardedBrandIDs()]);
        }
        if ($this->getPurchaseTotalValueMax() != null) {
            $arr_query = array_merge($arr_query, ["purchaseTotalValueMax" => $this->getPurchaseTotalValueMax()]);
        }
        if ($this->getCanBeAppliedManuallyMultipleTimes() != null) {
            $arr_query = array_merge($arr_query, ["canBeAppliedManuallyMultipleTimes" => $this->getCanBeAppliedManuallyMultipleTimes()]);
        }
        if ($this->getFormula() != null) {
            $arr_query = array_merge($arr_query, ["formula" => $this->getFormula()]);
        }
        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }
        return $arr_query;
    }

    private $requestID = null;

    public function getRequestID()
    {
        return $this->requestID;
    }

    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "requestID")) {
                $this->requestID = $record->requestID;
            }
            if (property_exists($record, "campaignID")) {
                $this->campaignID = $record->campaignID;
            }
            if (property_exists($record, "warehouseIDs")) {
                $this->warehouseIDs = $record->warehouseIDs;
            }
            if (property_exists($record, "startDate")) {
                $this->startDate = $record->startDate;
            }
            if (property_exists($record, "endDate")) {
                $this->endDate = $record->endDate;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "warehouseID")) {
                $this->warehouseID = $record->warehouseID;
            }
            if (property_exists($record, "tierID")) {
                $this->tierID = $record->tierID;
            }
            if (property_exists($record, "purchasedProductGroupID")) {
                $this->purchasedProductGroupID = $record->purchasedProductGroupID;
            }
            if (property_exists($record, "purchasedBrandID")) {
                $this->purchasedBrandID = $record->purchasedBrandID;
            }
            if (property_exists($record, "purchasedAmount")) {
                $this->purchasedAmount = $record->purchasedAmount;
            }
            if (property_exists($record, "purchaseTotalValue")) {
                $this->purchaseTotalValue = $record->purchaseTotalValue;
            }
            if (property_exists($record, "rewardPoints")) {
                $this->rewardPoints = $record->rewardPoints;
            }
            if (property_exists($record, "percentageOffEntirePurchase")) {
                $this->percentageOffEntirePurchase = $record->percentageOffEntirePurchase;
            }
            if (property_exists($record, "sumOffEntirePurchase")) {
                $this->sumOffEntirePurchase = $record->sumOffEntirePurchase;
            }
            if (property_exists($record, "specialPrice")) {
                $this->specialPrice = $record->specialPrice;
            }
            if (property_exists($record, "awardedProductGroupID")) {
                $this->awardedProductGroupID = $record->awardedProductGroupID;
            }
            if (property_exists($record, "awardedBrandID")) {
                $this->awardedBrandID = $record->awardedBrandID;
            }
            if (property_exists($record, "lowestPriceItemIsAwarded")) {
                $this->lowestPriceItemIsAwarded = $record->lowestPriceItemIsAwarded;
            }
            if (property_exists($record, "percentageOFF")) {
                $this->percentageOFF = $record->percentageOFF;
            }
            if (property_exists($record, "sumOFF")) {
                $this->sumOFF = $record->sumOFF;
            }
            if (property_exists($record, "discountForOneLine")) {
                $this->discountForOneLine = $record->discountForOneLine;
            }
            if (property_exists($record, "excludePromotionItemsFromPercentageOffEntirePurchase")) {
                $this->excludePromotionItemsFromPercentageOffEntirePurchase = $record->excludePromotionItemsFromPercentageOffEntirePurchase;
            }
            if (property_exists($record, "oncePerDay")) {
                $this->oncePerDay = $record->oncePerDay;
            }
            if (property_exists($record, "maximumNumberOfMatchingItems")) {
                $this->maximumNumberOfMatchingItems = $record->maximumNumberOfMatchingItems;
            }
            if (property_exists($record, "onlyForDiscountedItems")) {
                $this->onlyForDiscountedItems = $record->onlyForDiscountedItems;
            }
            if (property_exists($record, "enabled")) {
                $this->enabled = $record->enabled;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "requiredCouponID")) {
                $this->requiredCouponID = $record->requiredCouponID;
            }
            if (property_exists($record, "requiredCouponCode")) {
                $this->requiredCouponCode = $record->requiredCouponCode;
            }
            if (property_exists($record, "purchasedProducts")) {
                $this->purchasedProducts = $record->purchasedProducts;
            }
            if (property_exists($record, "awardedProducts")) {
                $this->awardedProducts = $record->awardedProducts;
            }
            if (property_exists($record, "excludedProducts")) {
                $this->excludedProducts = $record->excludedProducts;
            }
            if (property_exists($record, "percentageOffExcludedProducts")) {
                $this->percentageOffExcludedProducts = $record->percentageOffExcludedProducts;
            }
            if (property_exists($record, "percentageOffIncludedProducts")) {
                $this->percentageOffIncludedProducts = $record->percentageOffIncludedProducts;
            }
            if (property_exists($record, "sumOffExcludedProducts")) {
                $this->sumOffExcludedProducts = $record->sumOffExcludedProducts;
            }
            if (property_exists($record, "sumOffIncludedProducts")) {
                $this->sumOffIncludedProducts = $record->sumOffIncludedProducts;
            }
            if (property_exists($record, "awardedAmount")) {
                $this->awardedAmount = $record->awardedAmount;
            }
            if (property_exists($record, "purchasedProductCategoryID")) {
                $this->purchasedProductCategoryID = $record->purchasedProductCategoryID;
            }
            if (property_exists($record, "awardedProductCategoryID")) {
                $this->awardedProductCategoryID = $record->awardedProductCategoryID;
            }
            if (property_exists($record, "maximumPointsDiscount")) {
                $this->maximumPointsDiscount = $record->maximumPointsDiscount;
            }
            if (property_exists($record, "customerCanUseOnlyOnce")) {
                $this->customerCanUseOnlyOnce = $record->customerCanUseOnlyOnce;
            }
            if (property_exists($record, "isBirthdayPromotion")) {
                $this->isBirthdayPromotion = $record->isBirthdayPromotion;
            }
            if (property_exists($record, "oncePerBirthday")) {
                $this->oncePerBirthday = $record->oncePerBirthday;
            }
            if (property_exists($record, "priceAtLeast")) {
                $this->priceAtLeast = $record->priceAtLeast;
            }
            if (property_exists($record, "priceAtMost")) {
                $this->priceAtMost = $record->priceAtMost;
            }
            if (property_exists($record, "requiresManagerOverride")) {
                $this->requiresManagerOverride = $record->requiresManagerOverride;
            }
            if (property_exists($record, "sumOffMatchingItems")) {
                $this->sumOffMatchingItems = $record->sumOffMatchingItems;
            }
            if (property_exists($record, "percentageOffMatchingItems")) {
                $this->percentageOffMatchingItems = $record->percentageOffMatchingItems;
            }
            if (property_exists($record, "excludeDiscountedFromPercentageOffEntirePurchase")) {
                $this->excludeDiscountedFromPercentageOffEntirePurchase = $record->excludeDiscountedFromPercentageOffEntirePurchase;
            }
            if (property_exists($record, "reasonID")) {
                $this->reasonID = $record->reasonID;
            }
            if (property_exists($record, "specialUnitPrice")) {
                $this->specialUnitPrice = $record->specialUnitPrice;
            }
            if (property_exists($record, "maxItemsWithSpecialUnitPrice")) {
                $this->maxItemsWithSpecialUnitPrice = $record->maxItemsWithSpecialUnitPrice;
            }
            if (property_exists($record, "redemptionLimit")) {
                $this->redemptionLimit = $record->redemptionLimit;
            }
            if (property_exists($record, "isStackable")) {
                $this->isStackable = $record->isStackable;
            }
            if (property_exists($record, "storeGroup")) {
                $this->storeGroup = $record->storeGroup;
            }
            if (property_exists($record, "startTime")) {
                $this->startTime = $record->startTime;
            }
            if (property_exists($record, "endTime")) {
                $this->endTime = $record->endTime;
            }
            if (property_exists($record, "purchasedProductGroupIDs")) {
                $this->purchasedProductGroupIDs = $record->purchasedProductGroupIDs;
            }
            if (property_exists($record, "purchasedProductCategoryIDs")) {
                $this->purchasedProductCategoryIDs = $record->purchasedProductCategoryIDs;
            }
            if (property_exists($record, "purchasedBrandIDs")) {
                $this->purchasedBrandIDs = $record->purchasedBrandIDs;
            }
            if (property_exists($record, "awardedProductGroupIDs")) {
                $this->awardedProductGroupIDs = $record->awardedProductGroupIDs;
            }
            if (property_exists($record, "awardedProductCategoryIDs")) {
                $this->awardedProductCategoryIDs = $record->awardedProductCategoryIDs;
            }
            if (property_exists($record, "awardedBrandIDs")) {
                $this->awardedBrandIDs = $record->awardedBrandIDs;
            }
            if (property_exists($record, "purchaseTotalValueMax")) {
                $this->purchaseTotalValueMax = $record->purchaseTotalValueMax;
            }
            if (property_exists($record, "canBeAppliedManuallyMultipleTimes")) {
                $this->canBeAppliedManuallyMultipleTimes = $record->canBeAppliedManuallyMultipleTimes;
            }
            if (property_exists($record, "formula")) {
                $this->formula = $record->formula;
            }
        }
    }

    public function getCampaignID()
    {
        return $this->campaignID;
    }

    public function setCampaignID($campaignID)
    {
        $this->campaignID = $campaignID;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    public function setWarehouseID($warehouseID)
    {
        $this->warehouseID = $warehouseID;
    }

    public function getTierID()
    {
        return $this->tierID;
    }

    public function setTierID($tierID)
    {
        $this->tierID = $tierID;
    }

    /**
     * @return null
     */
    public function getWarehouseIDs()
    {
        return $this->warehouseIDs;
    }

    public function getPurchasedProductGroupID()
    {
        return $this->purchasedProductGroupID;
    }

    public function setPurchasedProductGroupID($purchasedProductGroupID)
    {
        $this->purchasedProductGroupID = $purchasedProductGroupID;
    }

    public function getPurchasedBrandID()
    {
        return $this->purchasedBrandID;
    }

    public function setPurchasedBrandID($purchasedBrandID)
    {
        $this->purchasedBrandID = $purchasedBrandID;
    }

    public function getPurchasedAmount()
    {
        return $this->purchasedAmount;
    }

    public function setPurchasedAmount($purchasedAmount)
    {
        $this->purchasedAmount = $purchasedAmount;
    }

    public function getPurchaseTotalValue()
    {
        return $this->purchaseTotalValue;
    }

    public function setPurchaseTotalValue($purchaseTotalValue)
    {
        $this->purchaseTotalValue = $purchaseTotalValue;
    }

    public function getRewardPoints()
    {
        return $this->rewardPoints;
    }

    public function setRewardPoints($rewardPoints)
    {
        $this->rewardPoints = $rewardPoints;
    }

    public function getPercentageOffEntirePurchase()
    {
        return $this->percentageOffEntirePurchase;
    }

    public function setPercentageOffEntirePurchase($percentageOffEntirePurchase)
    {
        $this->percentageOffEntirePurchase = $percentageOffEntirePurchase;
    }

    public function getSumOffEntirePurchase()
    {
        return $this->sumOffEntirePurchase;
    }

    public function setSumOffEntirePurchase($sumOffEntirePurchase)
    {
        $this->sumOffEntirePurchase = $sumOffEntirePurchase;
    }

    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    public function setSpecialPrice($specialPrice)
    {
        $this->specialPrice = $specialPrice;
    }

    public function getAwardedProductGroupID()
    {
        return $this->awardedProductGroupID;
    }

    public function setAwardedProductGroupID($awardedProductGroupID)
    {
        $this->awardedProductGroupID = $awardedProductGroupID;
    }

    public function getAwardedBrandID()
    {
        return $this->awardedBrandID;
    }

    public function setAwardedBrandID($awardedBrandID)
    {
        $this->awardedBrandID = $awardedBrandID;
    }

    public function getLowestPriceItemIsAwarded()
    {
        return $this->lowestPriceItemIsAwarded;
    }

    public function setLowestPriceItemIsAwarded($lowestPriceItemIsAwarded)
    {
        $this->lowestPriceItemIsAwarded = $lowestPriceItemIsAwarded;
    }

    public function getPercentageOFF()
    {
        return $this->percentageOFF;
    }

    public function setPercentageOFF($percentageOFF)
    {
        $this->percentageOFF = $percentageOFF;
    }

    public function getSumOFF()
    {
        return $this->sumOFF;
    }

    public function setSumOFF($sumOFF)
    {
        $this->sumOFF = $sumOFF;
    }

    public function getDiscountForOneLine()
    {
        return $this->discountForOneLine;
    }

    public function setDiscountForOneLine($discountForOneLine)
    {
        $this->discountForOneLine = $discountForOneLine;
    }

    public function getExcludePromotionItemsFromPercentageOffEntirePurchase()
    {
        return $this->excludePromotionItemsFromPercentageOffEntirePurchase;
    }

    public function setExcludePromotionItemsFromPercentageOffEntirePurchase($excludePromotionItemsFromPercentageOffEntirePurchase)
    {
        $this->excludePromotionItemsFromPercentageOffEntirePurchase = $excludePromotionItemsFromPercentageOffEntirePurchase;
    }

    public function getOncePerDay()
    {
        return $this->oncePerDay;
    }

    public function setOncePerDay($oncePerDay)
    {
        $this->oncePerDay = $oncePerDay;
    }

    public function getMaximumNumberOfMatchingItems()
    {
        return $this->maximumNumberOfMatchingItems;
    }

    public function setMaximumNumberOfMatchingItems($maximumNumberOfMatchingItems)
    {
        $this->maximumNumberOfMatchingItems = $maximumNumberOfMatchingItems;
    }

    public function getOnlyForDiscountedItems()
    {
        return $this->onlyForDiscountedItems;
    }

    public function setOnlyForDiscountedItems($onlyForDiscountedItems)
    {
        $this->onlyForDiscountedItems = $onlyForDiscountedItems;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
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

    public function getRequiredCouponID()
    {
        return $this->requiredCouponID;
    }

    public function setRequiredCouponID($requiredCouponID)
    {
        $this->requiredCouponID = $requiredCouponID;
    }

    public function getRequiredCouponCode()
    {
        return $this->requiredCouponCode;
    }

    public function setRequiredCouponCode($requiredCouponCode)
    {
        $this->requiredCouponCode = $requiredCouponCode;
    }

    public function getPurchasedProducts()
    {
        return $this->purchasedProducts;
    }

    public function setPurchasedProducts($purchasedProducts)
    {
        $this->purchasedProducts = $purchasedProducts;
    }

    public function getAwardedProducts()
    {
        return $this->awardedProducts;
    }

    public function setAwardedProducts($awardedProducts)
    {
        $this->awardedProducts = $awardedProducts;
    }

    public function getExcludedProducts()
    {
        return $this->excludedProducts;
    }

    public function setExcludedProducts($excludedProducts)
    {
        $this->excludedProducts = $excludedProducts;
    }

    public function getPercentageOffExcludedProducts()
    {
        return $this->percentageOffExcludedProducts;
    }

    public function setPercentageOffExcludedProducts($percentageOffExcludedProducts)
    {
        $this->percentageOffExcludedProducts = $percentageOffExcludedProducts;
    }

    public function getPercentageOffIncludedProducts()
    {
        return $this->percentageOffIncludedProducts;
    }

    public function setPercentageOffIncludedProducts($percentageOffIncludedProducts)
    {
        $this->percentageOffIncludedProducts = $percentageOffIncludedProducts;
    }

    public function getSumOffExcludedProducts()
    {
        return $this->sumOffExcludedProducts;
    }

    public function setSumOffExcludedProducts($sumOffExcludedProducts)
    {
        $this->sumOffExcludedProducts = $sumOffExcludedProducts;
    }

    public function getSumOffIncludedProducts()
    {
        return $this->sumOffIncludedProducts;
    }

    public function setSumOffIncludedProducts($sumOffIncludedProducts)
    {
        $this->sumOffIncludedProducts = $sumOffIncludedProducts;
    }

    public function getAwardedAmount()
    {
        return $this->awardedAmount;
    }

    public function setAwardedAmount($awardedAmount)
    {
        $this->awardedAmount = $awardedAmount;
    }

    public function getPurchasedProductCategoryID()
    {
        return $this->purchasedProductCategoryID;
    }

    public function setPurchasedProductCategoryID($purchasedProductCategoryID)
    {
        $this->purchasedProductCategoryID = $purchasedProductCategoryID;
    }

    public function getAwardedProductCategoryID()
    {
        return $this->awardedProductCategoryID;
    }

    public function setAwardedProductCategoryID($awardedProductCategoryID)
    {
        $this->awardedProductCategoryID = $awardedProductCategoryID;
    }

    public function getMaximumPointsDiscount()
    {
        return $this->maximumPointsDiscount;
    }

    public function setMaximumPointsDiscount($maximumPointsDiscount)
    {
        $this->maximumPointsDiscount = $maximumPointsDiscount;
    }

    public function getCustomerCanUseOnlyOnce()
    {
        return $this->customerCanUseOnlyOnce;
    }

    public function setCustomerCanUseOnlyOnce($customerCanUseOnlyOnce)
    {
        $this->customerCanUseOnlyOnce = $customerCanUseOnlyOnce;
    }

    public function getIsBirthdayPromotion()
    {
        return $this->isBirthdayPromotion;
    }

    public function setIsBirthdayPromotion($isBirthdayPromotion)
    {
        $this->isBirthdayPromotion = $isBirthdayPromotion;
    }

    public function getOncePerBirthday()
    {
        return $this->oncePerBirthday;
    }

    public function setOncePerBirthday($oncePerBirthday)
    {
        $this->oncePerBirthday = $oncePerBirthday;
    }

    public function getPriceAtLeast()
    {
        return $this->priceAtLeast;
    }

    public function setPriceAtLeast($priceAtLeast)
    {
        $this->priceAtLeast = $priceAtLeast;
    }

    public function getPriceAtMost()
    {
        return $this->priceAtMost;
    }

    public function setPriceAtMost($priceAtMost)
    {
        $this->priceAtMost = $priceAtMost;
    }

    public function getRequiresManagerOverride()
    {
        return $this->requiresManagerOverride;
    }

    public function setRequiresManagerOverride($requiresManagerOverride)
    {
        $this->requiresManagerOverride = $requiresManagerOverride;
    }

    public function getSumOffMatchingItems()
    {
        return $this->sumOffMatchingItems;
    }

    public function setSumOffMatchingItems($sumOffMatchingItems)
    {
        $this->sumOffMatchingItems = $sumOffMatchingItems;
    }

    public function getPercentageOffMatchingItems()
    {
        return $this->percentageOffMatchingItems;
    }

    public function setPercentageOffMatchingItems($percentageOffMatchingItems)
    {
        $this->percentageOffMatchingItems = $percentageOffMatchingItems;
    }

    public function getExcludeDiscountedFromPercentageOffEntirePurchase()
    {
        return $this->excludeDiscountedFromPercentageOffEntirePurchase;
    }

    public function setExcludeDiscountedFromPercentageOffEntirePurchase($excludeDiscountedFromPercentageOffEntirePurchase)
    {
        $this->excludeDiscountedFromPercentageOffEntirePurchase = $excludeDiscountedFromPercentageOffEntirePurchase;
    }

    public function getReasonID()
    {
        return $this->reasonID;
    }

    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;
    }

    public function getSpecialUnitPrice()
    {
        return $this->specialUnitPrice;
    }

    public function setSpecialUnitPrice($specialUnitPrice)
    {
        $this->specialUnitPrice = $specialUnitPrice;
    }

    public function getMaxItemsWithSpecialUnitPrice()
    {
        return $this->maxItemsWithSpecialUnitPrice;
    }

    public function setMaxItemsWithSpecialUnitPrice($maxItemsWithSpecialUnitPrice)
    {
        $this->maxItemsWithSpecialUnitPrice = $maxItemsWithSpecialUnitPrice;
    }

    public function getRedemptionLimit()
    {
        return $this->redemptionLimit;
    }

    public function setRedemptionLimit($redemptionLimit)
    {
        $this->redemptionLimit = $redemptionLimit;
    }

    public function getIsStackable()
    {
        return $this->isStackable;
    }

    public function setIsStackable($isStackable)
    {
        $this->isStackable = $isStackable;
    }

    public function getStoreGroup()
    {
        return $this->storeGroup;
    }

    public function setStoreGroup($storeGroup)
    {
        $this->storeGroup = $storeGroup;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getPurchasedProductGroupIDs()
    {
        return $this->purchasedProductGroupIDs;
    }

    public function setPurchasedProductGroupIDs($purchasedProductGroupIDs)
    {
        $this->purchasedProductGroupIDs = $purchasedProductGroupIDs;
    }

    public function getPurchasedProductCategoryIDs()
    {
        return $this->purchasedProductCategoryIDs;
    }

    public function setPurchasedProductCategoryIDs($purchasedProductCategoryIDs)
    {
        $this->purchasedProductCategoryIDs = $purchasedProductCategoryIDs;
    }

    public function getPurchasedBrandIDs()
    {
        return $this->purchasedBrandIDs;
    }

    public function setPurchasedBrandIDs($purchasedBrandIDs)
    {
        $this->purchasedBrandIDs = $purchasedBrandIDs;
    }

    public function getAwardedProductGroupIDs()
    {
        return $this->awardedProductGroupIDs;
    }

    public function setAwardedProductGroupIDs($awardedProductGroupIDs)
    {
        $this->awardedProductGroupIDs = $awardedProductGroupIDs;
    }

    public function getAwardedProductCategoryIDs()
    {
        return $this->awardedProductCategoryIDs;
    }

    public function setAwardedProductCategoryIDs($awardedProductCategoryIDs)
    {
        $this->awardedProductCategoryIDs = $awardedProductCategoryIDs;
    }

    public function getAwardedBrandIDs()
    {
        return $this->awardedBrandIDs;
    }

    public function setAwardedBrandIDs($awardedBrandIDs)
    {
        $this->awardedBrandIDs = $awardedBrandIDs;
    }

    public function getPurchaseTotalValueMax()
    {
        return $this->purchaseTotalValueMax;
    }

    public function setPurchaseTotalValueMax($purchaseTotalValueMax)
    {
        $this->purchaseTotalValueMax = $purchaseTotalValueMax;
    }

    public function getCanBeAppliedManuallyMultipleTimes()
    {
        return $this->canBeAppliedManuallyMultipleTimes;
    }

    public function setCanBeAppliedManuallyMultipleTimes($canBeAppliedManuallyMultipleTimes)
    {
        $this->canBeAppliedManuallyMultipleTimes = $canBeAppliedManuallyMultipleTimes;
    }

    public function getFormula()
    {
        return $this->formula;
    }

    public function setFormula($formula)
    {
        $this->formula = $formula;
    }
}
