<?php


namespace Webtize\ErplySDK;


class MatrixDimension
{
    private $dimensionID = null;
    private $name = null;
    private $variations = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveMatrixDimension"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveMatrixDimension"]);
        }
        if ($this->getDimensionID() != null) {
            $arr_query = array_merge($arr_query, ["dimensionID" => $this->getDimensionID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }

        if ($this->getRequestID() != null) {
            $arr_query = array_merge($arr_query, ["requestID" => $this->getRequestID()]);
        }
        return $arr_query;
    }

    private $requestID = null;

    public function getRequestID()
    {
        return $this->requestID;
    }

    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "requestID")) {
                $this->requestID = $record->requestID;
            }
            if (property_exists($record, 'dimensionID')) {
                $this->dimensionID = $record->dimensionID;
            }
            if (property_exists($record, 'name')) {
                $this->name = $record->name;
            }
            if (property_exists($record, 'variations')) {
                $this->variations = [];
                foreach ($record->variations as $variation) {
                    array_push($this->variations, new Variation($variation));
                }
            }
        }
    }


    /**
     * @return null
     */
    public function getDimensionID()
    {
        return $this->dimensionID;
    }

    /**
     * @param null $dimensionID
     */
    public function setDimensionID($dimensionID)
    {
        $this->dimensionID = $dimensionID;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Variation[]|null
     */

    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param Variation[]|null $variations
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;
    }


}