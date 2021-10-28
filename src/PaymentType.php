<?php

namespace Webtize\ErplySDK;

class PaymentType
{

    private $id = null;
    private $type = null;
    private $name = null;
    private $print_name = null;
    private $quickBooksDebitAccount = null;
    private $added = null;
    private $lastModified = null;


    public function __construct($record = null)
    {
        if ($record != null) {
            if (property_exists($record, "id")) {
                $this->id = $record->id;
            }
            if (property_exists($record, "type")) {
                $this->type = $record->type;
            }
            if (property_exists($record, "name")) {
                $this->name = $record->name;
            }
            if (property_exists($record, "print_name")) {
                $this->print_name = $record->print_name;
            }
            if (property_exists($record, "quickBooksDebitAccount")) {
                $this->quickBooksDebitAccount = $record->quickBooksDebitAccount;
            }
            if (property_exists($record, "added")) {
                $this->added = $record->added;
            }
            if (property_exists($record, "lastModified")) {
                $this->lastModified = $record->lastModified;
            }
        }
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
    public function getType()
    {
        return $this->type;
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
    public function getPrintName()
    {
        return $this->print_name;
    }

    /**
     * @return null
     */
    public function getQuickBooksDebitAccount()
    {
        return $this->quickBooksDebitAccount;
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
    public function getLastModified()
    {
        return $this->lastModified;
    }


}