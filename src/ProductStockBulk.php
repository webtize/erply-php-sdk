<?php


namespace Webtize\ErplySDK;


class ProductStockBulk
{
    private $status = null;
    private $requests = null;


    public function __construct($response)
    {
        $this->status = new StatusBulk($response[0]->status);
        $arr_req = [];
        foreach ($response[0]->requests as $record) {
            array_push($arr_req, new ProductStocks($record));
        }
        $this->requests = $arr_req;
    }


    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Gets Response
     *
     * @return ProductStocks[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}