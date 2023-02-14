---
title: Account
parent: API
layout: page
---

# Api/AccountApi

[Account API Reference](https://api.kronup.com/tag/Account/)

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
[**accountRead()**](#accountread) | Read account data
[**accountUpdate()**](#accountupdate) | Update account data


## `accountDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **accountDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->accountDelete(): string[]
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Description

> Delete account

Delete current account, along with any organization under sole ownership of this account

[Back to top](#top){: .btn .btn-purple }

---


## `accountRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **accountRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountRead.php){: .btn .btn-green .mt-4}

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

> Read account data

Retrieve the current account model

[Back to top](#top){: .btn .btn-purple }

---


## `accountUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **accountUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AccountApi/accountUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/account`

### Type signature

```php
(new \Kronup\Sdk())->api()->account()->accountUpdate(
    \Kronup\Model\AccountUpdateRequest $account_update_request
): \Kronup\Model\AccountUpdate200Response
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$account_update_request** | [**\Kronup\Model\AccountUpdateRequest**](../../Model/AccountUpdateRequest) |  |

### Return type

[**\Kronup\Model\AccountUpdate200Response**](../../Model/AccountUpdate200Response)

### Description

> Update account data

Update the current account model

[Back to top](#top){: .btn .btn-purple }

---
