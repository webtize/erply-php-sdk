<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;
#require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Webtize\ErplySDK\ErplyAPI;
use Webtize\ErplySDK\PIMAPI;

class CRMAPI
{
    public $endpoint;
    private $sessionKey;
    private $storeCode;

    private function __construct($endpoint, $storeCode, $sessionKey)
    {
        $this->endpoint = $endpoint;
        $this->sessionKey = $sessionKey;
        $this->storeCode = $storeCode;
    }


    public static function getCRMInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();

        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->crm)) {
            $crmEndpoint = substr($serviceRet->records[0]->crm->url, 0, -1);
            return new CRMAPI($crmEndpoint, $erply->getCode(), $erply->getSessionkey());
        }
        return null;
    }

    public static function getPIMInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();;
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->crm)) {
            $crmEndpoint = substr($serviceRet->records[0]->crm->url, 0, -1);
            return new CRMAPI($crmEndpoint, $erply->getCode(), $erply->getSessionkey());
        }
        return null;
    }

    public function getCustomers($params = [])
    {
        $params = array_merge([
            'take' => 100000,
            'withTotalCount' => true
        ], $params);
        return $this->execute('GET', '/v1/customers', $params);
    }

    public function getCustomersWithFullTextLookup($lookupPhrase, $params = [])
    {
        $params = array_merge([
            'take' => 100000,
            'lookupPhrase' => $lookupPhrase,
            'withTotalCount' => true
        ], $params);
        return $this->execute('GET', '/v1/customers/full-text-lookup', $params);
    }

    public function getCustomersBusinesses($params = [])
    {
        $params = array_merge([
            'take' => 100000,
            'withTotalCount' => true
        ], $params);
        return $this->execute('GET', '/v1/customers/businesses', $params);
    }

    public function getCustomersIndividuals($params = [])
    {
        $params = array_merge([
            'take' => 100000,
            'withTotalCount' => true
        ], $params);
        return $this->execute('GET', '/v1/customers/individuals', $params);
    }

    public function getAddresses($params = [])
    {
        $params = array_merge([
            'take' => 100000,
            'withTotalCount' => true
        ], $params);
        return $this->execute('GET', '/v1/addresses', $params);
    }

    public function saveAddresses($params = [])
    {
        return $this->saveExecute('/v1/addresses', $params);
    }

    public function saveCustomersBusinesses($params = [])
    {
        return $this->saveExecute('/v1/customers/businesses', $params);
    }

    public function saveCustomersIndividuals($params = [])
    {
        return $this->saveExecute('/v1/customers/individuals', $params);
    }

    public function execute($method, $link, $params)
    {
        $client = new Client();
        try {
            $response = $client->request($method, $this->endpoint . $link, [
                'query' => $params,
                'headers' => [
                    'Accept' => "*/*",
                    'User-Agent' => 'webtize_crm/1.1.0',
                    "clientCode" => $this->storeCode,
                    "sessionKey" => $this->sessionKey
                ],
                'version' => 1.1,
            ]);
            #print_r($response);
            return [
                'status' => $this->getCount($response->getHeaders()),
                'requests' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function putAttribute($params = array())
    {
        return $this->putExecute('/v1/attributes', $params);
    }

    public function putExecute($link, $params)
    {
        try {
            $client = new Client();

            $response = $client->request('PUT', $this->endpoint . $link, [
                'body' => json_encode($params),
                'headers' => [
                    'Accept' => "*/*",
                    'User-Agent' => 'webtize_crm/1.1.0',
                    "clientCode" => $this->storeCode,
                    "sessionKey" => $this->sessionKey
                ],
                'version' => 1.1,
            ]);
            #print_r($response);
            return [
                'status' => $this->getCount($response->getHeaders()),
                'requests' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function saveExecute($link, $params)
    {
        $headers = array(
            'Content-Type:application/json',
            'clientCode:' . $this->storeCode,
            'sessionKey:' . $this->sessionKey
        );
        $url = $this->endpoint . $link;
        $payload = json_encode($params);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    private function getCount($array)
    {
        $request = [];
        foreach ($array as $key => $item) {
            $request = array_merge($request, [$key => $item[0]]);
        }
        return $request;
    }


    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * @param mixed $sessionKey
     */
    public function setSessionKey($sessionKey): void
    {
        $this->sessionKey = $sessionKey;
    }

    /**
     * @return mixed
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param mixed $storeCode
     */
    public function setStoreCode($storeCode): void
    {
        $this->storeCode = $storeCode;
    }


}
