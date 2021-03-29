<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SavePriceListsBulk
{
    private $status = null;
    private $requests = null;

    public function __construct($response)
    {
        $this->status = new StatusBulk($response[0]->status);
        $arr_req = [];
        foreach ($response[0]->requests as $record) {
            array_push($arr_req, new SavePriceLists($record));
        }
        $this->requests = $arr_req;
    }


    /**
     * Gets Bulk Status
     *
     * @return StatusBulk
     */
    public function getStatus()
    {
        return $this->status;
    }


    /**
     * Gets Response
     *
     * @return SavePriceLists[]|null
     */
    public function getRequests()
    {
        return $this->requests;
    }
}
