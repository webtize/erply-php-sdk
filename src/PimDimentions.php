<?php


namespace Webtize\ErplySDK;


class PimDimentions
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = $response['status'];
        $this->requests = [];
        foreach ($response['requests'] as $request) {
            array_push($this->requests, new PimDimention($request));
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
     * @return PimDimention[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
