<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveSupplierGroup
{
private $supplierGroupID = null;

    /**
     * SaveSupplierGroup constructor.
     * @param null $supplierGroupID
     */
    public function __construct($record)
    {
        $this->supplierGroupID = $record->supplierGroupID;
    }

    /**
     * @return null
     */
    public function getSupplierGroupID()
    {
        return $this->supplierGroupID;
    }

}
