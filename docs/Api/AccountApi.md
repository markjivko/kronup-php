---
title: "Account"
parent: API
layout: page
---

# Api/AccountApi

Method | Description
------------- | -------------
🔹 [**avatar()**](#avatar) | Update avatar
🔹 [**close()**](#close) | Close account
🔹 [**eventsList()**](#eventslist) | Fetch events
🔹 [**read()**](#read) | Fetch account
🔹 [**update()**](#update) | Update account


📚 [Account API Reference](https://api.kronup.com/#tag/Account)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->account();
```


## `avatar()`



> Update avatar

Update account avatar

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **avatar.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/avatar.php){: .btn .mt-4}

### Request

> **POST** `/account/avatar`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->avatar(
    [ \SplFileObject $avatar ]
): \Kronup\Model\Account
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$avatar** | **\SplFileObject** **\SplFileObject**  | Avatar - must be a PNG file, exactly 256x256 pixels, smaller than 200KB 

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

[🔺 Back to top](#top)

---


## `close()`



> Close account

Close the current account. This action is reversible only if you sign back in within 14 days. You must first abandon or delete all the organizations you own to perform this action.

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **close.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/close.php){: .btn .mt-4}

### Request

> **DELETE** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->close(): bool
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

[🔺 Back to top](#top)

---


## `eventsList()`



> Fetch events

Get a list of event models

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **eventsList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/eventsList.php){: .btn .mt-4}

### Request

> **GET** `/account/events`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->eventsList(
    [ int $page_number = 1, ]
    [ int $page_size = 100, ]
    [ int $aggregate = 1 ]
): \Kronup\Model\EventsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]
 **$aggregate** | **int**  | Aggregate notion events  [default to 1]

### Return type

[**\Kronup\Model\EventsList**](../../Model/EventsList)

[🔺 Back to top](#top)

---


## `read()`



> Fetch account

Retrieve the current account model

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/read.php){: .btn .mt-4}

### Request

> **GET** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->read(): \Kronup\Model\Account
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

[🔺 Back to top](#top)

---


## `update()`



> Update account

Update the current account model.

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/update.php){: .btn .mt-4}

### Request

> **POST** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->update(
    \Kronup\Model\PayloadAccountUpdate $payload_account_update
): \Kronup\Model\Account
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_account_update** | [**\Kronup\Model\PayloadAccountUpdate**](../../Model/PayloadAccountUpdate) |  

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

[🔺 Back to top](#top)

---
