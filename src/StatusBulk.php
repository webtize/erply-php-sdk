<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;


class StatusBulk
{
    private $requestUnixTime = null;
    private $responseStatus = null;
    private $errorCode = null;
    private $generationTime = null;

    public function __construct($status)
    {
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
}
