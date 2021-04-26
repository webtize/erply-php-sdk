<?php


namespace Webtize\ErplySDK;


class TransactionTotalByType
{
    private $status = null;
    private $data = null;

    public function __construct($response = null)
    {
        if ($response != null) {
            $this->status = $response->status;
            $this->data = [];
            foreach ($response->data as $report) {
                array_push($this->data, new ReportTTBT($report));
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
     * @return ReportTTBT[]|null
     */
    public function getRequests()
    {
        return $this->data;
    }
}
