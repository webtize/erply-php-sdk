<?php


namespace Webtize\ErplySDK;


class ProductPrice
{

    private $productID = null;
    private $defaultPrice = null;
    private $defaultPriceWithVAT = null;
    private $specialPrice = null;
    private $specialPriceWithVAT = null;
    private $priceCalculationSteps = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "productID")) {
                $this->productID = $record->productID;
            }
            if (property_exists($record, "defaultPrice")) {
                $this->defaultPrice = $record->defaultPrice;
            }
            if (property_exists($record, "defaultPriceWithVAT")) {
                $this->defaultPriceWithVAT = $record->defaultPriceWithVAT;
            }
            if (property_exists($record, "specialPrice")) {
                $this->specialPrice = $record->specialPrice;
            }
            if (property_exists($record, "specialPriceWithVAT")) {
                $this->specialPriceWithVAT = $record->specialPriceWithVAT;
            }
            if (property_exists($record, "priceCalculationSteps")) {
                $this->priceCalculationSteps = $record->priceCalculationSteps;
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
    public function getDefaultPrice()
    {
        return $this->defaultPrice;
    }

    /**
     * @return null
     */
    public function getDefaultPriceWithVAT()
    {
        return $this->defaultPriceWithVAT;
    }

    /**
     * @return null
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @return null
     */
    public function getSpecialPriceWithVAT()
    {
        return $this->specialPriceWithVAT;
    }

    /**
     * @return null
     */
    public function getPriceCalculationSteps()
    {
        return $this->priceCalculationSteps;
    }

}