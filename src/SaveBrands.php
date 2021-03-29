<?php


namespace Webtize\ErplySDK;


class SaveBrands
{
    private $status = null;
    private $records = null;

    public function __construct($response)
    {
        if (property_exists($response, 'status')) {
            $this->status = new Status($response->status);
        }
        if (property_exists($response, 'records')) {
            if ($this->status->getRequest() == 'saveBrand' || $this->status->getRequestName() == 'saveBrand') {
                $arr_records = [];
                foreach ($response->records as $record) {
                    array_push($arr_records, new SaveBrand($record));
                }
                $this->records = $arr_records;
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
     * @return SaveBrand[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }
}