<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SavePayment
{
private $paymentID = null;

    /**
     * SavePayment constructor.
     * @param null $paymentID
     */
    public function __construct($record)
    {
        $this->paymentID = $record->paymentID;
    }


    /**
     * @return null
     */
    public function getPaymentID()
    {
        return $this->paymentID;
    }

}
