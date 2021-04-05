<?php


namespace Webtize\ErplySDK;


class PimSuppliers
{
    private $status = null;
    private $requests = null;

    public function __construct($response = null)
    {
        if ($response != null) {
            $this->status = $response['status'];
            $this->requests = [];
            foreach ($response['requests'] as $request) {
                array_push($this->requests, new PimSupplier($request));
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
     * @return PimSupplier[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @param PimSupplier[]|null
     */
    public function setRequests($requests)
    {
        $this->requests = $requests;
    }

}
