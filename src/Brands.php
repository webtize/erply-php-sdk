<?php


namespace Webtize\ErplySDK;


class Brands
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
                if ($this->status->getRequest() == 'getBrands' || $this->status->getRequestName() == 'getBrands') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new Brand($record));
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
     * @return Brand[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param Brand[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
}