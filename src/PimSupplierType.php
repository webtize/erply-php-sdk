<?php


namespace Webtize\ErplySDK;


class PimSupplierType
{
    private $id = null;
    private $name = null;
    private $order = null;
    private $issupplier = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;

    /**
     * PimSupplierType constructor.
     * @param null $id
     * @param null $name
     * @param null $order
     * @param null $issupplier
     * @param null $added
     * @param null $addedby
     * @param null $changed
     * @param null $changedby
     */
    public function __construct($record)
    {
        $this->id = $record->id;
        $this->name = $record->name->en;
        $this->order = $record->order;
        $this->issupplier = $record->issupplier;
        $this->added = $record->added;
        $this->addedby = $record->addedby;
        $this->changed = $record->changed;
        $this->changedby = $record->changedby;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return null
     */
    public function getIssupplier()
    {
        return $this->issupplier;
    }

    /**
     * @return null
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @return null
     */
    public function getAddedby()
    {
        return $this->addedby;
    }

    /**
     * @return null
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @return null
     */
    public function getChangedby()
    {
        return $this->changedby;
    }


}
