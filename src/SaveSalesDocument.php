<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class SaveSalesDocument
{
    private $invoiceID = null;
    private $invoiceNo = null;
    private $customNumber = null;
    private $invoiceLink = null;
    private $receiptLink = null;
    private $net = null;
    private $vat = null;
    private $rounding = null;
    private $total = null;
    private $rows = null;

    /**
     * SaveSalesDocument constructor.
     * @param null $invoiceID
     * @param null $invoiceNo
     * @param null $customNumber
     * @param null $invoiceLink
     * @param null $receiptLink
     * @param null $net
     * @param null $vat
     * @param null $rounding
     * @param null $total
     * @param null $rows
     */
    public function __construct($record)
    {
        $this->invoiceID = $record->invoiceID;
        $this->invoiceNo = $record->invoiceNo;
        $this->customNumber = $record->customNumber;
        $this->invoiceLink = $record->invoiceLink;
        $this->receiptLink = $record->receiptLink;
        $this->net = $record->net;
        $this->vat = $record->vat;
        $this->rounding = $record->rounding;
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
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * @return null
     */
    public function getCustomNumber()
    {
        return $this->customNumber;
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
    public function getReceiptLink()
    {
        return $this->receiptLink;
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
    public function getRounding()
    {
        return $this->rounding;
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
