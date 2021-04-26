<?php


namespace Webtize\ErplySDK;


class ReportPOS
{
    private $id = null;
    private $name = null;
    private $shopName = null;

    public function __construct($record)
    {
        if ($record != null) {
            $this->id = $record->id;
            $this->name = $record->name;
            $this->shopName = $record->shopName;
        }
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public function getShopName()
    {
        return $this->shopName;
    }

}
