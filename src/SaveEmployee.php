<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveEmployee
{
private $employeeID = null;

    /**
     * SaveEmployee constructor.
     * @param null $employeeID
     */
    public function __construct($record)
    {
        $this->employeeID = $record->employeeID;
    }


    /**
     * @return null
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

}
