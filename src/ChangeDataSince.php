<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class ChangeDataSince
{
    private $tableName = null;
    private $updated = null;
    private $deleted = null;

    public function __construct($record)
    {
        if (property_exists($record, "tableName")) {
            $this->tableName = $record->tableName;
        }
        if (property_exists($record, "updated")) {
            $this->updated = $record->updated;
        }
        if (property_exists($record, "deleted")) {
            $this->deleted = $record->deleted;
        }
    }

    public function getTableName()
    {
        return $this->tableName;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }
}
