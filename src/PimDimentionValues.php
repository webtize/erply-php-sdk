<?php


namespace Webtize\ErplySDK;


class PimDimentionValues
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = $response['status'];
        $this->requests = [];
        foreach ($response['requests'] as $request) {
            array_push($this->requests, new PimDimentionValue($request));
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
     * @return PimDimentionValue[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
