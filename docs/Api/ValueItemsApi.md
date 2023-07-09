---
title: "Value items"
parent: API
layout: page
---

# Api/ValueItemsApi

Method | Description
------------- | -------------
🔹 [**advance()**](#advance) | Advance value item
🔹 [**create()**](#create) | Create value item
🔹 [**delete()**](#delete) | Delete value item
🔹 [**list()**](#list) | List value items
🔹 [**read()**](#read) | Fetch value item
🔹 [**update()**](#update) | Update value item


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `advance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **advance.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/advance.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->advance(
    string $team_id,
    string $channel_id,
    string $item_id
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Advance value item

Advance a value item

[Back to top](#top){: .btn .btn-purple }

---


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `create()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/create.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->create(
    string $team_id,
    string $channel_id,
    \Kronup\Model\PayloadValueItemCreate $payload_value_item_create
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$payload_value_item_create** | [**\Kronup\Model\PayloadValueItemCreate**](../../Model/PayloadValueItemCreate) |  

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Create value item

Add a value item to planning

[Back to top](#top){: .btn .btn-purple }

---


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `delete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/delete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->delete(
    string $team_id,
    string $channel_id,
    string $item_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 

### Return type

**bool**

### Description

> Delete value item

Delete a value item from the flow

[Back to top](#top){: .btn .btn-purple }

---


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->list(
    string $team_id,
    string $channel_id,
    [ string $stage, ]
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ValueItemsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$stage** | **string**  | Value item stage 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ValueItemsList**](../../Model/ValueItemsList)

### Description

> List value items

Get a list of value item models

[Back to top](#top){: .btn .btn-purple }

---


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->read(
    string $team_id,
    string $channel_id,
    string $item_id
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Fetch value item

Retrieve value item model

[Back to top](#top){: .btn .btn-purple }

---


📚 [Value items API Reference](https://api.kronup.com/#tag/Value-items)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## `update()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/update.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->update(
    string $team_id,
    string $channel_id,
    string $item_id,
    \Kronup\Model\PayloadValueItemUpdate $payload_value_item_update
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$payload_value_item_update** | [**\Kronup\Model\PayloadValueItemUpdate**](../../Model/PayloadValueItemUpdate) |  

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Update value item

Update value item details

[Back to top](#top){: .btn .btn-purple }

---
