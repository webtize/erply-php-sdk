<?php


namespace Webtize\ErplySDK;


class SaveMatrixDimentions
{
    private $status = null;
    private $records = null;

    public function __construct($response)
    {
        if (property_exists($response, 'status')) {
            $this->status = new Status($response->status);
        }
        if (property_exists($response, 'records')) {
            if ($this->status->getRequest() == 'saveMatrixDimension' || $this->status->getRequestName() == 'saveMatrixDimension') {
                $arr_records = [];
                foreach ($response->records as $record) {
                    array_push($arr_records, new SaveMatrixDimention($record));
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
     * @return SaveMatrixDimention[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }
}