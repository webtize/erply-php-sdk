<?php


namespace Webtize\ErplySDK;


class SaveAddMatrixDimention
{
    private $itemID = null;

    public function __construct($record)
    {
        $this->itemID = $record->itemID;
    }

    public function getItemID()
    {
        return $this->itemID;
    }

}