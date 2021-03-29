<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveEvent
{
private $eventID =null;

    /**
     * SaveEvent constructor.
     * @param null $eventID
     */
    public function __construct($record)
    {
        $this->eventID = $record->eventID;
    }

    /**
     * @return null
     */
    public function getEventID()
    {
        return $this->eventID;
    }


}
