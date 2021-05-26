<?php


namespace Webtize\ErplySDK;


class SalesDocumentActualReportsHTML
{

    public $html;

    public function __construct($record = null)
    {
        if ($record != null) {
            $this->html = $record->html;
        }
    }

    public function getHtml()
    {
        return $this->html;
    }

}