<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SavePurchaseDocument
{
    private $invoiceID = null;
    private $invoiceRegNo = null;
    private $invoiceNo = null;
    private $invoiceLink = null;
    private $net = null;
    private $vat = null;
    private $total = null;
    private $rows = null;

    /**
     * SavePurchaseDocument constructor.
     * @param null $invoiceID
     * @param null $invoiceRegNo
     * @param null $invoiceNo
     * @param null $invoiceLink
     * @param null $net
     * @param null $vat
     * @param null $total
     * @param null $rows
     */
    public function __construct($record)
    {
        $this->invoiceID = $record->invoiceID;
        $this->invoiceRegNo = $record->invoiceRegNo;
        $this->invoiceNo = $record->invoiceNo;
        $this->invoiceLink = $record->invoiceLink;
        $this->net = $record->net;
        $this->vat = $record->vat;
        $this->total = $record->total;
        $this->rows = [];
        foreach ($record->rows as $row){
             array_push($this->rows, new Row($row));
         }
    }

    /**
     * @return null
     */
    public function getInvoiceID()
    {
        return $this->invoiceID;
    }

    /**
     * @return null
     */
    public function getInvoiceRegNo()
    {
        return $this->invoiceRegNo;
    }

    /**
     * @return null
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @return null
     */
    public function getInvoiceLink()
    {
        return $this->invoiceLink;
    }

    /**
     * @return null
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @return null
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return null
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return Row[]|null
     */
    public function getRows()
    {
        return $this->rows;
    }

}
