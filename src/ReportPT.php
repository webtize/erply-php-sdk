<?php


namespace Webtize\ErplySDK;


class ReportPT
{
    private $id = null;
    private $type = null;
    private $cardType = null;

    public function __construct($record)
    {
        if ($record != null) {
            $this->id = $record->id;
            $this->type = $record->type;
            $this->cardType = $record->cardType;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCardType()
    {
        return $this->cardType;
    }
}
