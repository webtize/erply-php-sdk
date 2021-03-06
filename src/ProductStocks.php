<?php


namespace Webtize\ErplySDK;


class ProductStocks
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
                if ($this->status->getRequest() == 'getProductStock' || $this->status->getRequestName() == 'getProductStock') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new ProductStock($record));
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
     * @return ProductStock[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param ProductStock[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
}