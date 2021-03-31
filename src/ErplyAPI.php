<?php
/*
 * Copyright (C)  2021. Webtize Solutions Pty Ltd - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jigarkumar Patel <jigar@webtize.com.au>, 29/3/2021
 */

namespace Webtize\ErplySDK;
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class ErplyAPI
{
    private $code;
    private $username;
    private $password;
    private $parameters = [];
    private $sessionKey = null;


    public function saveAddresses($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveAddressesBulk($this->getBulkData($arr_parameters));
    }

    public function saveCampaigns($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveCampaignsBulk($this->getBulkData($arr_parameters));
    }

    public function saveCurrencies($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveCurrenciesBulk($this->getBulkData($arr_parameters));
    }

    public function saveCustomers($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveCustomersBulk($this->getBulkData($arr_parameters));
    }

    public function saveEmployees($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveEmployeesbulk($this->getBulkData($arr_parameters));
    }

    public function saveEvents($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveEventsBulk($this->getBulkData($arr_parameters));
    }

    public function saveInventoryRegistrations($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveInventoryRegistrationsBulk($this->getBulkData($arr_parameters));
    }

    public function saveGiftCards($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveGiftCardsBulk($this->getBulkData($arr_parameters));
    }

    public function saveInventoryTransfers($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveInventoryTransfersBulk($this->getBulkData($arr_parameters));
    }

    public function saveInventoryWriteoffs($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveInventoryWriteoffsBulk($this->getBulkData($arr_parameters));
    }

    public function savePayments($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SavePaymentsBulk($this->getBulkData($arr_parameters));
    }

    public function savePriceLists($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SavePriceListsBulk($this->getBulkData($arr_parameters));
    }

    public function saveProducts($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveProductsBulk($this->getBulkData($arr_parameters));
    }

    public function saveProductCatogeries($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveProductCategoriesBulk($this->getBulkData($arr_parameters));
    }

    public function saveProductGroups($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveProductGroupsBulk($this->getBulkData($arr_parameters));
    }

    public function savePurchaseDocuments($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SavePurchaseDocumentsBulk($this->getBulkData($arr_parameters));
    }

    public function saveSalesDocuments($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveSalesDocumentsBulk($this->getBulkData($arr_parameters));
    }

    public function saveSupplierGroups($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveSupplierGroupBulk($this->getBulkData($arr_parameters));
    }

    public function saveSuppliers($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveSuppliersBulk($this->getBulkData($arr_parameters));
    }


    public function saveVateRates($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveVatRatesBulk($this->getBulkData($arr_parameters));
    }

    public function saveWarehouses($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveWarehousesBulk($this->getBulkData($arr_parameters));
    }

    public function saveWarehouse($record)
    {
        return new SaveWarehouses($this->getSingleData($record->getQuery(false)));
    }

    public function saveVatRate($record)
    {
        return new SaveVatRates($this->getSingleData($record->getQuery(false)));
    }

    public function saveSupplierGroup($record)
    {
        return new SaveSupplierGroups($this->getSingleData($record->getQuery(false)));
    }

    public function saveProductGroup($record)
    {
        return new SaveProductGroups($this->getSingleData($record->getQuery(false)));
    }

    public function savePurchaseDocument($record, $rows = [])
    {
        return new SavePurchaseDocuments($this->getSingleData(array_merge($record->getQuery(false), $rows)));
    }

    public function saveSalesDocument($record, $rows = [])
    {
        return new SaveSalesDocuments($this->getSingleData(array_merge($record->getQuery(false), $rows)));
    }

    public function saveProductCategory($record)
    {
        return new SaveProductCategories($this->getSingleData($record->getQuery(false)));
    }

    public function savePriceList($record)
    {
        return new SavePriceLists($this->getSingleData($record->getQuery(false)));
    }

    public function savePayment($record)
    {
        return new SavePayments($this->getSingleData($record->getQuery(false)));
    }

    public function saveInventoryWriteOff($record)
    {
        return new SaveInventoryWriteOffs($this->getSingleData($record->getQuery(false)));
    }

    public function saveInventoryTransfer($record)
    {
        return new SaveInventoryTransfers($this->getSingleData($record->getQuery(false)));
    }

    public function saveInventoryRegistration($record)
    {
        return new SaveInventoryRegistrations($this->getSingleData($record->getQuery(false)));
    }

    public function saveGiftCard($record)
    {
        return new SaveGiftCards($this->getSingleData($record->getQuery(false)));
    }

    public function saveEmployee($record)
    {
        return new SaveEmployees($this->getSingleData($record->getQuery(false)));
    }

    public function saveEvent($record)
    {
        return new SaveEvents($this->getSingleData($record->getQuery(false)));
    }

    public function saveCustomer($record)
    {
        return new SaveCustomers($this->getSingleData($record->getQuery(false)));
    }

    public function saveCurrency($record)
    {
        return new SaveCurrencies($this->getSingleData($record->getQuery(false)));
    }

    public function saveCampaign($record)
    {
        return new SaveCampaigns($this->getSingleData($record->getQuery(false)));
    }

    public function saveAddress($record)
    {
        return new SaveAddresses($this->getSingleData($record->getQuery(false)));
    }

    public function saveProduct($record)
    {
        return new SaveProducts($this->getSingleData($record->getQuery(false)));
    }

    public function saveSupplier($record)
    {
        return new SaveSuppliers($this->getSingleData($record->getQuery(false)));
    }


    public function getSalesDocuments(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getSalesDocuments']);
        return new SaleDocuments($this->getSingleData($parameters));
    }

    public function getPurchaseDocuments(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getPurchaseDocuments']);
        return new PurchaseDocuments($this->getSingleData($parameters));
    }

    public function getEvents(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getEvents']);
        return new Events($this->getSingleData($parameters));
    }

    public function getCampaigns(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getCampaigns']);
        return new Campaigns($this->getSingleData($parameters));
    }

    public function getPayments(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getPayments']);
        return new Payments($this->getSingleData($parameters));
    }

    public function getPaymentsBulk(array $parameters = [[]])
    {
        $bulkParameters = [];
        foreach ($parameters as $parameter) {
            array_push($bulkParameters, array_merge(['requestName' => 'getPayments'], $parameter));
        }
        return new PaymentsBulk($this->getBulkData($bulkParameters));
    }

    public function getCustomersBulk(array $parameters = [[]])
    {
        $bulkParameters = [];
        foreach ($parameters as $parameter) {
            array_push($bulkParameters, array_merge(['requestName' => 'getCustomers'], $parameter));
        }
        return new CustomersBulk($this->getBulkData($bulkParameters));
    }

    public function getProductBulk(array $parameters = [[]])
    {
        $bulkParameters = [];
        foreach ($parameters as $parameter) {
            array_push($bulkParameters, array_merge(['requestName' => 'getProducts'], $parameter));
        }
        return new ProductsBulk($this->getBulkData($bulkParameters));
    }

    public function getPriceListBulk(array $parameters = [[]])
    {
        $bulkParameters = [];
        foreach ($parameters as $parameter) {
            array_push($bulkParameters, array_merge(['requestName' => 'getPriceLists'], $parameter));
        }
        return new PriceListBulk($this->getBulkData($bulkParameters));
    }

    public function getInventoryWriteOffs(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getInventoryWriteOffs']);
        return new InventoryWriteoffs($this->getSingleData($parameters));
    }

    public function getInventoryTransfers(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getInventoryTransfers']);
        return new InventoryTransfers($this->getSingleData($parameters));
    }

    public function getInventoryRegistrations(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getInventoryRegistrations']);
        return new InventoryRegistrations($this->getSingleData($parameters));
    }

    public function getVatRates(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getVatRates']);
        return new VatRates($this->getSingleData($parameters));
    }

    public function getWarehouses(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getWarehouses']);
        return new Warehouses($this->getSingleData($parameters));
    }

    public function getProductCategories(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getProductCategories']);
        return new ProductCategories($this->getSingleData($parameters));
    }

    public function getSupplierGroups(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getSupplierGroups']);
        return new SupplierGroups($this->getSingleData($parameters));
    }

    public function getProductGroups(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getProductGroups']);
        return new ProductGroups($this->getSingleData($parameters));
    }

    public function getChangedDataSince($changeSince, array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getChangedDataSince', 'changedSince' => $changeSince]);
        return new ChangeDataSinces($this->getSingleData($parameters));
    }

    public function getPriceLists(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getPriceLists']);
        return new PriceLists($this->getSingleData($parameters));
    }

    public function getPointsOfSale(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getPointsOfSale']);
        return new PointOfSales($this->getSingleData($parameters));
    }

    public function getGiftCards(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getGiftCards']);
        return new GiftCards($this->getSingleData($parameters));
    }

    public function getCustomerGroups(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getCustomerGroups']);
        return new CustomerGroups($this->getSingleData($parameters));
    }

    public function saveCustomerGroup($record)
    {
        return new SaveCustomerGroups($this->getSingleData($record->getQuery(false)));
    }

    public function saveCustomerGroups($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveCustomerGroupsBulk($this->getBulkData($arr_parameters));
    }

    public function getAddresses(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getAddresses']);
        return new Addresses($this->getSingleData($parameters));
    }

    public function getCurrencies(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getCurrencies']);
        return new Currencies($this->getSingleData($parameters));
    }

    public function getSuppliers(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getSuppliers']);
        return new Suppliers($this->getSingleData($parameters));
    }

    public function getEmployees(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getEmployees']);
        return new Employees($this->getSingleData($parameters));
    }

    public function getProducts(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getProducts']);
        return new Products($this->getSingleData($parameters));
    }

    public function getBrands(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getBrands']);
        return new Brands($this->getSingleData($parameters));
    }

    public function saveBrand($record)
    {
        return new SaveBrands($this->getSingleData($record->getQuery(false)));
    }

    public function saveBrands($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveBrandBulk($this->getBulkData($arr_parameters));
    }

    public function getMatrixDimensions(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getMatrixDimensions']);
        return new MatrixDimentions($this->getSingleData($parameters));
    }

    public function saveMatrixDimension($record)
    {
        return new SaveMatrixDimentions($this->getSingleData($record->getQuery(false)));
    }

    public function saveMatrixDimensions($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveMatrixDimentionsBulk($this->getBulkData($arr_parameters));
    }


    public function addItemToMatrixDimension($record)
    {
        return new SaveAddMatrixDimensions($this->getSingleData($record->getQuery(false)));
    }

    public function addItemsToMatrixDimension($records)
    {
        $arr_parameters = [];
        foreach ($records->getRecords() as $record) {
            array_push($arr_parameters, $record->getQuery(true));
        }
        return new SaveAddMatrixDimensionsBulk($this->getBulkData($arr_parameters));
    }

    public function getCustomers(array $parameters = [])
    {
        $parameters = array_merge($parameters, ['request' => 'getCustomers']);
        return new Customers($this->getSingleData($parameters));
    }

    public function getSingleData(array $parameters = [])
    {
        if (!empty($this->getSessionKey())) {
            if (!empty($parameters)) {
                $requestParams = $parameters;
            } else {
                $requestParams = $this->parameters;
            }
            $requestParams['sessionKey'] = $this->sessionKey;
            $requestParams['clientCode'] = $this->code;
            $requestParams['version'] = '1.0';
            $response = $this->sendPostDataToErply($requestParams);
            return $response;
        } else {
            print_r('Maximum api calls reached');
            print_r("Sleeping For 5 Min");
            sleep(300);
        }
    }

    public function getBulkData(array $parameters = [])
    {
        if (!empty($this->sessionKey)) {
            $responses = [];
            $parameters = empty($parameters) ? $this->parameters : $parameters;
            $chunkedData = array_chunk($parameters, 100);
            foreach ($chunkedData as $key => $paramChunk) {
                $responses[$key] = $this->sendBulk($paramChunk);
            }
            return $responses;
        } else {
            print_r('Maximum api calls reached');
            print_r("Sleeping For 5 Min");
            sleep(300);
        }
    }

    /**
     * @return ErplyAPI|string
     */

    public static function getErplyInstance()
    {
        if (env('ERPLY_CLIENTID') != null) {
            $erply = new ErplyAPI();
            $erply->verifySession();
            return $erply;
        } else {
            return 'Set Envirement Credentials Properly';
        }
    }

    public static function getErplyInstance2($code, $username, $password)
    {
        $erply = new ErplyAPI();
        $erply->verifySession2($code, $username, $password);
        return $erply;
    }

    private function sendBulk(array $parameters = [])
    {
        if (!empty($parameters)) {
            $requestParams = $parameters;
        } else {
            $requestParams = $this->parameters;
        }
        $bulkRequestParams = [];
        $bulkRequestParams['requests'] = json_encode($requestParams);
        $bulkRequestParams['clientCode'] = $this->code;
        $bulkRequestParams['version'] = '1.0';
        $bulkRequestParams['sessionKey'] = $this->sessionKey;
        $response = $this->sendPostDataToErply($bulkRequestParams);
        return $response;
    }

    private function verifySession(): \stdClass
    {
        $parameters = [];
        $parameters['request'] = 'verifyUser';
        $parameters['clientCode'] = env('ERPLY_CLIENTID');
        $parameters['username'] = env('ERPLY_USER');
        $parameters['password'] = env('ERPLY_PASS');
        $parameters['version'] = '2.0';
        $parameters['sessionLength'] = 86400;
        $this->setCode(env('ERPLY_CLIENTID'));
        $response = $this->sendSingle($parameters);
        if ($response->status->errorCode == 1002) {
            print_r('Maximum api calls reached');
            print_r("Sleeping For 5 Min");
            sleep(300);
        }
        if (isset($response->records[0]->sessionKey)) {
            $this->setSessionKey($response->records[0]->sessionKey);
        }
        return $response;
    }

    private function verifySession2($code, $username, $password): \stdClass
    {
        $parameters = [];
        $parameters['request'] = 'verifyUser';
        $parameters['clientCode'] = $code;
        $parameters['username'] = $username;
        $parameters['password'] = $password;
        $parameters['version'] = '2.0';
        $parameters['sessionLength'] = 86400;
        $this->setCode(env('ERPLY_CLIENTID'));
        $response = $this->sendSingle($parameters);
        if ($response->status->errorCode == 1002) {
            print_r('Maximum api calls reached');
            print_r("Sleeping For 5 Min");
            sleep(300);
        }
        if (isset($response->records[0]->sessionKey)) {
            $this->setSessionKey($response->records[0]->sessionKey);
        }
        return $response;
    }

    private function sendSingle(array $parameters = [])
    {
        if (!empty($parameters)) {
            $requestParams = $parameters;
        } else {
            $requestParams = $this->getParameters();
        }
        $requestParams['sessionKey'] = $this->getSessionKey();
        $requestParams['clientCode'] = $this->getCode();
        $requestParams['version'] = '1.0';
        $response = $this->sendPostDataToErply($requestParams); //TODO Handle the exception here
        return $response;
    }

    private function sendPostDataToErply($requestParams)
    {
        $erplyApi = env('ERPLY_API_URL', 'https://' . $this->getCode() . '.erply.com/api/');
        $curl_options = [
            CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_POST => true,
            CURLOPT_FOLLOWLOCATION => false
        ];
        if (env('ERPLY_CURLOPT_SSL_VERIFYPEER', false) === true) {
            $curl_options[CURLOPT_CAINFO] = env('ERPLY_CURLOPT_CAINFO', '/etc/ssl/cert.pem');
            $curl_options[CURLOPT_SSL_VERIFYPEER] = true;
        }
        $client = new Client();
        try {
            $response = $client->request('POST', $erplyApi, [
                'form_params' => $requestParams,
                'curl.options' => $curl_options,
                'headers' => [
                    'Accept' => "*/*",
                    'User-Agent' => 'webtize/1.1.0',
                ],
                'version' => 1.1,
            ]);
        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
        $response = json_decode($response->getBody());
        return $response;
    }

    private function getCode()
    {
        return $this->code;
    }

    private function setCode($code): void
    {
        $this->code = $code;
    }

    private function getUsername()
    {
        return $this->username;
    }

    private function setUsername($username): void
    {
        $this->username = $username;
    }

    private function getPassword()
    {
        return $this->password;
    }

    private function setPassword($password): void
    {
        $this->password = $password;
    }

    private function getParameters(): array
    {
        return $this->parameters;
    }

    private function setParameters(array $parameters): void
    {
        $this->parameters = $parameters;
    }

    private function getSessionKey()
    {
        return $this->sessionKey;
    }

    private function setSessionKey($sessionKey): void
    {
        $this->sessionKey = $sessionKey;
    }
}
