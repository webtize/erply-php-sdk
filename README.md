# erply-php-sdk
  ## Import Library into project

   ### You can use
    "composer require webtize/erply-php-sdk"
   
   ### Add into Composer.json file in project
   
      "repositories": [
              {
                  "type": "vcs",
                  "url": "https://github.com/webtize/erply-php-sdk"
              }
          ]
      "require": {
              "webtize/erply-php-sdk": "^1.0"
          }

      In terminal execute command "composer update"

  ### How to Use Library

  #### Creating Instance for one account with eviroment variables

  ##### Set up .env file
    Add 

    ERPLY_CLIENTID=######
    ERPLY_USER = ######
    ERPLY_PASS = ######

    into you .env file of project

  ##### gettting Instance

    $erply = ErplyAPI::getErplyInstance();

  #### Creating Instance for multiple account  without eviroment variables
    $erply = ErplyAPI::getErplyInstance2($code, $username, $password);

  ### Examples Fetching data from Erply
        ### Product Group Ids ###
            $response = $erply->getProductGroups(['recordsOnPage' => 100, 'pageNo' => $currentPage]);
            if ($response->getStatus()->getResponseStatus() == 'ok') {
                foreach ($response->getRecords() as $record) {
                    $this->saveIds($record->getProductGroupID(), $record->getName(), 'group');
                }
        ### Customer Group Ids ###
            $response = $erply->getCustomerGroups(['recordsOnPage' => 100, 'pageNo' => $currentPage]);
            if ($response->getStatus()->getResponseStatus() == 'ok') {
                foreach ($response->getRecords() as $record) {
                    $this->saveIds($record->getCustomerGroupID(), $record->getName(), 'cgroup');
                }
        ### Suppplier ###
            $response = $erply->getSuppliers(['recordsOnPage' => 100, 'pageNo' => $currentPage]);
            if ($response->getStatus()->getResponseStatus() == 'ok') {
                foreach ($response->getRecords() as $record) {
                    $name = $record->getCompanyName();
                    if ($name == null) {
                        $name = $record->getFullName();
                    }
        ####Brands####
            $response = $erply->getBrands(['recordsOnPage' => 100, 'pageNo' => $currentPage]);
            if ($response->getStatus()->getResponseStatus() == 'ok') {
                foreach ($response->getRecords() as $record) {
                    $this->saveIds($record->getBrandID(), $record->getName());
                }
        ####Dimentions#####
            $response = $erply->getMatrixDimensions(['recordsOnPage' => 100, 'pageNo' => $currentPage]);
            if ($response->getStatus()->getResponseStatus() == 'ok') {
                foreach ($response->getRecords() as $record) {
                    foreach ($record->getVariations() as $variation) {
                        $this->saveDIds($record->getDimensionID(), $variation->getCode(), 'dimension', $variation->getVariationID());
                    }
                 }
             }
 ### Example Saving data on Erply
    $arr_customers = [];
        foreach ($this->customers as $person) {
            $customer = new Customer();
            $customer->setGroupID($person->CUSTOMERGROUP);
            $customer->setIntegrationCode($person->CUSTOMERCODE);
            $customer->setFullName($person->CUSTOMERNAME);
            $customer->setEmail($person->EMAIL);
            $customer->setPhone($person->PHONE1);
            $customer->setJobTitleID($person->CONTACTPERSONPOSITION);
            $customer->setPaymentDays($person->PAYMENTTERMS);
            $customer->setVatNumber($person->ABNNO);
            $customer->setCountryID($person->BILLCOUNTRY);
            $customer->setRequestID($person->CUSTOMERCODE);
            array_push($arr_customers, $customer);
        }

        $customers = new Customers();
        $customers->setRecords($arr_customers);
        
        $response = $this->erply->saveCustomers($customers);

        if ($response->getStatus()->getResponseStatus() == 'ok') {
            foreach ($response->getRequests() as $request) {
                if ($request->getStatus()->getResponseStatus() == 'ok') {
                    print_r($request->getRecords());
                }
            }
        }

  ### Fetching Data in Bulk from Erply
      $arr_payments_query = [];  
      foreach ($this->getDocs() as $doc) {
            if ($this->checkLogRecord($doc->getId())) {
                array_push($arr_payments_query, ['requestID' => $doc->getId(), 'documentID' => $doc->getId()]);
                $payment_arr[$doc->getId()] = [];
            }
        }

        $response = $this->erply->getPaymentsBulk($arr_payments_query);
        if ($response->getStatus()->getResponseStatus() == 'ok') {
            foreach ($response->getRequests() as $request) {
                if ($request->getStatus()->getResponseStatus() == 'ok') {
                    foreach ($request->getRecords() as $record) {
                        print_r($record);
                    }
                }
            }
        }
