---
title: Account
parent: API
layout: page
---

# Api/AccountApi

[Account API Reference](https://api.kronup.com/#tag/Account)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->account();
```

## Methods

Method | Description
------------- | -------------
[**accountDelete()**](#accountdelete) | Delete account
[**accountRead()**](#accountread) | Fetch account
[**accountUpdate()**](#accountupdate) | Update account


## `accountDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **accountDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->accountDelete(): bool
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Description

> Delete account

Delete the current account. This action is reversible only if you sign back in within 14 days. API calls and service accounts cannot restore deleted accounts.

[Back to top](#top){: .btn .btn-purple }

---


## `accountRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **accountRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->accountRead(): \Kronup\Model\Account
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

### Description

> Fetch account

Retrieve the current account model

[Back to top](#top){: .btn .btn-purple }

---


## `accountUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **accountUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->accountUpdate(
    \Kronup\Model\PayloadAccountUpdate $payload_account_update
): \Kronup\Model\Account
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$payload_account_update** | [**\Kronup\Model\PayloadAccountUpdate**](../../Model/PayloadAccountUpdate) |  

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

### Description

> Update account

Update the current account model.

[Back to top](#top){: .btn .btn-purple }

---
