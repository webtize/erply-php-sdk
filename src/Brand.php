<?php


namespace Webtize\ErplySDK;


class Brand
{
    public $brandID = null;
    public $name = null;
    public $added = null;
    public $lastModified = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, 'brandID')) {
                $this->brandID = $record->brandID;
            }
            if (property_exists($record, 'name')) {
                $this->name = $record->name;
            }
            if (property_exists($record, 'added')) {
                $this->added = $record->added;
            }
            if (property_exists($record, 'lastModified')) {
                $this->lastModified = $record->lastModified;
            }
        }

    }

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveBrand"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveBrand"]);
        }
        if ($this->getBrandID() != null) {
            $arr_query = array_merge($arr_query, ["brandID" => $this->getBrandID()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        return $arr_query;
    }

    public function getBrandID()
    {
        return $this->brandID;
    }

    /**
     * @param null $brandID
     */
    public function setBrandID($brandID)
    {
        $this->brandID = $brandID;
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
     * @return null
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param null $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return null
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param null $lastModified
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

}