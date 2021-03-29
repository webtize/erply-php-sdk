<?php


namespace Webtize\ErplySDK;


class SaveAddMatrixDimensions
{
    private $status = null;
    private $records = null;

    public function __construct($response)
    {
        if (property_exists($response, 'status')) {
            $this->status = new Status($response->status);
        }
        if (property_exists($response, 'records')) {
            if ($this->status->getRequest() == 'addItemToMatrixDimension' || $this->status->getRequestName() == 'addItemToMatrixDimension') {
                $arr_records = [];
                foreach ($response->records as $record) {
                    array_push($arr_records, new SaveAddMatrixDimention($record));
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
     * @return SaveAddMatrixDimention[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }
}