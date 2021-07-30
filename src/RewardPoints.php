<?php


namespace Webtize\ErplySDK;


class RewardPoints
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
                if ($this->status->getRequest() == 'getEarnedRewardPointRecords' || $this->status->getRequestName() == 'getEarnedRewardPointRecords') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new RewardPoint($record));
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
     * @return RewardPoint[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param RewardPoint[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
}