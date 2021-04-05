<?php


namespace Webtize\ErplySDK;


class PimProductCategories
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = $response['status'];
        $this->requests = [];
        foreach ($response['requests'] as $request) {
            array_push($this->requests, new PimProductCategory($request));
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
     * @return PimProductCategory[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
