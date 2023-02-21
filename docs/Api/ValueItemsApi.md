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
[**itemCreate()**](#itemcreate) | Create value item
[**itemList()**](#itemlist) | List value items


## `itemCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **itemCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/itemCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->itemCreate(
    string $x_org_id,
    \Kronup\Model\ItemCreateRequest $item_create_request
): \Kronup\Model\Item
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$item_create_request** | [**\Kronup\Model\ItemCreateRequest**](../../Model/ItemCreateRequest) |  

### Return type

[**\Kronup\Model\Item**](../../Model/Item)

### Description

> Create value item

Add a value item to planning

[Back to top](#top){: .btn .btn-purple }

---


## `itemList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **itemList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ValueItemsApi/itemList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/items`

### Type signature

```php
(new \Kronup\Sdk())->api()->valueItems()->itemList(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ItemList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ItemList**](../../Model/ItemList)

### Description

> List value items

List value items

[Back to top](#top){: .btn .btn-purple }

---
