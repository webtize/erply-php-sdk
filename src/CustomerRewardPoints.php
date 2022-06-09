<?php

namespace Webtize\ErplySDK;

class CustomerRewardPoints
{

    private $status = null;
    private $records = null;

    public function __construct($response = null)
    {
        if ($response != null) {
            if (property_exists($response, 'status')) {
                $this->status = new Status($response->status);
            }

            if (property_exists($response, 'records')) {
                if ($this->status->getRequest() == 'addCustomerRewardPoints' || $this->status->getRequestName() == 'addCustomerRewardPoints') {
                    $arr_records = [];
                    if ($response->records != null) {
                        foreach ($response->records as $record) {
                            array_push($arr_records, new CustomerRewardPoint($record));
                        }
                        $this->records = $arr_records;
                    }
                }
            }
        }
    }

    /**
     *
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return CustomerRewardPoint[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }


}