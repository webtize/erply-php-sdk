<?php


namespace Webtize\ErplySDK;

use GuzzleHttp\Client;
#require 'vendor/autoload.php';

class PIMAPI
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

    public function getMatrixDimentionValues($params = null)
    {
        $method = 'GET';
        $link = '/v1/matrix/dimension/value';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimDimentionValues($this->execute($method, $link, $para));
    }

    public function getWarehouseLocations($params = null)
    {
        $method = 'GET';
        $link = '/v1/warehouse/locations';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimWarehouseLocations($this->execute($method, $link, $para));
    }

    public function getMatrixDimentions($params = null)
    {
        $method = 'GET';
        $link = '/v1/matrix/dimension';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimDimentions($this->execute($method, $link, $para));
    }

    public function getProductCategories($params = null)
    {
        $method = 'GET';
        $link = '/v1/product/category';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimProductCategories($this->execute($method, $link, $para));
    }

    public function getProductGroups($params = null)
    {
        $method = 'GET';
        $link = '/v1/product/group';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimProductGroups($this->execute($method, $link, $para));
    }

    public function getBrands($params = null)
    {
        $method = 'GET';
        $link = '/v1/brand';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimBrands($this->execute($method, $link, $para));
    }

    public function saveBrand($brand)
    {
        $link = '/v1/brand';
        return new PimBrandSave($this->saveExecute($link, $brand->getQuery()));
    }

    public function saveBrands($brands)
    {
        $link = '/v1/brand/bulk';
        return new PimBrandSaveBulk($this->saveExecute($link, $brands->getQuery()));
    }

    public function getBrandsBulk($brands)
    {
        $link = '/v1/brand/bulk/get';
        return ($this->saveExecute($link, $brands->getQuery()));
    }

    public function saveSuppliers($suppliers)
    {
        $link = '/v1/supplier/bulk';
        return new PimSupplierSaveBulk($this->saveExecute($link, $suppliers->getQuery()));
    }

    public function saveSupplier($supplier)
    {
        $link = '/v1/supplier';
        return new PimSupplierSave($this->saveExecute($link, $supplier->getQuery()));
    }

    public function getProducts($params = null)
    {
        $method = 'GET';
        $link = '/v1/product';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimProducts($this->execute($method, $link, $para));
    }

    public function getProductsBatch($ids)
    {
        $method = 'GET';
        $str = $ids[0];
        for ($i = 1; $i < sizeof($ids); $i++) {
            $str = $str . ";" . $ids[$i];
        }
        $link = '/v1/product/' . $str;

        return new PimProducts($this->execute($method, $link, []));
    }

    public function getSupplierType($params = null)
    {
        $method = 'GET';
        $link = '/v1/supplier/type';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimSupplierTypes($this->execute($method, $link, $para));
    }

    public function getSuppliers($params = null)
    {
        $method = 'GET';
        $link = '/v1/supplier';
        $para = [
            'take' => 100000,
            'withTotalCount' => true
        ];
        if ($params != null) {
            $para = array_merge($para, $params);
        }
        return new PimSuppliers($this->execute($method, $link, $para));
    }

    public static function getPIMInstance()
    {
        $erply = ErplyAPI::getErplyInstance();
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->pim)) {
            $pimEndpoint = substr($serviceRet->records[0]->pim->url, 0, -1);
        }
        return new PIMAPI($pimEndpoint, $erply->getCode(), $erply->getSessionkey());
    }

    public static function getPIMInstance2($code, $username, $password)
    {
        $erply = ErplyAPI::getErplyInstance2($code, $username, $password);
        $serviceRet = $erply->getServiceEndpoints();
        if (isset($serviceRet->records) && is_array($serviceRet->records) && isset($serviceRet->records[0]->pim)) {
            $pimEndpoint = substr($serviceRet->records[0]->pim->url, 0, -1);
        }
        return new PIMAPI($pimEndpoint, $erply->getCode(), $erply->getSessionkey());
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
