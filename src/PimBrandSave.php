<?php


namespace Webtize\ErplySDK;


class PimBrandSave
{
    private $id = null;

    public function __construct($record)
    {
        $this->id = $record->id;
    }


    public function getId()
    {
        return $this->id;
    }

}
