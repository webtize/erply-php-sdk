<?php


namespace Webtize\ErplySDK;


class SaveCustomerGroup
{
    private $customerGroupID = null;

    /**
     * SaveCustomerGroup constructor.
     * @param null $customerGroupID
     */
    public function __construct($record)
    {
        $this->customerGroupID = $record->customerGroupID;
    }


    /**
     * @return null
     */
    public function getCustomerGroupID()
    {
        return $this->customerGroupID;
    }


}