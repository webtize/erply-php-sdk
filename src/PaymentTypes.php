<?php

namespace Webtize\ErplySDK;

class PaymentTypes
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
                if ($this->status->getRequest() == 'getPaymentTypes' || $this->status->getRequestName() == 'getPaymentTypes') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new PaymentType($record));
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
     * @return PaymentType[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

}