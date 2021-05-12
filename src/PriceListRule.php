<?php


namespace Webtize\ErplySDK;


class PriceListRule
{

    private $type = null;
    private $price = null;
    private $priceWithVat = null;
    private $id = null;
    private $ruleID = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "price")) {
                $this->price = $record->price;
            }
            if (property_exists($record, "priceWithVat")) {
                $this->priceWithVat = $record->priceWithVat;
            }
            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "ruleID")) {
                $this->ruleID = $record->ruleID;
            }
        }
    }


    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
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
    public function getPriceWithVat()
    {
        return $this->priceWithVat;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getRuleID()
    {
        return $this->ruleID;
    }


}