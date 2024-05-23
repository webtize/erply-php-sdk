<?php


namespace Webtize\ErplySDK;

use GuzzleHttp\Client;

#require 'vendor/autoload.php';

class SalesAPI
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


    public function getSingle($link,$take =20, $skip=0)
    {
        $method = 'GET';
        $para = [
            'take' => $take,
            'skip' => $skip,
            'withTotalCount' => true
        ];

        return $this->execute($method, $link, $para);
    }
    public static function getSalesInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->sales)) {
            $salesEndPoint = substr($serviceRet->records[0]->sales->url, 0, -1);
        }
        return new SalesAPI($salesEndPoint, $erply->getCode(), $erply->getSessionkey());
    }

    public static function getSalesInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->sales)) {
            $salesEndPoint = substr($serviceRet->records[0]->sales->url, 0, -1);
        }
        return new SalesAPI($salesEndPoint, $erply->getCode(), $erply->getSessionkey());
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
            #print_r($response);
            return [
                'status' => $this->getCount($response->getHeaders()),
                'requests' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $e) {

            echo $e->getMessage();

        }
    }

    private function saveExecute($link, $params)
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


}
