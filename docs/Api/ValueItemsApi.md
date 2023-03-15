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
[**valueItemAdvance()**](#valueitemadvance) | Advance value item
[**valueItemCreate()**](#valueitemcreate) | Create value item
[**valueItemDelete()**](#valueitemdelete) | Delete value item
[**valueItemList()**](#valueitemlist) | List value items
[**valueItemRead()**](#valueitemread) | Fetch value item
[**valueItemUpdate()**](#valueitemupdate) | Update value item


## `valueItemAdvance()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemAdvance.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemAdvance.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemAdvance(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Advance value item

Advance a value item

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemCreate(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    \Kronup\Model\PayloadValueItemCreate $payload_value_item_create
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_value_item_create** | [**\Kronup\Model\PayloadValueItemCreate**](../../Model/PayloadValueItemCreate) |  

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Create value item

Add a value item to planning

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete value item

Delete a value item from the flow

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemList.php){: .btn .btn-green .mt-4}

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
): \Kronup\Model\ValueItemsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ValueItemsList**](../../Model/ValueItemsList)

### Description

> List value items

Get a list of value item models

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemRead(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Fetch value item

Retrieve value item model

[Back to top](#top){: .btn .btn-purple }

---


## `valueItemUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **valueItemUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/valueItemUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->valueItemUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    \Kronup\Model\PayloadValueItemUpdate $payload_value_item_update
): \Kronup\Model\ValueItem
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_value_item_update** | [**\Kronup\Model\PayloadValueItemUpdate**](../../Model/PayloadValueItemUpdate) |  

### Return type

[**\Kronup\Model\ValueItem**](../../Model/ValueItem)

### Description

> Update value item

Update value item details

[Back to top](#top){: .btn .btn-purple }

---
