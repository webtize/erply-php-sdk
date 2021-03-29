<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveProduct
{
    private $productID = null;

    /**
     * SaveProduct constructor.
     * @param null $productID
     */
    public function __construct($record)
    {
        $this->productID = $record->productID;
    }


    /**
     * @return null
     */
    public function getProductID()
    {
        return $this->productID;
    }


}
