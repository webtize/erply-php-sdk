<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaleDocuments
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
                if ($this->status->getRequest() == 'getSalesDocuments' || $this->status->getRequestName() == 'getSalesDocuments') {
                    $arr_records = [];
                    foreach ($response->records as $record) {
                        array_push($arr_records, new SaleDocument($record));
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
     * @return SaleDocument[]|null
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param SaleDocument[]|null $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }

}
