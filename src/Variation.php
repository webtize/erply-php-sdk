<?php


namespace Webtize\ErplySDK;


class Variation
{
    private $variationID = null;
    private $dimentionID = null;
    private $name = null;
    private $code = null;
    private $order = null;
    private $active = null;
    private $added = null;
    private $lastModified = null;

    /**
     * Variation constructor.
     * @param null $variationID
     * @param null $name
     * @param null $code
     * @param null $order
     * @param null $active
     * @param null $added
     * @param null $lastModified
     */

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "addItemToMatrixDimension"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "addItemToMatrixDimension"]);
        }
        if ($this->getDimentionID() != null) {
            $arr_query = array_merge($arr_query, ["dimensionID" => $this->getDimentionID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, 'variationID')) {
                $this->variationID = $record->variationID;
            }

            if (property_exists($record, 'name')) {
                $this->name = $record->name;
            }
            if (property_exists($record, 'code')) {
                $this->code = $record->code;
            }
            if (property_exists($record, 'order')) {
                $this->order = $record->order;
            }
            if (property_exists($record, 'active')) {
                $this->active = $record->active;
            }
            if (property_exists($record, 'added')) {
                $this->added = $record->added;
            }
            if (property_exists($record, 'lastModified')) {
                $this->lastModified = $record->lastModified;
            }
        }
    }

    /**
     * @return null
     */
    public
    function getVariationID()
    {
        return $this->variationID;
    }

    /**
     * @return null
     */
    public
    function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public
    function getCode()
    {
        return $this->code;
    }

    /**
     * @return null
     */
    public
    function getOrder()
    {
        return $this->order;
    }

    /**
     * @return null
     */
    public
    function getActive()
    {
        return $this->active;
    }

    /**
     * @return null
     */
    public
    function getAdded()
    {
        return $this->added;
    }

    /**
     * @return null
     */
    public
    function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @return null
     */
    private function getDimentionID()
    {
        return $this->dimentionID;
    }

    /**
     * @param null $dimentionID
     */
    public function setDimentionID($dimentionID): void
    {
        $this->dimentionID = $dimentionID;
    }


}