<?php


namespace Webtize\ErplySDK;


class PimSupplierTypes
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = $response['status'];
        $this->requests = [];
        foreach ($response['requests'] as $request) {
            array_push($this->requests, new PimSupplierType($request));
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
     * @return PimSupplierType[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
