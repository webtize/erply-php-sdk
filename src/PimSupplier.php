<?php


namespace Webtize\ErplySDK;


class PimSupplier
{

    private $id = null;
    private $type = null;
    private $supplier_type_id = null;
    private $name = null;
    private $first_name = null;
    private $code = null;
    private $vat_number = null;
    private $bank_name = null;
    private $bank_account_number = null;
    private $bank_iban = null;
    private $bank_swift = null;
    private $phone = null;
    private $mobile = null;
    private $fax = null;
    private $mail = null;
    private $skype = null;
    private $website = null;
    private $notes = null;
    private $vatrate_id = null;
    private $currency_id = null;
    private $displayed_name = null;
    private $displayed_name2 = null;
    private $added = null;
    private $addedby = null;

    public function getQuery()
    {
        $arr_query = [];
        if ($this->getBankAccountNumber() != null) {
            $arr_query = array_merge($arr_query, ["bank_account_number" => $this->getBankAccountNumber()]);
        }
        if ($this->getBankIban() != null) {
            $arr_query = array_merge($arr_query, ["bank_iban" => $this->getBankIban()]);
        }
        if ($this->getBankName() != null) {
            $arr_query = array_merge($arr_query, ["bank_name" => $this->getBankName()]);
        }
        if ($this->getBankSwift() != null) {
            $arr_query = array_merge($arr_query, ["bank_swift" => $this->getBankSwift()]);
        }
        if ($this->getCode() != null) {
            $arr_query = array_merge($arr_query, ["code" => $this->getCode()]);
        }
        if ($this->getCurrencyId() != null) {
            $arr_query = array_merge($arr_query, ["currency_id" => $this->getCurrencyId()]);
        }
        if ($this->getFax() != null) {
            $arr_query = array_merge($arr_query, ["fax" => $this->getFax()]);
        }
        if ($this->getFirstName() != null) {
            $arr_query = array_merge($arr_query, ["first_name" => $this->getFirstName()]);
        }
        if ($this->getMail() != null) {
            $arr_query = array_merge($arr_query, ["mail" => $this->getMail()]);
        }
        if ($this->getMobile() != null) {
            $arr_query = array_merge($arr_query, ["mobile" => $this->getMobile()]);
        }
        if ($this->getName() != null) {
            $arr_query = array_merge($arr_query, ["name" => $this->getName()]);
        }
        if ($this->getNotes() != null) {
            $arr_query = array_merge($arr_query, ["notes" => $this->getNotes()]);
        }
        if ($this->getPhone() != null) {
            $arr_query = array_merge($arr_query, ["phone" => $this->getPhone()]);
        }
        if ($this->getSkype() != null) {
            $arr_query = array_merge($arr_query, ["skype" => $this->getSkype()]);
        }
        if ($this->getSupplierTypeId() != null) {
            $arr_query = array_merge($arr_query, ["supplier_type_id" => $this->getSupplierTypeId()]);
        }
        if ($this->getType() != null) {
            $arr_query = array_merge($arr_query, ["type" => $this->getType()]);
        }
        if ($this->getVatNumber() != null) {
            $arr_query = array_merge($arr_query, ["vat_number" => $this->getVatNumber()]);
        }
        if ($this->getVatrateId() != null) {
            $arr_query = array_merge($arr_query, ["vatrate_id" => $this->getVatrateId()]);
        }
        if ($this->getWebsite() != null) {
            $arr_query = array_merge($arr_query, ["website" => $this->getWebsite()]);
        }
        return $arr_query;
    }

    public function __construct($record = null)
    {
        if ($record != null) {
            $this->id = $record->id;
            $this->type = $record->type;
            $this->supplier_type_id = $record->supplier_type_id;
            $this->name = $record->name;
            $this->first_name = $record->first_name;
            $this->code = $record->code;
            $this->vat_number = $record->vat_number;
            $this->bank_name = $record->bank_name;
            $this->bank_account_number = $record->bank_account_number;
            $this->bank_iban = $record->bank_iban;
            $this->bank_swift = $record->bank_swift;
            $this->phone = $record->phone;
            $this->mobile = $record->mobile;
            $this->fax = $record->fax;
            $this->mail = $record->mail;
            $this->skype = $record->skype;
            $this->website = $record->website;
            $this->notes = $record->notes;
            $this->vatrate_id = $record->vatrate_id;
            $this->currency_id = $record->currency_id;
            $this->displayed_name = $record->displayed_name;
            $this->displayed_name2 = $record->displayed_name2;
            $this->added = $record->added;
            $this->addedby = $record->addedby;
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
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getSupplierTypeId()
    {
        return $this->supplier_type_id;
    }

    /**
     * @param null $supplier_type_id
     */
    public function setSupplierTypeId($supplier_type_id): void
    {
        $this->supplier_type_id = $supplier_type_id;
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
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param null $first_name
     */
    public function setFirstName($first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param null $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return null
     */
    public function getVatNumber()
    {
        return $this->vat_number;
    }

    /**
     * @param null $vat_number
     */
    public function setVatNumber($vat_number): void
    {
        $this->vat_number = $vat_number;
    }

    /**
     * @return null
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param null $bank_name
     */
    public function setBankName($bank_name): void
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @return null
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }

    /**
     * @param null $bank_account_number
     */
    public function setBankAccountNumber($bank_account_number): void
    {
        $this->bank_account_number = $bank_account_number;
    }

    /**
     * @return null
     */
    public function getBankIban()
    {
        return $this->bank_iban;
    }

    /**
     * @param null $bank_iban
     */
    public function setBankIban($bank_iban): void
    {
        $this->bank_iban = $bank_iban;
    }

    /**
     * @return null
     */
    public function getBankSwift()
    {
        return $this->bank_swift;
    }

    /**
     * @param null $bank_swift
     */
    public function setBankSwift($bank_swift): void
    {
        $this->bank_swift = $bank_swift;
    }

    /**
     * @return null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param null $mobile
     */
    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param null $fax
     */
    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return null
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param null $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return null
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param null $skype
     */
    public function setSkype($skype): void
    {
        $this->skype = $skype;
    }

    /**
     * @return null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null $website
     */
    public function setWebsite($website): void
    {
        $this->website = $website;
    }

    /**
     * @return null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param null $notes
     */
    public function setNotes($notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return null
     */
    public function getVatrateId()
    {
        return $this->vatrate_id;
    }

    /**
     * @param null $vatrate_id
     */
    public function setVatrateId($vatrate_id): void
    {
        $this->vatrate_id = $vatrate_id;
    }

    /**
     * @return null
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * @param null $currency_id
     */
    public function setCurrencyId($currency_id): void
    {
        $this->currency_id = $currency_id;
    }

    /**
     * @return null
     */
    public function getDisplayedName()
    {
        return $this->displayed_name;
    }

    /**
     * @param null $displayed_name
     */
    public function setDisplayedName($displayed_name): void
    {
        $this->displayed_name = $displayed_name;
    }

    /**
     * @return null
     */
    public function getDisplayedName2()
    {
        return $this->displayed_name2;
    }

    /**
     * @param null $displayed_name2
     */
    public function setDisplayedName2($displayed_name2): void
    {
        $this->displayed_name2 = $displayed_name2;
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


}
