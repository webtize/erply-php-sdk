<?php


namespace Webtize\ErplySDK;


class PimBrand
{
    private $id = null;
    private $name = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;

    public function __construct($record = null)
    {
        if ($record != null) {
            $this->id = $record->id;
            $this->name = $record->name;
            $this->added = $record->added;
            $this->addedby = $record->addedby;
            $this->changed = $record->changed;
            $this->changedby = $record->changedby;
        }
    }

    public function getQuery()
    {
        return ['name' => $this->getName()];

    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAdded()
    {
        return $this->added;
    }

    public function getAddedby()
    {
        return $this->addedby;
    }

    public function getChanged()
    {
        return $this->changed;
    }

    public function getChangedby()
    {
        return $this->changedby;
    }
}
