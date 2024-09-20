<?php


namespace Webtize\ErplySDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Webtize\ErplySDK\ErplyAPI;

#require 'vendor/autoload.php';

class POSAPI
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

    public function getShift($id = null)
    {
        $method = 'GET';
        $link = '/v1/shift/' . "$id";
        return $this->execute($method, $link, []);
    }


    public static function getPosInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();
        $name = 'point-of-sale';
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->$name)) {
            $pimEndpoint = substr($serviceRet->records[0]->$name->url, 0, -1);
        }
        return new POSAPI($pimEndpoint, $erply->getCode(), $erply->getSessionkey());
    }

    public static function getPosInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();
        $name = 'point-of-sale';
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->$name)) {
            $pimEndpoint = substr($serviceRet->records[0]->$name->url, 0, -1);
        }
        return new POSAPI($pimEndpoint, $erply->getCode(), $erply->getSessionkey());
    }

    private function execute($method, $link, $params)
    {
        $client = new Client();
        try {
            $q = [
                'headers' => [
                    'accept' => "application/json",
                    'User-Agent' => 'webtize_pos/1.1.0',
                    "Clientcode" => $this->storeCode,
                    "Sessionkey" => $this->sessionKey
                ],
                'version' => 1.1,
            ];
            if (sizeof($params)) {
                $q['query'] = $params;
            }
            $response = $client->request($method, $this->endpoint . $link, $q);
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
            'Clientcode:' . $this->storeCode,
            'Sessionkey:' . $this->sessionKey
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
