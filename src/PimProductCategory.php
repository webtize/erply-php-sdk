<?php


namespace Webtize\ErplySDK;


class PimProductCategory
{
    private $id = null;
    private $parent_id = null;
    private $order = null;
    private $name = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;

    /**
     * PimProductCategory constructor.
     * @param null $id
     * @param null $parent_id
     * @param null $order
     * @param null $name
     * @param null $added
     * @param null $addedby
     * @param null $changed
     * @param null $changedby
     */
    public function __construct($record)
    {
        $this->id = $record->id;
        $this->parent_id = $record->parent_id;
        $this->order = $record->order;
        $this->name = $record->name->en;
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
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param null $parent_id
     */
    public function setParentId($parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param null $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
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
    public function setName($name): void
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
    public function setAdded($added): void
    {
        $this->added = $added;
    }

    /**
     * @return null
     */
    public function getAddedby()
    {
        return $this->addedby;
    }

    /**
     * @param null $addedby
     */
    public function setAddedby($addedby): void
    {
        $this->addedby = $addedby;
    }

    /**
     * @return null
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @param null $changed
     */
    public function setChanged($changed): void
    {
        $this->changed = $changed;
    }

    /**
     * @return null
     */
    public function getChangedby()
    {
        return $this->changedby;
    }

    /**
     * @param null $changedby
     */
    public function setChangedby($changedby): void
    {
        $this->changedby = $changedby;
    }


}
