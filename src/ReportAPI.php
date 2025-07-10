<?php

namespace Webtize\ErplySDK;

use GuzzleHttp\Client;

class ReportAPI
{
    private $endpoint;
    private $sessionKey;
    private $storeCode;

    private function __construct($endpoint, $storeCode, $sessionKey)
    {
        $this->endpoint = $endpoint;
        $this->sessionKey = $sessionKey;
        $this->storeCode = $storeCode;
    }

    public function getTransactionsTotalByType($params = null)
    {
        $method = 'GET';
        $link = '/v1/POSDay/transaction/total-by-type';
        return new TransactionTotalByType($this->execute($method, $link, $params));
    }

    public function getPaymentTotalByType($params = null)
    {
        $method = 'GET';
        $link = '/v1/payments/total-by-type';
        return new TransactionTotalByType($this->execute($method, $link, $params));
    }

    public static function getReportInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->reports)) {
            $reportEndpoint = substr($serviceRet->records[0]->reports->url, 0, -1);
        }
        return new ReportAPI($reportEndpoint, $erply->getCode(), $erply->getSessionkey());
    }

    public static function getReportInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->reports)) {
            $reportEndpoint = substr($serviceRet->records[0]->reports->url, 0, -1);
        }
        return new ReportAPI($reportEndpoint, $erply->getCode(), $erply->getSessionkey());
    }

    private function execute($method, $link, $params)
    {
        $client = new Client();
        try {
            $response = $client->request($method, $this->endpoint . $link, [
                'query' => $params,
                'headers' => [
                    'Accept' => "*/*",
                    'User-Agent' => 'webtize_pim/1.1.0',
                    "clientCode" => $this->storeCode,
                    "sessionKey" => $this->sessionKey
                ],
                'version' => 1.1,
            ]);
            return json_decode($response->getBody()->getContents());
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    private function getCount($array)
    {
        $request = [];
        foreach ($array as $key => $item) {
            $request = array_merge($request, [$key => $item[0]]);
        }
        return $request;
    }
}
