<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveVatRate
{
private $vatRateID=null;

    /**
     * SaveVatRate constructor.
     * @param null $vatRateID
     */
    public function __construct($record)
    {
        $this->vatRateID = $record->vatRateID;
    }

    /**
     * @return null
     */
    public function getVatRateID()
    {
        return $this->vatRateID;
    }

}
