<?php


namespace Webtize\ErplySDK;


class PimBrandSave2
{
    private $resultId = null;
    private $resourceId = null;

    /**
     * PimBrandSave2 constructor.
     * @param null $resultId
     * @param null $resourceId
     */
    public function __construct($record)
    {
        $this->resultId = $record->resultId;
        $this->resourceId = $record->resourceId;
    }


    /**
     * @return null
     */
    public function getResultId()
    {
        return $this->resultId;
    }

    /**
     * @return null
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

}
