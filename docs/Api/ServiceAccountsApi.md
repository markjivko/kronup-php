---
title: Service accounts
parent: API
layout: page
---

# Api/ServiceAccountsApi

[Service accounts API Reference](https://api.kronup.com/#tag/Service-accounts)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->serviceAccounts();
```

## Methods

Method | Description
------------- | -------------
[**serviceAccountCreate()**](#serviceaccountcreate) | Create service account
[**serviceAccountDelete()**](#serviceaccountdelete) | Delete service account
[**serviceAccountList()**](#serviceaccountlist) | List service acounts
[**serviceAccountRead()**](#serviceaccountread) | Fetch service account
[**serviceAccountRegenerate()**](#serviceaccountregenerate) | Regenerate
[**serviceAccountUpdate()**](#serviceaccountupdate) | Update service account


## `serviceAccountCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/service-accounts`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountCreate(
    string $x_org_id,
    \Kronup\Model\PayloadServiceAccountCreate $payload_service_account_create
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$payload_service_account_create** | [**\Kronup\Model\PayloadServiceAccountCreate**](../../Model/PayloadServiceAccountCreate) |  

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Create service account

Create a new service account for this Organization

[Back to top](#top){: .btn .btn-purple }

---


## `serviceAccountDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountDelete(
    string $account_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Delete service account

Delete this service account. This action cannot be reversed.

[Back to top](#top){: .btn .btn-purple }

---


## `serviceAccountList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/service-accounts`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountList(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ServiceAccountsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ServiceAccountsList**](../../Model/ServiceAccountsList)

### Description

> List service acounts

Get a list of all service account models, including those that were closed

[Back to top](#top){: .btn .btn-purple }

---


## `serviceAccountRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountRead(
    string $account_id,
    string $x_org_id
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service Account ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Fetch service account

Retrieve service account model

[Back to top](#top){: .btn .btn-purple }

---


## `serviceAccountRegenerate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountRegenerate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountRegenerate.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountRegenerate(
    string $account_id,
    string $x_org_id
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Regenerate

Re-open service account if previously closed and regenerate service account JSON Web Token

[Back to top](#top){: .btn .btn-purple }

---


## `serviceAccountUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **serviceAccountUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/serviceAccountUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->serviceAccountUpdate(
    string $account_id,
    string $x_org_id,
    \Kronup\Model\PayloadServiceAccountUpdate $payload_service_account_update
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_service_account_update** | [**\Kronup\Model\PayloadServiceAccountUpdate**](../../Model/PayloadServiceAccountUpdate) |  

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Update service account

Update service account details

[Back to top](#top){: .btn .btn-purple }

---
