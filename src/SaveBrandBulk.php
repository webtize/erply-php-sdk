<?php


namespace Webtize\ErplySDK;


class SaveBrandBulk
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = new StatusBulk($response[0]->status);
        $arr_req = [];
        foreach ($response[0]->requests as $record) {
            array_push($arr_req, new SaveBrands($record));
        }
        $this->requests = $arr_req;
    }


    /**
     * Gets Bulk Status
     *
     * @return StatusBulk
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Gets Response
     *
     * @return SaveBrands[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}