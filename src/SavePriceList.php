<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SavePriceList
{
private $pricelistID = null;
private $itemsNotAddedToPriceList = null;

    /**
     * SavePriceList constructor.
     * @param null $pricelistID
     * @param null $itemsNotAddedToPriceList
     */
    public function __construct($record)
    {
        $this->pricelistID = $record->pricelistID;
        $this->itemsNotAddedToPriceList = $record->itemsNotAddedToPriceList;
    }

    /**
     * @return null
     */
    public function getPricelistID()
    {
        return $this->pricelistID;
    }

    /**
     * @return null
     */
    public function getItemsNotAddedToPriceList()
    {
        return $this->itemsNotAddedToPriceList;
    }


}
