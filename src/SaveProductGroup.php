<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveProductGroup
{
private $productGroupID = null;

    /**
     * SaveProductGroup constructor.
     * @param null $productGroupID
     */
    public function __construct($record)
    {
        $this->productGroupID = $record->productGroupID;
    }

    /**
     * @return null
     */
    public function getProductGroupID()
    {
        return $this->productGroupID;
    }

}
