<?php

namespace Webtize\ErplySDK;

use GuzzleHttp\Client;

class SalesAPI
{
    private $endpoint;
    private $sessionKey;
    private $storeCode;

    /**
     * Private constructor for initializing the SalesAPI instance.
     *
     * @param string $endpoint The API endpoint URL.
     * @param string $storeCode The store code.
     * @param string $sessionKey The session key for authentication.
     */
    private function __construct($endpoint, $storeCode, $sessionKey)
    {
        $this->endpoint = $endpoint;
        $this->sessionKey = $sessionKey;
        $this->storeCode = $storeCode;
    }

    /**
     * Retrieve a single record from the API.
     *
     * @param string $link The API endpoint link.
     * @param int $take The number of records to take.
     * @param int $skip The number of records to skip.
     * @return array|null The response from the API.
     */
    public function getSingle($link, $take = 20, $skip = 0)
    {
        $method = 'GET';
        $params = [
            'take' => $take,
            'skip' => $skip,
            'withTotalCount' => true
        ];

        return $this->execute($method, $link, $params);
    }

    /**
     * Get an instance of the SalesAPI using the Erply API.
     *
     * @return SalesAPI|null An instance of the SalesAPI class.
     */
    public static function getSalesInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();
        $salesEndPoint = null;

        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->sales)) {
            $salesEndPoint = rtrim($serviceRet->records[0]->sales->url, '/');
        }

        return $salesEndPoint ? new SalesAPI($salesEndPoint, $erply->getCode(), $erply->getSessionKey()) : null;
    }

    /**
     * Get an instance of the SalesAPI using Erply API with specific credentials.
     *
     * @param string $code The store code.
     * @param string $username The username.
     * @param string $password The password.
     * @return SalesAPI|null An instance of the SalesAPI class.
     */
    public static function getSalesInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();
        $salesEndPoint = null;

        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->sales)) {
            $salesEndPoint = rtrim($serviceRet->records[0]->sales->url, '/');
        }

        return $salesEndPoint ? new SalesAPI($salesEndPoint, $erply->getCode(), $erply->getSessionKey()) : null;
    }

    /**
     * Execute a request to the API using Guzzle HTTP client.
     *
     * @param string $method The HTTP method (GET, POST, etc.).
     * @param string $link The API endpoint link.
     * @param array $params The query parameters.
     * @return array|null The response from the API.
     */
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

            return [
                'status' => $this->getCount($response->getHeaders()),
                'requests' => json_decode($response->getBody()->getContents())
            ];
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Execute a POST request to the API using cURL.
     *
     * @param string $link The API endpoint link.
     * @param array $params The payload parameters.
     * @return mixed The response from the API.
     */
    private function saveExecute($link, $params)
    {
        $headers = [
            'Content-Type: application/json',
            'clientCode: ' . $this->storeCode,
            'sessionKey: ' . $this->sessionKey
        ];
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

    /**
     * Extract count information from the API response headers.
     *
     * @param array $headers The response headers.
     * @return array The extracted count information.
     */
    private function getCount($headers)
    {
        $request = [];
        foreach ($headers as $key => $item) {
            $request[$key] = $item[0];
        }
        return $request;
    }
}