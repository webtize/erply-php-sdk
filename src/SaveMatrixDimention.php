<?php


namespace Webtize\ErplySDK;


class SaveMatrixDimention
{
private $dimensionID=null;

    /**
     * SaveMatrixDimention constructor.
     * @param null $dimensionID
     */
    public function __construct($record)
    {
        $this->dimensionID = $record->dimensionID;
    }

    /**
     * @return null
     */
    public function getDimensionID()
    {
        return $this->dimensionID;
    }

}