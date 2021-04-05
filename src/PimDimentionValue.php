<?php


namespace Webtize\ErplySDK;


class PimDimentionValue
{
    private $dimension_value_id = null;
    private $dimension_value_code = null;
    private $dimension_value_name = null;
    private $dimension_value_order = null;
    private $dimension_id = null;
    private $added = null;
    private $addedby = null;
    private $changed = null;
    private $changedby = null;
    private $status = null;

    /**
     * PimDimentionValue constructor.
     * @param null $dimension_value_id
     * @param null $dimension_value_code
     * @param null $dimension_value_name
     * @param null $dimension_value_order
     * @param null $dimension_id
     * @param null $added
     * @param null $addedby
     * @param null $changed
     * @param null $changedby
     * @param null $status
     */
    public function __construct($record)
    {
        $this->dimension_value_id = $record->dimension_value_id;
        $this->dimension_value_code = $record->dimension_value_code;
        $this->dimension_value_name = $record->dimension_value_name->en;
        $this->dimension_value_order = $record->dimension_value_order;
        $this->dimension_id = $record->dimension_id;
        $this->added = $record->added;
        $this->addedby = $record->addedby;
        $this->changed = $record->changed;
        $this->changedby = $record->changedby;
        $this->status = $record->status;
    }


    /**
     * @return null
     */
    public function getDimensionValueId()
    {
        return $this->dimension_value_id;
    }

    /**
     * @param null $dimension_value_id
     */
    public function setDimensionValueId($dimension_value_id): void
    {
        $this->dimension_value_id = $dimension_value_id;
    }

    /**
     * @return null
     */
    public function getDimensionValueCode()
    {
        return $this->dimension_value_code;
    }

    /**
     * @param null $dimension_value_code
     */
    public function setDimensionValueCode($dimension_value_code): void
    {
        $this->dimension_value_code = $dimension_value_code;
    }

    /**
     * @return null
     */
    public function getDimensionValueName()
    {
        return $this->dimension_value_name;
    }

    /**
     * @param null $dimension_value_name
     */
    public function setDimensionValueName($dimension_value_name): void
    {
        $this->dimension_value_name = $dimension_value_name;
    }

    /**
     * @return null
     */
    public function getDimensionValueOrder()
    {
        return $this->dimension_value_order;
    }

    /**
     * @param null $dimension_value_order
     */
    public function setDimensionValueOrder($dimension_value_order): void
    {
        $this->dimension_value_order = $dimension_value_order;
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
