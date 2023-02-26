---
title: Value items
parent: API
layout: page
---

# Api/ValueItemsApi

[Value items API Reference](https://api.kronup.com/#tag/Value-items)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->valueItems();
```

## Methods

Method | Description
------------- | -------------
[**valueItemCreate()**](#valueitemcreate) | Create value item
[**valueItemList()**](#valueitemlist) | List value items


## `valueItemCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **valueItemCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemCreate(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    \Kronup\Model\ValueItemCreateRequest $value_item_create_request
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$value_item_create_request** | [**\Kronup\Model\ValueItemCreateRequest**](../../Model/ValueItemCreateRequest) |  

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Create value item

Add a value item to planning

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **valueItemList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemList(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ValueItemList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ValueItemList**](../../Model/ValueItemList)

### Description

> List value items

Get a list of value item models

[Back to top](#top){: .btn .btn-purple }

---
