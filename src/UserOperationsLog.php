<?php

namespace Webtize\ErplySDK;

class UserOperationsLog
{

    private $logID = null;
    private $userName = null;
    private $timestamp = null;
    private $tableName = null;
    private $itemID = null;

    /**
     * @param null $logID
     * @param null $userName
     * @param null $timestamp
     * @param null $tableName
     * @param null $itemID
     */
    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, 'logID')) {
                $this->logID = $record->logID;
            }
            if (property_exists($record, 'userName')) {
                $this->userName = $record->userName;
            }
            if (property_exists($record, 'timestamp')) {
                $this->timestamp = $record->timestamp;
            }
            if (property_exists($record, 'tableName')) {
                $this->tableName = $record->tableName;
            }
            if (property_exists($record, 'itemID')) {
                $this->itemID = $record->itemID;
            }
        }
    }


    /**
     * @return null
     */
    public function getLogID()
    {
        return $this->logID;
    }

    /**
     * @return null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return null
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @return null
     */
    public function getItemID()
    {
        return $this->itemID;
    }


}