---
title: "Service accounts"
parent: API
layout: page
---

# Api/ServiceAccountsApi

Method | Description
------------- | -------------
🔹 [**close()**](#close) | Close service account
🔹 [**create()**](#create) | Create service account
🔹 [**list()**](#list) | List service acounts
🔹 [**read()**](#read) | Fetch service account
🔹 [**regenerate()**](#regenerate) | Regenerate
🔹 [**update()**](#update) | Update service account


📚 [Service accounts API Reference](https://api.kronup.com/#tag/Service-accounts)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->serviceAccounts();
```


## `close()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **close.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/close.php){: .btn .mt-4}

### Request

> **DELETE** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->close(
    string $account_id
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Close service account

Close this service account. This action is always reversible. You can re-open it anytime with "regenerate".

[🔺 Back to top](#top)

---


## `create()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/service-accounts`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->create(
    \Kronup\Model\PayloadServiceAccountCreate $payload_service_account_create
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_service_account_create** | [**\Kronup\Model\PayloadServiceAccountCreate**](../../Model/PayloadServiceAccountCreate) |  

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Create service account

Create a new service account for this Organization

[🔺 Back to top](#top)

---


## `list()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/list.php){: .btn .mt-4}

### Request

> **GET** `/service-accounts`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ServiceAccountsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ServiceAccountsList**](../../Model/ServiceAccountsList)

### Description

> List service acounts

Get a list of all service account models, including those that were closed

[🔺 Back to top](#top)

---


## `read()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/read.php){: .btn .mt-4}

### Request

> **GET** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->read(
    string $account_id
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service Account ID 

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Fetch service account

Retrieve service account model

[🔺 Back to top](#top)

---


## `regenerate()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **regenerate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/regenerate.php){: .btn .mt-4}

### Request

> **PUT** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->regenerate(
    string $account_id
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Regenerate

Regenerate service account JSON Web Token and re-open service account if previously closed

[🔺 Back to top](#top)

---


## `update()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ServiceAccountsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/service-accounts/{accountId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->serviceAccounts()->update(
    string $account_id,
    \Kronup\Model\PayloadServiceAccountUpdate $payload_service_account_update
): \Kronup\Model\ServiceAccount
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$account_id** | **string**  | Service account ID 
 **$payload_service_account_update** | [**\Kronup\Model\PayloadServiceAccountUpdate**](../../Model/PayloadServiceAccountUpdate) |  

### Return type

[**\Kronup\Model\ServiceAccount**](../../Model/ServiceAccount)

### Description

> Update service account

Update service account details

[🔺 Back to top](#top)

---
