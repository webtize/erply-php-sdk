<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class Status
{
    private $request = null;
    private $requestName = null;
    private $requestUnixTime = null;
    private $responseStatus = null;
    private $errorCode = null;
    private $generationTime = null;
    private $recordsTotal = null;
    private $requestID = null;
    private $recordsInResponse = null;

    public function __construct($status)
    {
        if (property_exists($status, 'request')) {
            $this->request = $status->request;
        }
        if (property_exists($status, 'requestName')) {
            $this->requestName = $status->requestName;
        }
        if (property_exists($status, 'requestUnixTime')) {
            $this->requestUnixTime = $status->requestUnixTime;
        }
        if (property_exists($status, 'responseStatus')) {
            $this->responseStatus = $status->responseStatus;
        }
        if (property_exists($status, 'errorCode')) {
            $this->errorCode = $status->errorCode;
        }
        if (property_exists($status, 'generationTime')) {
            $this->generationTime = $status->generationTime;
        }
        if (property_exists($status, 'recordsTotal')) {
            $this->recordsTotal = $status->recordsTotal;
        }
        if (property_exists($status, 'requestID')) {
            $this->requestID = $status->requestID;
        }
        if (property_exists($status, 'recordsInResponse')) {
            $this->recordsInResponse = $status->recordsInResponse;
        }
    }

    public function getRequestName()
    {
        return $this->requestName;
    }

    public function getRequestID()
    {
        return $this->requestID;
    }


    public function getRequest()
    {
        return $this->request;
    }

    public function getRequestUnixTime()
    {
        return $this->requestUnixTime;
    }

    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getGenerationTime()
    {
        return $this->generationTime;
    }

    public function getRecordsTotal()
    {
        return $this->recordsTotal;
    }

    public function getRecordsInResponse()
    {
        return $this->recordsInResponse;
    }
}
