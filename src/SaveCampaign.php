<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveCampaign
{
    private $campaignID = null;
    private $nonExistentStoreRegionIDs = null;
    private $nonExistentCustomerGroupIDs= null;

    /**
     * SaveCampaign constructor.
     * @param null $campaignID
     * @param null $nonExistentStoreRegionIDs
     * @param null $nonExistentCustomerGroupIDs
     */
    public function __construct($record)
    {
        $this->campaignID = $record->campaignID;
        $this->nonExistentStoreRegionIDs = $record->nonExistentStoreRegionIDs;
        $this->nonExistentCustomerGroupIDs = $record->nonExistentCustomerGroupIDs;
    }

    /**
     * @return null
     */
    public function getCampaignID()
    {
        return $this->campaignID;
    }

    /**
     * @return null
     */
    public function getNonExistentStoreRegionIDs()
    {
        return $this->nonExistentStoreRegionIDs;
    }

    /**
     * @return null
     */
    public function getNonExistentCustomerGroupIDs()
    {
        return $this->nonExistentCustomerGroupIDs;
    }





}
