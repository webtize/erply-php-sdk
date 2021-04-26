<?php


namespace Webtize\ErplySDK;


class ReportWarehouse
{
    private $id = null;
    private $code = null;

    public function __construct($record)
    {
        $this->id = $record->id;
        $this->code = $record->code;
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
    public function getCode()
    {
        return $this->code;
    }


}
