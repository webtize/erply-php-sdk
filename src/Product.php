<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Product
{
    private $productID = null;
    private $name = null;
    private $code = null;
    private $code2 = null;
    private $code3 = null;
    private $code4 = null;
    private $code5 = null;
    private $code6 = null;
    private $code7 = null;
    private $code8 = null;
    private $supplierCode = null;
    private $groupID = null;
    private $price = null;
    private $netPrice = null;
    private $active = null;
    private $displayedInWebshop = null;
    private $seriesID = null;
    private $supplierID = null;
    private $unitID = null;
    private $vatrateID = null;
    private $hasQuickSelectButton = null;
    private $isGiftCard = null;
    private $nonDiscountable = null;
    private $nonRefundable = null;
    private $manufacturerName = null;
    private $priorityGroupID = null;
    private $countryOfOriginID = null;
    private $brandID = null;
    private $length = null;
    private $width = null;
    private $height = null;
    private $netWeight = null;
    private $grossWeight = null;
    private $volume = null;
    private $locationInWarehouseID = null;
    private $locationInWarehouseName = null;
    private $locationInWarehouseText = null;
    private $description = null;
    private $longdesc = null;
    private $descriptionENG = null;
    private $longdescENG = null;
    private $descriptionRUS = null;
    private $longdescRUS = null;
    private $descriptionFIN = null;
    private $longdescFIN = null;
    private $containerID = null;
    private $cost = null;
    private $added = null;
    private $addedByUsername = null;
    private $lastModified = null;
    private $lastModifiedByUsername = null;
    private $vatrate = null;
    private $priceWithVAT = null;
    private $unitName = null;
    private $brandName = null;
    private $seriesName = null;
    private $groupName = null;
    private $supplierName = null;
    private $categoryID = null;
    private $categoryName = null;
    private $status = null;
    private $taxFree = null;
    private $isRegularGiftCard = null;
    private $nonStockProduct = null;
    private $cashierMustEnterPrice = null;
    private $rewardPointsNotAllowed = null;
    private $reorderMultiple = null;
    private $packagingType = null;
    private $priceListPrice = null;
    private $priceListPriceWithVat = null;
    private $backbarCharges = null;
    private $lengthInMinutes = null;
    private $setupTimeInMinutes = null;
    private $cleanupTimeInMinutes = null;
    private $walkInService = null;
    private $longAttributes = null;
    private $relatedFiles = null;
    private $variationDescription = null;
    private $parentProductID = null;
    private $type = null;
    private $FIFOCost = null;
    private $purchasePrice = null;
    private $warehouses = null;
    private $productPackages = null;
    private $temporaryUUID = null;
    private $registryNumber = null;
    private $alcoholPercentage = null;
    private $batches = null;
    private $exciseDeclaration = null;
    private $exciseFermentedProductUnder6 = null;
    private $exciseWineOver6 = null;
    private $exciseFermentedProductOver6 = null;
    private $exciseIntermediateProduct = null;
    private $exciseOtherAlcohol = null;
    private $excisePackaging = null;
    private $addFields = null;
    private $erplyObject = null;
    private $productVariations = null;
    private $images = null;


    /**
     * Gets Response
     *
     * @return ProductPicture[]|null
     */

    public function getImages()
    {
        return $this->images;
    }

    public function getProductVariations()
    {
        return $this->productVariations;
    }


    private function getAddFields()
    {
        return $this->addFields;
    }

    public function setAddFields($addFields)
    {
        $this->addFields = $addFields;
    }

    /**
     * @param null $temporaryUUID
     */
    public function setTemporaryUUID($temporaryUUID): void
    {
        $this->temporaryUUID = $temporaryUUID;
    }

    /**
     * @return null
     */
    public function getTemporaryUUID()
    {
        return $this->temporaryUUID;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            $this->erplyObject = $record;

            if (property_exists($record, "productID")) {
                $this->productID = $record->productID;
            }
            if (property_exists($record, "productVariations")) {
                $this->productVariations = $record->productVariations;
            }
            if (property_exists($record, "netPrice")) {
                $this->netPrice = $record->netPrice;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "code")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code4")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code5")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code6")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code7")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code8")) {
                $this->code = $record->code;
            }
            if (property_exists($record, "code2")) {
                $this->code2 = $record->code2;
            }
            if (property_exists($record, "code3")) {
                $this->code3 = $record->code3;
            }
            if (property_exists($record, "supplierCode")) {
                $this->supplierCode = $record->supplierCode;
            }
            if (property_exists($record, "groupID")) {
                $this->groupID = $record->groupID;
            }
            if (property_exists($record, "price")) {
                $this->price = $record->price;
            }
            if (property_exists($record, "active")) {
                $this->active = $record->active;
            }
            if (property_exists($record, "displayedInWebshop")) {
                $this->displayedInWebshop = $record->displayedInWebshop;
            }
            if (property_exists($record, "seriesID")) {
                $this->seriesID = $record->seriesID;
            }
            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
            }
            if (property_exists($record, "unitID")) {
                $this->unitID = $record->unitID;
            }
            if (property_exists($record, "vatrateID")) {
                $this->vatrateID = $record->vatrateID;
            }
            if (property_exists($record, "hasQuickSelectButton")) {
                $this->hasQuickSelectButton = $record->hasQuickSelectButton;
            }
            if (property_exists($record, "isGiftCard")) {
                $this->isGiftCard = $record->isGiftCard;
            }
            if (property_exists($record, "nonDiscountable")) {
                $this->nonDiscountable = $record->nonDiscountable;
            }
            if (property_exists($record, "nonRefundable")) {
                $this->nonRefundable = $record->nonRefundable;
            }
            if (property_exists($record, "manufacturerName")) {
                $this->manufacturerName = $record->manufacturerName;
            }
            if (property_exists($record, "priorityGroupID")) {
                $this->priorityGroupID = $record->priorityGroupID;
            }
            if (property_exists($record, "countryOfOriginID")) {
                $this->countryOfOriginID = $record->countryOfOriginID;
            }
            if (property_exists($record, "brandID")) {
                $this->brandID = $record->brandID;
            }
            if (property_exists($record, "length")) {
                $this->length = $record->length;
            }
            if (property_exists($record, "width")) {
                $this->width = $record->width;
            }
            if (property_exists($record, "height")) {
                $this->height = $record->height;
            }
            if (property_exists($record, "netWeight")) {
                $this->netWeight = $record->netWeight;
            }
            if (property_exists($record, "grossWeight")) {
                $this->grossWeight = $record->grossWeight;
            }
            if (property_exists($record, "volume")) {
                $this->volume = $record->volume;
            }
            if (property_exists($record, "locationInWarehouseID")) {
                $this->locationInWarehouseID = $record->locationInWarehouseID;
            }
            if (property_exists($record, "locationInWarehouseName")) {
                $this->locationInWarehouseName = $record->locationInWarehouseName;
            }
            if (property_exists($record, "locationInWarehouseText")) {
                $this->locationInWarehouseText = $record->locationInWarehouseText;
            }
            if (property_exists($record, "description")) {
                $this->description = $record->description;
            }
            if (property_exists($record, "longdesc")) {
                $this->longdesc = $record->longdesc;
            }
            if (property_exists($record, "descriptionENG")) {
                $this->descriptionENG = $record->descriptionENG;
            }
            if (property_exists($record, "longdescENG")) {
                $this->longdescENG = $record->longdescENG;
            }
            if (property_exists($record, "descriptionRUS")) {
                $this->descriptionRUS = $record->descriptionRUS;
            }
            if (property_exists($record, "longdescRUS")) {
                $this->longdescRUS = $record->longdescRUS;
            }
            if (property_exists($record, "descriptionFIN")) {
                $this->descriptionFIN = $record->descriptionFIN;
            }
            if (property_exists($record, "longdescFIN")) {
                $this->longdescFIN = $record->longdescFIN;
            }
            if (property_exists($record, "containerID")) {
                $this->containerID = $record->containerID;
            }
            if (property_exists($record, "cost")) {
                $this->cost = $record->cost;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "addedByUsername")) {
                $this->addedByUsername = $record->addedByUsername;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "lastModifiedByUsername")) {
                $this->lastModifiedByUsername = $record->lastModifiedByUsername;
            }
            if (property_exists($record, "vatrate")) {
                $this->vatrate = $record->vatrate;
            }
            if (property_exists($record, "priceWithVat")) {
                $this->priceWithVAT = $record->priceWithVat;
            }
            if (property_exists($record, "unitName")) {
                $this->unitName = $record->unitName;
            }
            if (property_exists($record, "brandName")) {
                $this->brandName = $record->brandName;
            }
            if (property_exists($record, "seriesName")) {
                $this->seriesName = $record->seriesName;
            }
            if (property_exists($record, "groupName")) {
                $this->groupName = $record->groupName;
            }
            if (property_exists($record, "supplierName")) {
                $this->supplierName = $record->supplierName;
            }
            if (property_exists($record, "categoryID")) {
                $this->categoryID = $record->categoryID;
            }
            if (property_exists($record, "categoryName")) {
                $this->categoryName = $record->categoryName;
            }
            if (property_exists($record, "status")) {
                $this->status = $record->status;
            }
            if (property_exists($record, "taxFree")) {
                $this->taxFree = $record->taxFree;
            }
            if (property_exists($record, "isRegularGiftCard")) {
                $this->isRegularGiftCard = $record->isRegularGiftCard;
            }
            if (property_exists($record, "nonStockProduct")) {
                $this->nonStockProduct = $record->nonStockProduct;
            }
            if (property_exists($record, "cashierMustEnterPrice")) {
                $this->cashierMustEnterPrice = $record->cashierMustEnterPrice;
            }
            if (property_exists($record, "rewardPointsNotAllowed")) {
                $this->rewardPointsNotAllowed = $record->rewardPointsNotAllowed;
            }
            if (property_exists($record, "reorderMultiple")) {
                $this->reorderMultiple = $record->reorderMultiple;
            }
            if (property_exists($record, "packagingType")) {
                $this->packagingType = $record->packagingType;
            }
            if (property_exists($record, "backbarCharges")) {
                $this->backbarCharges = $record->backbarCharges;
            }
            if (property_exists($record, "lengthInMinutes")) {
                $this->lengthInMinutes = $record->lengthInMinutes;
            }
            if (property_exists($record, "setupTimeInMinutes")) {
                $this->setupTimeInMinutes = $record->setupTimeInMinutes;
            }
            if (property_exists($record, "cleanupTimeInMinutes")) {
                $this->cleanupTimeInMinutes = $record->cleanupTimeInMinutes;
            }
            if (property_exists($record, "walkInService")) {
                $this->walkInService = $record->walkInService;
            }
            if (property_exists($record, "longAttributes")) {
                $this->longAttributes = $record->longAttributes;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "registryNumber")) {
                $this->registryNumber = $record->registryNumber;
            }
            if (property_exists($record, "alcoholPercentage")) {
                $this->alcoholPercentage = $record->alcoholPercentage;
            }
            if (property_exists($record, "batches")) {
                $this->batches = $record->batches;
            }
            if (property_exists($record, "exciseDeclaration")) {
                $this->exciseDeclaration = $record->exciseDeclaration;
            }
            if (property_exists($record, "exciseFermentedProductUnder6")) {
                $this->exciseFermentedProductUnder6 = $record->exciseFermentedProductUnder6;
            }
            if (property_exists($record, "exciseWineOver6")) {
                $this->exciseWineOver6 = $record->exciseWineOver6;
            }
            if (property_exists($record, "exciseFermentedProductOver6")) {
                $this->exciseFermentedProductOver6 = $record->exciseFermentedProductOver6;
            }
            if (property_exists($record, "exciseIntermediateProduct")) {
                $this->exciseIntermediateProduct = $record->exciseIntermediateProduct;
            }
            if (property_exists($record, "exciseOtherAlcohol")) {
                $this->exciseOtherAlcohol = $record->exciseOtherAlcohol;
            }
            if (property_exists($record, "excisePackaging")) {
                $this->excisePackaging = $record->excisePackaging;
            }
            if (property_exists($record, "parentProductID")) {
                $this->parentProductID = $record->parentProductID;
            }
            if (property_exists($record, "FIFOCost")) {
                $this->FIFOCost = $record->FIFOCost;
            }
            if (property_exists($record, "priceListPriceWithVat")) {
                $this->priceListPriceWithVat = $record->priceListPriceWithVat;
            }
            if (property_exists($record, "purchasePrice")) {
                $this->purchasePrice = $record->purchasePrice;
            }
            if (property_exists($record, "productPackages")) {
                $this->productPackages = $record->productPackages;
            }
            if (property_exists($record, "priceListPrice")) {
                $this->priceListPrice = $record->priceListPrice;
            }
            if (property_exists($record, "relatedFiles")) {
                $this->relatedFiles = $record->relatedFiles;
            }
            if (property_exists($record, "variationDescription")) {
                $this->variationDescription = $record->variationDescription;
            }
            if (property_exists($record, "warehouses")) {
                $this->warehouses = $record->warehouses;
            }
            if (property_exists($record, "requestID")) {
                $this->requestID = $record->requestID;
            }

            if (property_exists($record, "images")) {
                $arr_images = [];
                foreach ($record->images as $image) {
                    array_push($arr_images, new ProductPicture($image));
                }
                $this->images = $arr_images;
            }
        }
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

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveProduct"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveProduct"]);
        }
        if ($this->getProductID() != null) {
            $arr_query = array_merge($arr_query, ["productID" => $this->getProductID()]);
        }
        if ($this->getTemporaryUUID() != null) {
            $arr_query = array_merge($arr_query, ["temporaryUUID" => $this->getTemporaryUUID()]);
        }
        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getCode2() != null) {
            $arr_query = array_merge($arr_query, ["code2" => $this->getCode2()]);
        }
        if ($this->getCode3() != null) {
            $arr_query = array_merge($arr_query, ["code3" => $this->getCode3()]);
        }
        if ($this->getCode4() != null) {
            $arr_query = array_merge($arr_query, ["code4" => $this->getCode4()]);
        }
        if ($this->getCode5() != null) {
            $arr_query = array_merge($arr_query, ["code5" => $this->getCode5()]);
        }
        if ($this->getCode6() != null) {
            $arr_query = array_merge($arr_query, ["code6" => $this->getCode6()]);
        }
        if ($this->getCode7() != null) {
            $arr_query = array_merge($arr_query, ["code7" => $this->getCode7()]);
        }
        if ($this->getCode8() != null) {
            $arr_query = array_merge($arr_query, ["code8" => $this->getCode8()]);
        }
        if ($this->getSupplierCode() != null) {
            $arr_query = array_merge($arr_query, ["supplierCode" => $this->getSupplierCode()]);
        }
        if ($this->getGroupID() != null) {
            $arr_query = array_merge($arr_query, ["groupID" => $this->getGroupID()]);
        }
        if ($this->getPrice() != null) {
            $arr_query = array_merge($arr_query, ["price" => $this->getPrice()]);
        }
        if ($this->getActive() != null) {
            $arr_query = array_merge($arr_query, ["active" => $this->getActive()]);
        }
        if ($this->getDisplayedInWebshop() != null) {
            $arr_query = array_merge($arr_query, ["displayedInWebshop" => $this->getDisplayedInWebshop()]);
        }
        if ($this->getSeriesID() != null) {
            $arr_query = array_merge($arr_query, ["seriesID" => $this->getSeriesID()]);
        }
        if ($this->getSupplierID() != null) {
            $arr_query = array_merge($arr_query, ["supplierID" => $this->getSupplierID()]);
        }
        if ($this->getUnitID() != null) {
            $arr_query = array_merge($arr_query, ["unitID" => $this->getUnitID()]);
        }
        if ($this->getVatrateID() != null) {
            $arr_query = array_merge($arr_query, ["vatrateID" => $this->getVatrateID()]);
        }
        if ($this->getHasQuickSelectButton() != null) {
            $arr_query = array_merge($arr_query, ["hasQuickSelectButton" => $this->getHasQuickSelectButton()]);
        }
        if ($this->getIsGiftCard() != null) {
            $arr_query = array_merge($arr_query, ["isGiftCard" => $this->getIsGiftCard()]);
        }
        if ($this->getNonDiscountable() != null) {
            $arr_query = array_merge($arr_query, ["nonDiscountable" => $this->getNonDiscountable()]);
        }
        if ($this->getNonRefundable() != null) {
            $arr_query = array_merge($arr_query, ["nonRefundable" => $this->getNonRefundable()]);
        }
        if ($this->getManufacturerName() != null) {
            $arr_query = array_merge($arr_query, ["manufacturerName" => $this->getManufacturerName()]);
        }
        if ($this->getPriorityGroupID() != null) {
            $arr_query = array_merge($arr_query, ["priorityGroupID" => $this->getPriorityGroupID()]);
        }
        if ($this->getCountryOfOriginID() != null) {
            $arr_query = array_merge($arr_query, ["countryOfOriginID" => $this->getCountryOfOriginID()]);
        }
        if ($this->getBrandID() != null) {
            $arr_query = array_merge($arr_query, ["brandID" => $this->getBrandID()]);
        }
        if ($this->getLength() != null) {
            $arr_query = array_merge($arr_query, ["length" => $this->getLength()]);
        }
        if ($this->getWidth() != null) {
            $arr_query = array_merge($arr_query, ["width" => $this->getWidth()]);
        }
        if ($this->getHeight() != null) {
            $arr_query = array_merge($arr_query, ["height" => $this->getHeight()]);
        }
        if ($this->getNetWeight() != null) {
            $arr_query = array_merge($arr_query, ["netWeight" => $this->getNetWeight()]);
        }
        if ($this->getGrossWeight() != null) {
            $arr_query = array_merge($arr_query, ["grossWeight" => $this->getGrossWeight()]);
        }
        if ($this->getVolume() != null) {
            $arr_query = array_merge($arr_query, ["volume" => $this->getVolume()]);
        }
        if ($this->getLocationInWarehouseID() != null) {
            $arr_query = array_merge($arr_query, ["locationInWarehouseID" => $this->getLocationInWarehouseID()]);
        }
        if ($this->getLocationInWarehouseName() != null) {
            $arr_query = array_merge($arr_query, ["locationInWarehouseName" => $this->getLocationInWarehouseName()]);
        }
        if ($this->getLocationInWarehouseText() != null) {
            $arr_query = array_merge($arr_query, ["locationInWarehouseText" => $this->getLocationInWarehouseText()]);
        }
        if ($this->getDescription() != null) {
            $arr_query = array_merge($arr_query, ["description" => $this->getDescription()]);
        }
        if ($this->getLongdesc() != null) {
            $arr_query = array_merge($arr_query, ["longdesc" => $this->getLongdesc()]);
        }
        if ($this->getDescriptionENG() != null) {
            $arr_query = array_merge($arr_query, ["descriptionENG" => $this->getDescriptionENG()]);
        }
        if ($this->getLongdescENG() != null) {
            $arr_query = array_merge($arr_query, ["longdescENG" => $this->getLongdescENG()]);
        }
        if ($this->getDescriptionRUS() != null) {
            $arr_query = array_merge($arr_query, ["descriptionRUS" => $this->getDescriptionRUS()]);
        }
        if ($this->getLongdescRUS() != null) {
            $arr_query = array_merge($arr_query, ["longdescRUS" => $this->getLongdescRUS()]);
        }
        if ($this->getDescriptionFIN() != null) {
            $arr_query = array_merge($arr_query, ["descriptionFIN" => $this->getDescriptionFIN()]);
        }
        if ($this->getLongdescFIN() != null) {
            $arr_query = array_merge($arr_query, ["longdescFIN" => $this->getLongdescFIN()]);
        }
        if ($this->getContainerID() != null) {
            $arr_query = array_merge($arr_query, ["containerID" => $this->getContainerID()]);
        }
        if ($this->getCost() != null) {
            $arr_query = array_merge($arr_query, ["cost" => $this->getCost()]);
        }
        if ($this->getAdded() != null) {
            $arr_query = array_merge($arr_query, ["added" => $this->getAdded()]);
        }
        if ($this->getAddedByUsername() != null) {
            $arr_query = array_merge($arr_query, ["addedByUsername" => $this->getAddedByUsername()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getLastModifiedByUsername() != null) {
            $arr_query = array_merge($arr_query, ["lastModifiedByUsername" => $this->getLastModifiedByUsername()]);
        }
        if ($this->getVatrate() != null) {
            $arr_query = array_merge($arr_query, ["vatrate" => $this->getVatrate()]);
        }
        if ($this->getPriceWithVAT() != null) {
            $arr_query = array_merge($arr_query, ["priceWithVAT" => $this->getPriceWithVAT()]);
        }
        if ($this->getUnitName() != null) {
            $arr_query = array_merge($arr_query, ["unitName" => $this->getUnitName()]);
        }
        if ($this->getBrandName() != null) {
            $arr_query = array_merge($arr_query, ["brandName" => $this->getBrandName()]);
        }
        if ($this->getSeriesName() != null) {
            $arr_query = array_merge($arr_query, ["seriesName" => $this->getSeriesName()]);
        }
        if ($this->getGroupName() != null) {
            $arr_query = array_merge($arr_query, ["groupName" => $this->getGroupName()]);
        }
        if ($this->getSupplierName() != null) {
            $arr_query = array_merge($arr_query, ["supplierName" => $this->getSupplierName()]);
        }
        if ($this->getCategoryID() != null) {
            $arr_query = array_merge($arr_query, ["categoryID" => $this->getCategoryID()]);
        }
        if ($this->getCategoryName() != null) {
            $arr_query = array_merge($arr_query, ["categoryName" => $this->getCategoryName()]);
        }
        if ($this->getStatus() != null) {
            $arr_query = array_merge($arr_query, ["status" => $this->getStatus()]);
        }
        if ($this->getTaxFree() != null) {
            $arr_query = array_merge($arr_query, ["taxFree" => $this->getTaxFree()]);
        }
        if ($this->getIsRegularGiftCard() != null) {
            $arr_query = array_merge($arr_query, ["isRegularGiftCard" => $this->getIsRegularGiftCard()]);
        }
        if ($this->getNonStockProduct() != null) {
            $arr_query = array_merge($arr_query, ["nonStockProduct" => $this->getNonStockProduct()]);
        }
        if ($this->getCashierMustEnterPrice() != null) {
            $arr_query = array_merge($arr_query, ["cashierMustEnterPrice" => $this->getCashierMustEnterPrice()]);
        }
        if ($this->getRewardPointsNotAllowed() != null) {
            $arr_query = array_merge($arr_query, ["rewardPointsNotAllowed" => $this->getRewardPointsNotAllowed()]);
        }
        if ($this->getReorderMultiple() != null) {
            $arr_query = array_merge($arr_query, ["reorderMultiple" => $this->getReorderMultiple()]);
        }
        if ($this->getPackagingType() != null) {
            $arr_query = array_merge($arr_query, ["packagingType" => $this->getPackagingType()]);
        }
        if ($this->getBackbarCharges() != null) {
            $arr_query = array_merge($arr_query, ["backbarCharges" => $this->getBackbarCharges()]);
        }
        if ($this->getLengthInMinutes() != null) {
            $arr_query = array_merge($arr_query, ["lengthInMinutes" => $this->getLengthInMinutes()]);
        }
        if ($this->getSetupTimeInMinutes() != null) {
            $arr_query = array_merge($arr_query, ["setupTimeInMinutes" => $this->getSetupTimeInMinutes()]);
        }
        if ($this->getCleanupTimeInMinutes() != null) {
            $arr_query = array_merge($arr_query, ["cleanupTimeInMinutes" => $this->getCleanupTimeInMinutes()]);
        }
        if ($this->getWalkInService() != null) {
            $arr_query = array_merge($arr_query, ["walkInService" => $this->getWalkInService()]);
        }
        if ($this->getLongAttributes() != null) {
            $arr_query = array_merge($arr_query, ["longAttributes" => $this->getLongAttributes()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getRegistryNumber() != null) {
            $arr_query = array_merge($arr_query, ["registryNumber" => $this->getRegistryNumber()]);
        }
        if ($this->getAlcoholPercentage() != null) {
            $arr_query = array_merge($arr_query, ["alcoholPercentage" => $this->getAlcoholPercentage()]);
        }
        if ($this->getBatches() != null) {
            $arr_query = array_merge($arr_query, ["batches" => $this->getBatches()]);
        }
        if ($this->getExciseDeclaration() != null) {
            $arr_query = array_merge($arr_query, ["exciseDeclaration" => $this->getExciseDeclaration()]);
        }
        if ($this->getExciseFermentedProductUnder6() != null) {
            $arr_query = array_merge($arr_query, ["exciseFermentedProductUnder6" => $this->getExciseFermentedProductUnder6()]);
        }
        if ($this->getExciseWineOver6() != null) {
            $arr_query = array_merge($arr_query, ["exciseWineOver6" => $this->getExciseWineOver6()]);
        }
        if ($this->getExciseFermentedProductOver6() != null) {
            $arr_query = array_merge($arr_query, ["exciseFermentedProductOver6" => $this->getExciseFermentedProductOver6()]);
        }
        if ($this->getExciseIntermediateProduct() != null) {
            $arr_query = array_merge($arr_query, ["exciseIntermediateProduct" => $this->getExciseIntermediateProduct()]);
        }
        if ($this->getExciseOtherAlcohol() != null) {
            $arr_query = array_merge($arr_query, ["exciseOtherAlcohol" => $this->getExciseOtherAlcohol()]);
        }
        if ($this->getParentProductID() != null) {
            $arr_query = array_merge($arr_query, ["parentProductID" => $this->getParentProductID()]);
        }
        if ($this->getExcisePackaging() != null) {
            $arr_query = array_merge($arr_query, ["excisePackaging" => $this->getExcisePackaging()]);
        }
        if ($this->getNetPrice() != null) {
            $arr_query = array_merge($arr_query, ["netPrice" => $this->getNetPrice()]);
        }
        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }

        if ($this->getAddFields() != null) {
            $arr_query = array_merge($arr_query, $this->getAddFields());
        }

        return $arr_query;
    }

    public function getNetPrice()
    {
        return $this->netPrice;
    }

    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
    }

    public function getProductID()
    {
        return $this->productID;
    }

    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode2()
    {
        return $this->code2;
    }

    public function setCode2($code2)
    {
        $this->code2 = $code2;
    }

    public function getCode3()
    {
        return $this->code3;
    }

    public function setCode3($code3)
    {
        $this->code3 = $code3;
    }

    public function getSupplierCode()
    {
        return $this->supplierCode;
    }

    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;
    }

    public function getGroupID()
    {
        return $this->groupID;
    }

    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getDisplayedInWebshop()
    {
        return $this->displayedInWebshop;
    }

    public function setDisplayedInWebshop($displayedInWebshop)
    {
        $this->displayedInWebshop = $displayedInWebshop;
    }

    public function getSeriesID()
    {
        return $this->seriesID;
    }

    public function setSeriesID($seriesID)
    {
        $this->seriesID = $seriesID;
    }

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        $this->supplierID = $supplierID;
    }

    public function getUnitID()
    {
        return $this->unitID;
    }

    public function setUnitID($unitID)
    {
        $this->unitID = $unitID;
    }

    public function getVatrateID()
    {
        return $this->vatrateID;
    }

    public function setVatrateID($vatrateID)
    {
        $this->vatrateID = $vatrateID;
    }

    public function getHasQuickSelectButton()
    {
        return $this->hasQuickSelectButton;
    }

    public function setHasQuickSelectButton($hasQuickSelectButton)
    {
        $this->hasQuickSelectButton = $hasQuickSelectButton;
    }

    public function getIsGiftCard()
    {
        return $this->isGiftCard;
    }

    public function setIsGiftCard($isGiftCard)
    {
        $this->isGiftCard = $isGiftCard;
    }

    public function getNonDiscountable()
    {
        return $this->nonDiscountable;
    }

    public function setNonDiscountable($nonDiscountable)
    {
        $this->nonDiscountable = $nonDiscountable;
    }

    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }

    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     * @return null
     */
    public function getCode4()
    {
        return $this->code4;
    }

    /**
     * @param null $code4
     */
    public function setCode4($code4): void
    {
        $this->code4 = $code4;
    }

    /**
     * @return null
     */
    public function getCode5()
    {
        return $this->code5;
    }

    /**
     * @param null $code5
     */
    public function setCode5($code5): void
    {
        $this->code5 = $code5;
    }

    /**
     * @return null
     */
    public function getCode6()
    {
        return $this->code6;
    }

    /**
     * @param null $code6
     */
    public function setCode6($code6): void
    {
        $this->code6 = $code6;
    }

    /**
     * @return null
     */
    public function getCode7()
    {
        return $this->code7;
    }

    /**
     * @param null $code7
     */
    public function setCode7($code7): void
    {
        $this->code7 = $code7;
    }

    /**
     * @return null
     */
    public function getCode8()
    {
        return $this->code8;
    }

    /**
     * @param null $code8
     */
    public function setCode8($code8): void
    {
        $this->code8 = $code8;
    }

    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    public function setManufacturerName($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;
    }

    public function getPriorityGroupID()
    {
        return $this->priorityGroupID;
    }

    public function setPriorityGroupID($priorityGroupID)
    {
        $this->priorityGroupID = $priorityGroupID;
    }

    public function getCountryOfOriginID()
    {
        return $this->countryOfOriginID;
    }

    public function setCountryOfOriginID($countryOfOriginID)
    {
        $this->countryOfOriginID = $countryOfOriginID;
    }

    public function getBrandID()
    {
        return $this->brandID;
    }

    public function setBrandID($brandID)
    {
        $this->brandID = $brandID;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    public function getLocationInWarehouseID()
    {
        return $this->locationInWarehouseID;
    }

    public function setLocationInWarehouseID($locationInWarehouseID)
    {
        $this->locationInWarehouseID = $locationInWarehouseID;
    }

    public function getLocationInWarehouseName()
    {
        return $this->locationInWarehouseName;
    }

    public function setLocationInWarehouseName($locationInWarehouseName)
    {
        $this->locationInWarehouseName = $locationInWarehouseName;
    }

    public function getLocationInWarehouseText()
    {
        return $this->locationInWarehouseText;
    }

    public function setLocationInWarehouseText($locationInWarehouseText)
    {
        $this->locationInWarehouseText = $locationInWarehouseText;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getLongdesc()
    {
        return $this->longdesc;
    }

    public function setLongdesc($longdesc)
    {
        $this->longdesc = $longdesc;
    }

    public function getDescriptionENG()
    {
        return $this->descriptionENG;
    }

    public function setDescriptionENG($descriptionENG)
    {
        $this->descriptionENG = $descriptionENG;
    }

    public function getLongdescENG()
    {
        return $this->longdescENG;
    }

    public function setLongdescENG($longdescENG)
    {
        $this->longdescENG = $longdescENG;
    }

    public function getDescriptionRUS()
    {
        return $this->descriptionRUS;
    }

    public function setDescriptionRUS($descriptionRUS)
    {
        $this->descriptionRUS = $descriptionRUS;
    }

    public function getLongdescRUS()
    {
        return $this->longdescRUS;
    }

    public function setLongdescRUS($longdescRUS)
    {
        $this->longdescRUS = $longdescRUS;
    }

    public function getDescriptionFIN()
    {
        return $this->descriptionFIN;
    }

    public function setDescriptionFIN($descriptionFIN)
    {
        $this->descriptionFIN = $descriptionFIN;
    }

    public function getLongdescFIN()
    {
        return $this->longdescFIN;
    }

    public function setLongdescFIN($longdescFIN)
    {
        $this->longdescFIN = $longdescFIN;
    }

    public function getContainerID()
    {
        return $this->containerID;
    }

    public function setContainerID($containerID)
    {
        $this->containerID = $containerID;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getAdded()
    {
        return $this->added;
    }

    public function setAdded($added)
    {
        $this->added = $added;
    }

    public function getAddedByUsername()
    {
        return $this->addedByUsername;
    }

    public function setAddedByUsername($addedByUsername)
    {
        $this->addedByUsername = $addedByUsername;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getLastModifiedByUsername()
    {
        return $this->lastModifiedByUsername;
    }

    public function setLastModifiedByUsername($lastModifiedByUsername)
    {
        $this->lastModifiedByUsername = $lastModifiedByUsername;
    }

    public function getVatrate()
    {
        return $this->vatrate;
    }

    public function setVatrate($vatrate)
    {
        $this->vatrate = $vatrate;
    }

    public function getPriceWithVAT()
    {
        return $this->priceWithVAT;
    }

    public function setPriceWithVAT($priceWithVAT)
    {
        $this->priceWithVAT = $priceWithVAT;
    }

    public function getUnitName()
    {
        return $this->unitName;
    }

    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
    }

    public function getSeriesName()
    {
        return $this->seriesName;
    }

    public function setSeriesName($seriesName)
    {
        $this->seriesName = $seriesName;
    }

    public function getGroupName()
    {
        return $this->groupName;
    }

    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    }

    public function getCategoryID()
    {
        return $this->categoryID;
    }

    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getTaxFree()
    {
        return $this->taxFree;
    }

    public function setTaxFree($taxFree)
    {
        $this->taxFree = $taxFree;
    }

    public function getIsRegularGiftCard()
    {
        return $this->isRegularGiftCard;
    }

    public function setIsRegularGiftCard($isRegularGiftCard)
    {
        $this->isRegularGiftCard = $isRegularGiftCard;
    }

    public function getNonStockProduct()
    {
        return $this->nonStockProduct;
    }

    public function setNonStockProduct($nonStockProduct)
    {
        $this->nonStockProduct = $nonStockProduct;
    }

    public function getCashierMustEnterPrice()
    {
        return $this->cashierMustEnterPrice;
    }

    public function setCashierMustEnterPrice($cashierMustEnterPrice)
    {
        $this->cashierMustEnterPrice = $cashierMustEnterPrice;
    }

    public function getRewardPointsNotAllowed()
    {
        return $this->rewardPointsNotAllowed;
    }

    public function setRewardPointsNotAllowed($rewardPointsNotAllowed)
    {
        $this->rewardPointsNotAllowed = $rewardPointsNotAllowed;
    }

    public function getReorderMultiple()
    {
        return $this->reorderMultiple;
    }

    public function setReorderMultiple($reorderMultiple)
    {
        $this->reorderMultiple = $reorderMultiple;
    }

    public function getPackagingType()
    {
        return $this->packagingType;
    }

    public function setPackagingType($packagingType)
    {
        $this->packagingType = $packagingType;
    }

    public function getBackbarCharges()
    {
        return $this->backbarCharges;
    }

    public function setBackbarCharges($backbarCharges)
    {
        $this->backbarCharges = $backbarCharges;
    }

    public function getLengthInMinutes()
    {
        return $this->lengthInMinutes;
    }

    public function setLengthInMinutes($lengthInMinutes)
    {
        $this->lengthInMinutes = $lengthInMinutes;
    }

    public function getSetupTimeInMinutes()
    {
        return $this->setupTimeInMinutes;
    }

    public function setSetupTimeInMinutes($setupTimeInMinutes)
    {
        $this->setupTimeInMinutes = $setupTimeInMinutes;
    }

    public function getCleanupTimeInMinutes()
    {
        return $this->cleanupTimeInMinutes;
    }

    public function setCleanupTimeInMinutes($cleanupTimeInMinutes)
    {
        $this->cleanupTimeInMinutes = $cleanupTimeInMinutes;
    }

    public function getWalkInService()
    {
        return $this->walkInService;
    }

    public function setWalkInService($walkInService)
    {
        $this->walkInService = $walkInService;
    }

    public function getLongAttributes()
    {
        return $this->longAttributes;
    }

    public function setLongAttributes($longAttributes)
    {
        $this->longAttributes = $longAttributes;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getRegistryNumber()
    {
        return $this->registryNumber;
    }

    public function setRegistryNumber($registryNumber)
    {
        $this->registryNumber = $registryNumber;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }

    public function setAlcoholPercentage($alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getBatches()
    {
        return $this->batches;
    }

    public function setBatches($batches)
    {
        $this->batches = $batches;
    }

    public function getExciseDeclaration()
    {
        return $this->exciseDeclaration;
    }

    public function setExciseDeclaration($exciseDeclaration)
    {
        $this->exciseDeclaration = $exciseDeclaration;
    }

    public function getExciseFermentedProductUnder6()
    {
        return $this->exciseFermentedProductUnder6;
    }

    public function setExciseFermentedProductUnder6($exciseFermentedProductUnder6)
    {
        $this->exciseFermentedProductUnder6 = $exciseFermentedProductUnder6;
    }

    public function getExciseWineOver6()
    {
        return $this->exciseWineOver6;
    }

    public function setExciseWineOver6($exciseWineOver6)
    {
        $this->exciseWineOver6 = $exciseWineOver6;
    }

    public function getExciseFermentedProductOver6()
    {
        return $this->exciseFermentedProductOver6;
    }

    public function setExciseFermentedProductOver6($exciseFermentedProductOver6)
    {
        $this->exciseFermentedProductOver6 = $exciseFermentedProductOver6;
    }

    public function getExciseIntermediateProduct()
    {
        return $this->exciseIntermediateProduct;
    }

    public function setExciseIntermediateProduct($exciseIntermediateProduct)
    {
        $this->exciseIntermediateProduct = $exciseIntermediateProduct;
    }

    public function getExciseOtherAlcohol()
    {
        return $this->exciseOtherAlcohol;
    }

    public function setExciseOtherAlcohol($exciseOtherAlcohol)
    {
        $this->exciseOtherAlcohol = $exciseOtherAlcohol;
    }

    public function getExcisePackaging()
    {
        return $this->excisePackaging;
    }

    public function setExcisePackaging($excisePackaging)
    {
        $this->excisePackaging = $excisePackaging;
    }

    public function getPriceListPrice()
    {
        return $this->priceListPrice;
    }

    public function setPriceListPrice($priceListPrice): void
    {
        $this->priceListPrice = $priceListPrice;
    }

    public function getPriceListPriceWithVat()
    {
        return $this->priceListPriceWithVat;
    }

    public function setPriceListPriceWithVat($priceListPriceWithVat): void
    {
        $this->priceListPriceWithVat = $priceListPriceWithVat;
    }

    public function getRelatedFiles()
    {
        return $this->relatedFiles;
    }

    public function setRelatedFiles($relatedFiles): void
    {
        $this->relatedFiles = $relatedFiles;
    }

    public function getVariationDescription()
    {
        return $this->variationDescription;
    }

    public function setVariationDescription($variationDescription): void
    {
        $this->variationDescription = $variationDescription;
    }

    public function getParentProductID()
    {
        return $this->parentProductID;
    }

    public function setParentProductID($parentProductID): void
    {
        $this->parentProductID = $parentProductID;
    }

    public function getFIFOCost()
    {
        return $this->FIFOCost;
    }

    public function setFIFOCost($FIFOCost): void
    {
        $this->FIFOCost = $FIFOCost;
    }

    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    public function setPurchasePrice($purchasePrice): void
    {
        $this->purchasePrice = $purchasePrice;
    }

    public function getWarehouses()
    {
        return $this->warehouses;
    }

    public function setWarehouses($warehouses): void
    {
        $this->warehouses = $warehouses;
    }

    public function getProductPackages()
    {
        return $this->productPackages;
    }

    public function setProductPackages($productPackages): void
    {
        $this->productPackages = $productPackages;
    }

    public function getErplyObject()
    {
        return $this->erplyObject;
    }
}
