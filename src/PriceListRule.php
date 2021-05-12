<?php


namespace Webtize\ErplySDK;


class PriceListRule
{

    private $type = null;
    private $price = null;
    private $priceWithVat = null;
    private $id = null;
    private $ruleID = null;

    public function __construct($records = null)
    {
        if ($records != null) {
            $this->type = $records->type;
            $this->price = $records->price;
            $this->priceWithVat = $records->priceWithVat;
            $this->id = $records->id;
            $this->ruleID = $records->ruleID;
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