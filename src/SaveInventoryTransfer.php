<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveInventoryTransfer
{

    private $inventoryTransferID =null;

    /**
     * SaveInventoryTransfer constructor.
     * @param null $inventoryTransferID
     */
    public function __construct($record)
    {
            $this->inventoryTransferID = $record->inventoryTransferID;
    }

    /**
     * @return null
     */
    public function getInventoryTransferID()
    {
        return $this->inventoryTransferID;
    }


}
