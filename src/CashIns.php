<?php

namespace Webtize\ErplySDK;

class CashIns
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
                if ($this->status->getRequest() == 'getCashIns' || $this->status->getRequestName() == 'getCashIns') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new CashIn($record));
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
     * @return CashIn[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param CashIn[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
}