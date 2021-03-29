<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveWarehouse
{
private $warehouseID = null;

    /**
     * SaveWarehouse constructor.
     * @param null $warehouseID
     */
    public function __construct($record)
    {
        $this->warehouseID = $record->warehouseID;
    }

    /**
     * @return null
     */
    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

}
