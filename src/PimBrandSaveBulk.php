<?php


namespace Webtize\ErplySDK;


class PimBrandSaveBulk
{
    private $results = null;

    public function __construct($results)
    {
        $this->results = [];
        foreach ($results->results as $result) {
            array_push($this->results, new PimBrandSave2($result));
        }
    }

    public function getResults()
    {
        return $this->results;
    }

}
