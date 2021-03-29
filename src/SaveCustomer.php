<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveCustomer
{
    private $customerID = null;
    private $alreadyExists = null;

    /**
     * SaveCustomer constructor.
     * @param null $customerID
     * @param null $alreadyExists
     */
    public function __construct($record)
    {
        $this->customerID = $record->customerID;
        $this->alreadyExists = $record->alreadyExists;
    }


    /**
     * @return null
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @return null
     */
    public function getAlreadyExists()
    {
        return $this->alreadyExists;
    }


}
