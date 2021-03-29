<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveInventoryWriteOff
{
private $inventoryWriteOffID = null;

    /**
     * SaveInventoryWriteOff constructor.
     * @param null $inventoryWriteOffID
     */
    public function __construct($record)
    {
        $this->inventoryWriteOffID = $record->inventoryWriteOffID;
    }

    /**
     * @return null
     */
    public function getInventoryWriteOffID()
    {
        return $this->inventoryWriteOffID;
    }

}
