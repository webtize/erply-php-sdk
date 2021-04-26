<?php


namespace Webtize\ErplySDK;


class ReportTTBT
{
    private $data = null;
    private $id = null;
    private $warehouse = null;
    private $pointOfSale = null;
    private $openedAtUnix = null;
    private $closedAtUnix = null;
    private $currency = null;
    private $transactionTotals = null;

    public function __construct($data)
    {
        if ($data != null) {
            $this->data = $data;

            $this->id = $data->id;
            $this->warehouse = new ReportWarehouse($data->warehouse);
            $this->pointOfSale = new ReportPOS($data->pointOfSale);
            $this->openedAtUnix = $data->openedAtUnix;
            $this->closedAtUnix = $data->closedAtUnix;
            $this->currency = $data->currency;
            $this->transactionTotals = [];
            foreach ($data->transactionTotals as $transactionTotal) {
                array_push($this->transactionTotals, new ReportTT($transactionTotal));
            }
        }
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }

    /**
     * @return null
     */
    public function getPointOfSale()
    {
        return $this->pointOfSale;
    }

    /**
     * @return null
     */
    public function getOpenedAtUnix()
    {
        return $this->openedAtUnix;
    }

    /**
     * @return null
     */
    public function getClosedAtUnix()
    {
        return $this->closedAtUnix;
    }

    /**
     * @return null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return ReportTT[]|null
     */
    public function getTransactionTotals(): ?array
    {
        return $this->transactionTotals;
    }


}
