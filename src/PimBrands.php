<?php


namespace Webtize\ErplySDK;


class PimBrands
{
    private $status = null;
    private $requests = null;

    public function __construct($response = null)
    {
        if ($response != null) {
            $this->status = $response['status'];
            $this->requests = [];
            foreach ($response['requests'] as $request) {
                array_push($this->requests, new PimBrand($request));
            }
        }
    }

    public function getQuery()
    {
        $arr_query = [];
        foreach ($this->getRequests() as $request) {
            array_push($arr_query, $request->getQuery());
        }
        return ['requests' => $arr_query];
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return PimBrand[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @param PimBrand[]|null $requests
     */
    public function setRequests($requests)
    {
        $this->requests = $requests;
    }


}
