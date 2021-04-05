<?php


namespace Webtize\ErplySDK;


class PimDimention
{
    private $dimension_id = null;
    private $dimension_name = null;
    private $dimension_order = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;
    private $status = null;

    /**
     * PimDimention constructor.
     * @param null $dimension_id
     * @param null $dimension_name
     * @param null $dimension_order
     * @param null $added
     * @param null $addedby
     * @param null $changed
     * @param null $changedby
     * @param null $status
     */
    public function __construct($record)
    {
        $this->dimension_id = $record->dimension_id;
        $this->dimension_name = $record->dimension_name->en;
        $this->dimension_order = $record->dimension_order;
        $this->added = $record->added;
        $this->addedby = $record->addedby;
        $this->changed = $record->changed;
        $this->changedby = $record->changedby;
        $this->status = $record->status;
    }

    /**
     * @return null
     */
    public function getDimensionId()
    {
        return $this->dimension_id;
    }

    /**
     * @param null $dimension_id
     */
    public function setDimensionId($dimension_id): void
    {
        $this->dimension_id = $dimension_id;
    }

    /**
     * @return null
     */
    public function getDimensionName()
    {
        return $this->dimension_name;
    }

    /**
     * @param null $dimension_name
     */
    public function setDimensionName($dimension_name): void
    {
        $this->dimension_name = $dimension_name;
    }

    /**
     * @return null
     */
    public function getDimensionOrder()
    {
        return $this->dimension_order;
    }

    /**
     * @param null $dimension_order
     */
    public function setDimensionOrder($dimension_order): void
    {
        $this->dimension_order = $dimension_order;
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

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }


}
