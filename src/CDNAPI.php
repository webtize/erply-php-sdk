<?php

namespace Webtize\ErplySDK;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class CDNAPI
{
    public $endpoint;
    private $token;

    private function __construct($endpoint, $token)
    {
        $this->endpoint = $endpoint;
        $this->token = $token;
    }


    public function getImages($queryParams)
    {
        return self::getCall('/images', $queryParams);
    }


    public function getCall($method, $queryParams)
    {
        $client = new Client();
        $headers = array_merge([
            'accept' => 'application/json',
            'JWT' => $this->token
        ]);
        $request = new Request('GET', $this->buildGetUrl($this->endpoint . $method, $queryParams), $headers);
        try {
            $response = $client->send($request);
            return json_decode($response->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function postCall($method, $queryParams)
    {
        $client = new Client();
        $headers = array_merge([
            'accept' => 'application/json',
            'JWT' => $this->token
        ]);
        $request = new Request('GET', $this->endpoint . $method, $headers, $queryParams);
        try {
            $response = $client->send($request);
            return json_decode($response->getBody()->getContents());
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function buildGetUrl($baseUrl, array $params)
    {
        // Start with the base URL
        $url = $baseUrl;

        // Check if there are parameters to add
        if (!empty($params)) {
            // Append a '?' if it's not there, otherwise use '&'
            $url .= (parse_url($url, PHP_URL_QUERY) ? '&' : '?');

            // Build query string from parameters
            $query = http_build_query($params);

            // Append the query string to the URL
            $url .= $query;
        }

        return $url;
    }

    public static function getCdnInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $endpoint = $erply->getServiceEndpoints();
        if (isset($endpoint->records[0]->cdn) && is_array($endpoint->records)) {
            $cdnEndpoint = substr($endpoint->records[0]->cdn->url, 0, -1);
            return new CDNAPI($cdnEndpoint, $erply->getToken());
        }
    }

    public static function getCdnInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $endpoint = $erply->getServiceEndpoints();
        if (isset($endpoint->records[0]->cdn) && is_array($endpoint->records)) {
            $cdnEndpoint = substr($endpoint->records[0]->cdn->url, 0, -1);
            return new CDNAPI($cdnEndpoint, $erply->getToken());
        }
    }
}
