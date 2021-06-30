<?php


namespace Webtize\ErplySDK;


class SessionKeyUsers
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
                if ($this->status->getRequest() == 'getSessionKeyUser' || $this->status->getRequestName() == 'getSessionKeyUser') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new SessionKeyUser($record));
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
     * @return Supplier[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param SessionKeyUser[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }

}