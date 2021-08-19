<?php

namespace Webtize\ErplySDK;

class UserOperationLogs
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
                if ($this->status->getRequest() == 'getUserOperationsLog' || $this->status->getRequestName() == 'getUserOperationsLog') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new UserOperationsLog($record));
                    }
                    $this->records = $arr_records;
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
     * @return UserOperationsLog[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }
}