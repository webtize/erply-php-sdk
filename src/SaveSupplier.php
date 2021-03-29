<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveSupplier
{
    private $supplierID = null;
    private $alreadyExists = null;

    public function __construct($record)
    {
        $this->supplierID = $record->supplierID;
        $this->alreadyExists = $record->alreadyExists;
    }


    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function getAlreadyExists()
    {
        return $this->alreadyExists;
    }
}
