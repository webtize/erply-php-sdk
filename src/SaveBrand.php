<?php


namespace Webtize\ErplySDK;


class SaveBrand
{
    private $brandID = null;

    /**
     * SaveBrand constructor.
     * @param null $brandID
     */
    public function __construct($reocrd)
    {
        $this->brandID = $reocrd->brandID;
    }

    /**
     * @return null
     */
    public function getBrandID()
    {
        return $this->brandID;
    }

}