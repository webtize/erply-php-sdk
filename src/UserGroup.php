<?php

namespace Webtize\ErplySDK;

class UserGroup
{

    private $userGroupID = null;
    private $name = null;
    private $added = null;
    private $addedByUserName = null;
    private $lastModified = null;
    private $lastModifiedByUserName = null;
    private $attributes = null;

    /**
     * @param null $userGroupID
     * @param null $name
     * @param null $added
     * @param null $addedByUserName
     * @param null $lastModified
     * @param null $lastModifiedByUserName
     * @param null $attributes
     */
    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "userGroupID")) {
                $this->userGroupID = $record->userGroupID;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "addedByUserName")) {
                $this->addedByUserName = $record->addedByUserName;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "lastModifiedByUserName")) {
                $this->lastModifiedByUserName = $record->lastModifiedByUserName;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
            }
        }


    }


    /**
     * @return null
     */
    public function getUserGroupID()
    {
        return $this->userGroupID;
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
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @return null
     */
    public function getAddedByUserName()
    {
        return $this->addedByUserName;
    }

    /**
     * @return null
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @return null
     */
    public function getLastModifiedByUserName()
    {
        return $this->lastModifiedByUserName;
    }

    /**
     * @return null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }


}