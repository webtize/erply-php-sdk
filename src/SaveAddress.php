<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveAddress
{
    private $addressID = null;

    /**
     * SaveAddress constructor.
     * @param null $addressID
     */
    public function __construct($record)
    {
        $this->addressID = $record->addressID;
    }

    /**
     * @return null
     */
    public function getAddressID()
    {
        return $this->addressID;
    }

}
