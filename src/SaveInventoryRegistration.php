<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveInventoryRegistration
{
    private $inventoryRegistrationID = null;

    /**
     * SaveInventoryRegistration constructor.
     * @param null $inventoryRegistrationID
     */
    public function __construct($record)
    {
        $this->inventoryRegistrationID = $record->inventoryRegistrationID;
    }

    /**
     * @return null
     */
    public function getInventoryRegistrationID()
    {
        return $this->inventoryRegistrationID;
    }



}
