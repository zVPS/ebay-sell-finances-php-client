# Ebay\Sell\Finances\TransferApi

All URIs are relative to https://apiz.ebay.com/sell/finances/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransfer()**](TransferApi.md#getTransfer) | **GET** /transfer/{transfer_Id} | 


## `getTransfer()`

```php
getTransfer($transfer_id): \Ebay\Sell\Finances\Model\Transfer
```



This method retrieves detailed information regarding a TRANSFER transaction type. A TRANSFER is a monetary transaction type that involves a seller transferring money to eBay for reimbursement of one or more charges. For example, when a seller reimburses eBay for a buyer refund. If an ID is passed into the URI that is an identifier for another transaction type, this call will return an http status code of 404 Not found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Finances\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Finances\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_id = 'transfer_id_example'; // string | The unique identifier of the TRANSFER transaction type you wish to retrieve.

try {
    $result = $apiInstance->getTransfer($transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->getTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_id** | **string**| The unique identifier of the TRANSFER transaction type you wish to retrieve. |

### Return type

[**\Ebay\Sell\Finances\Model\Transfer**](../Model/Transfer.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
