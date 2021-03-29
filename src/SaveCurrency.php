<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveCurrency
{

    private $currencyID = null;

    /**
     * SaveCurrency constructor.
     * @param null $currencyID
     */
    public function __construct($record)
    {
        $this->currencyID = $record->currencyID;
    }

    /**
     * @return null
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

}
