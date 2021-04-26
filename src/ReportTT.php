<?php


namespace Webtize\ErplySDK;


class ReportTT
{
    private $paymentType = null;
    private $initialAmount = null;
    private $totalCashInAndOut = null;
    private $income = null;
    private $counted = null;
    private $overShortAmount = null;
    private $expected = null;
    private $varianceReasonID = null;

    public function __construct($record)
    {
        if ($record != null) {
            $this->paymentType = new ReportPT($record->paymentType);
            $this->initialAmount = $record->initialAmount;
            $this->totalCashInAndOut = $record->totalCashInAndOut;
            $this->income = $record->income;
            $this->counted = $record->counted;
            $this->overShortAmount = $record->overShortAmount;
            $this->expected = $record->expected;
            $this->varianceReasonID = $record->varianceReasonID;
        }
    }

    /**
     * @return ReportPT|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @return null
     */
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }

    /**
     * @return null
     */
    public function getTotalCashInAndOut()
    {
        return $this->totalCashInAndOut;
    }

    /**
     * @return null
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @return null
     */
    public function getCounted()
    {
        return $this->counted;
    }

    /**
     * @return null
     */
    public function getOverShortAmount()
    {
        return $this->overShortAmount;
    }

    /**
     * @return null
     */
    public function getExpected()
    {
        return $this->expected;
    }

    /**
     * @return null
     */
    public function getVarianceReasonID()
    {
        return $this->varianceReasonID;
    }
}
