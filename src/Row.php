<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Row
{
private $rowID = null;
private $stableRowID = null;
private $productID = null;
private $serviceID = null;
private $amount = null;

    /**
     * Row constructor.
     * @param null $rowID
     * @param null $stableRowID
     * @param null $productID
     * @param null $serviceID
     * @param null $amount
     */
    public function __construct($row)
    {
        $this->rowID = $row->rowID;
        $this->stableRowID = $row->stableRowID;
        $this->productID = $row->productID;
        $this->serviceID = $row->serviceID;
        $this->amount = $row->amount;
    }

    /**
     * @return null
     */
    public function getRowID()
    {
        return $this->rowID;
    }

    /**
     * @return null
     */
    public function getStableRowID()
    {
        return $this->stableRowID;
    }

    /**
     * @return null
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return null
     */
    public function getServiceID()
    {
        return $this->serviceID;
    }

    /**
     * @return null
     */
    public function getAmount()
    {
        return $this->amount;
    }

}
