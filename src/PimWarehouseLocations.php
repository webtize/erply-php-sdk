<?php


namespace Webtize\ErplySDK;


class PimWarehouseLocations
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = $response['status'];
        $this->requests = [];
        foreach ($response['requests'] as $request) {
            array_push($this->requests, new PimWarehouseLocation($request));
        }
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return PimWarehouseLocation[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
