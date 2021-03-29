<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Event
{
    private $eventID = null;
    private $id = null;
    private $description = null;
    private $typeID = null;
    private $startTime = null;
    private $endTime = null;
    private $customerID = null;
    private $contactID = null;
    private $projectID = null;
    private $employeeID = null;
    private $submitterID = null;
    private $supplierID = null;
    private $supplierName = null;
    private $statusID = null;
    private $resourceID = null;
    private $notes = null;
    private $lastModified = null;
    private $contactName = null;
    private $customerName = null;
    private $employeeName = null;
    private $submitterName = null;
    private $projectName = null;
    private $resourceName = null;
    private $statusName = null;
    private $typeName = null;
    private $completed = null;
    private $attributes = null;

    public function getQuery($bulk)
    {
        $arr_query = [];
        if ($bulk) {
            $arr_query = array_merge($arr_query, ["requestName" => "saveEvent"]);
        } else {
            $arr_query = array_merge($arr_query, ["request" => "saveEvent"]);
        }
        if ($this->getEventID() != null) {
            $arr_query = array_merge($arr_query, ["eventID" => $this->getEventID()]);
        }
        if ($this->getId() != null) {
            $arr_query = array_merge($arr_query, ["id" => $this->getId()]);
        }
        if ($this->getDescription() != null) {
            $arr_query = array_merge($arr_query, ["description" => $this->getDescription()]);
        }
        if ($this->getTypeID() != null) {
            $arr_query = array_merge($arr_query, ["typeID" => $this->getTypeID()]);
        }
        if ($this->getStartTime() != null) {
            $arr_query = array_merge($arr_query, ["startTime" => $this->getStartTime()]);
        }
        if ($this->getEndTime() != null) {
            $arr_query = array_merge($arr_query, ["endTime" => $this->getEndTime()]);
        }
        if ($this->getCustomerID() != null) {
            $arr_query = array_merge($arr_query, ["customerID" => $this->getCustomerID()]);
        }
        if ($this->getContactID() != null) {
            $arr_query = array_merge($arr_query, ["contactID" => $this->getContactID()]);
        }
        if ($this->getProjectID() != null) {
            $arr_query = array_merge($arr_query, ["projectID" => $this->getProjectID()]);
        }
        if ($this->getEmployeeID() != null) {
            $arr_query = array_merge($arr_query, ["employeeID" => $this->getEmployeeID()]);
        }
        if ($this->getSubmitterID() != null) {
            $arr_query = array_merge($arr_query, ["submitterID" => $this->getSubmitterID()]);
        }
        if ($this->getSupplierID() != null) {
            $arr_query = array_merge($arr_query, ["supplierID" => $this->getSupplierID()]);
        }
        if ($this->getSupplierName() != null) {
            $arr_query = array_merge($arr_query, ["supplierName" => $this->getSupplierName()]);
        }
        if ($this->getStatusID() != null) {
            $arr_query = array_merge($arr_query, ["statusID" => $this->getStatusID()]);
        }
        if ($this->getResourceID() != null) {
            $arr_query = array_merge($arr_query, ["resourceID" => $this->getResourceID()]);
        }
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getLastModified() != null) {
            $arr_query = array_merge($arr_query, ["lastModified" => $this->getLastModified()]);
        }
        if ($this->getContactName() != null) {
            $arr_query = array_merge($arr_query, ["contactName" => $this->getContactName()]);
        }
        if ($this->getCustomerName() != null) {
            $arr_query = array_merge($arr_query, ["customerName" => $this->getCustomerName()]);
        }
        if ($this->getEmployeeName() != null) {
            $arr_query = array_merge($arr_query, ["employeeName" => $this->getEmployeeName()]);
        }
        if ($this->getSubmitterName() != null) {
            $arr_query = array_merge($arr_query, ["submitterName" => $this->getSubmitterName()]);
        }
        if ($this->getProjectName() != null) {
            $arr_query = array_merge($arr_query, ["projectName" => $this->getProjectName()]);
        }
        if ($this->getResourceName() != null) {
            $arr_query = array_merge($arr_query, ["resourceName" => $this->getResourceName()]);
        }
        if ($this->getStatusName() != null) {
            $arr_query = array_merge($arr_query, ["statusName" => $this->getStatusName()]);
        }
        if ($this->getTypeName() != null) {
            $arr_query = array_merge($arr_query, ["typeName" => $this->getTypeName()]);
        }
        if ($this->getCompleted() != null) {
            $arr_query = array_merge($arr_query, ["completed" => $this->getCompleted()]);
        }
        if ($this->getAttributes() != null) {
            $arr_query = array_merge($arr_query, ["attributes" => $this->getAttributes()]);
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

            if (property_exists($record, "eventID")) {
                $this->eventID = $record->eventID;
            }
            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "description")) {
                $this->description = $record->description;
            }
            if (property_exists($record, "typeID")) {
                $this->typeID = $record->typeID;
            }
            if (property_exists($record, "startTime")) {
                $this->startTime = $record->startTime;
            }
            if (property_exists($record, "endTime")) {
                $this->endTime = $record->endTime;
            }
            if (property_exists($record, "customerID")) {
                $this->customerID = $record->customerID;
            }
            if (property_exists($record, "contactID")) {
                $this->contactID = $record->contactID;
            }
            if (property_exists($record, "projectID")) {
                $this->projectID = $record->projectID;
            }
            if (property_exists($record, "employeeID")) {
                $this->employeeID = $record->employeeID;
            }
            if (property_exists($record, "submitterID")) {
                $this->submitterID = $record->submitterID;
            }
            if (property_exists($record, "supplierID")) {
                $this->supplierID = $record->supplierID;
            }
            if (property_exists($record, "supplierName")) {
                $this->supplierName = $record->supplierName;
            }
            if (property_exists($record, "statusID")) {
                $this->statusID = $record->statusID;
            }
            if (property_exists($record, "resourceID")) {
                $this->resourceID = $record->resourceID;
            }
            if (property_exists($record, "notes")) {
                $this->notes = $record->notes;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
            if (property_exists($record, "contactName")) {
                $this->contactName = $record->contactName;
            }
            if (property_exists($record, "customerName")) {
                $this->customerName = $record->customerName;
            }
            if (property_exists($record, "employeeName")) {
                $this->employeeName = $record->employeeName;
            }
            if (property_exists($record, "submitterName")) {
                $this->submitterName = $record->submitterName;
            }
            if (property_exists($record, "projectName")) {
                $this->projectName = $record->projectName;
            }
            if (property_exists($record, "resourceName")) {
                $this->resourceName = $record->resourceName;
            }
            if (property_exists($record, "statusName")) {
                $this->statusName = $record->statusName;
            }
            if (property_exists($record, "typeName")) {
                $this->typeName = $record->typeName;
            }
            if (property_exists($record, "completed")) {
                $this->completed = $record->completed;
            }
            if (property_exists($record, "attributes")) {
                $this->attributes = $record->attributes;
            }
        }
    }

    public function getEventID()
    {
        return $this->eventID;
    }

    public function setEventID($eventID)
    {
        $this->eventID = $eventID;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTypeID()
    {
        return $this->typeID;
    }

    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    public function getContactID()
    {
        return $this->contactID;
    }

    public function setContactID($contactID)
    {
        $this->contactID = $contactID;
    }

    public function getProjectID()
    {
        return $this->projectID;
    }

    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getSubmitterID()
    {
        return $this->submitterID;
    }

    public function setSubmitterID($submitterID)
    {
        $this->submitterID = $submitterID;
    }

    public function getSupplierID()
    {
        return $this->supplierID;
    }

    public function setSupplierID($supplierID)
    {
        $this->supplierID = $supplierID;
    }

    public function getSupplierName()
    {
        return $this->supplierName;
    }

    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;
    }

    public function getStatusID()
    {
        return $this->statusID;
    }

    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;
    }

    public function getResourceID()
    {
        return $this->resourceID;
    }

    public function setResourceID($resourceID)
    {
        $this->resourceID = $resourceID;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
    }

    public function getSubmitterName()
    {
        return $this->submitterName;
    }

    public function setSubmitterName($submitterName)
    {
        $this->submitterName = $submitterName;
    }

    public function getProjectName()
    {
        return $this->projectName;
    }

    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    public function getResourceName()
    {
        return $this->resourceName;
    }

    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
    }

    public function getStatusName()
    {
        return $this->statusName;
    }

    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
    }

    public function getTypeName()
    {
        return $this->typeName;
    }

    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
    }

    public function getCompleted()
    {
        return $this->completed;
    }

    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
}
