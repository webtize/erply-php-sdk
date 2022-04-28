<?php

namespace Webtize\ErplySDK;

class CustomerRewardPoint
{

    public $transactionID = null;
    public $customerID = null;
    public $points = null;
    public $createdUnixTime = null;
    public $expiryUnixTime = null;


    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "transactionID")) {
                $this->transactionID = $record->transactionID;
            }
            if (property_exists($record, "customerID")) {
                $this->customerID = $record->customerID;
            }
            if (property_exists($record, "points")) {
                $this->points = $record->points;
            }
            if (property_exists($record, "createdUnixTime")) {
                $this->createdUnixTime = $record->createdUnixTime;
            }
            if (property_exists($record, "expiryUnixTime")) {
                $this->expiryUnixTime = $record->expiryUnixTime;
            }
        }
    }


    /**
     * @return null
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return null
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * @return null
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return null
     */
    public function getCreatedUnixTime()
    {
        return $this->createdUnixTime;
    }

    /**
     * @return null
     */
    public function getExpiryUnixTime()
    {
        return $this->expiryUnixTime;
    }


}