---
title: "Deep Context"
parent: API
layout: page
---

# Api/DeepContextApi

[Deep Context API Reference](https://api.kronup.com/#tag/Deep-Context)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->deepContext();
```

## Methods

Method | Description
------------- | -------------
[**delete()**](#delete) | Delete value item
[**read()**](#read) | Fetch expanded value item
[**search()**](#search) | Search value items



## `delete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/delete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/deep-context/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->delete(
    string $item_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$item_id** | **string**  | Value item ID 

### Return type

**bool**

### Description

> Delete value item

Delete a value item from Deep Context

[Back to top](#top){: .btn .btn-purple }

---



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/deep-context/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->read(
    string $item_id
): \Kronup\Model\ValueItemExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$item_id** | **string**  | Value item ID 

### Return type

[**\Kronup\Model\ValueItemExpanded**](../../Model/ValueItemExpanded)

### Description

> Fetch expanded value item

Retrieve value item model

[Back to top](#top){: .btn .btn-purple }

---



## `search()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **search.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/search.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/deep-context`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->search(
    [ string $search_term, ]
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\DeepContextList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$search_term** | **string**  | Search term 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\DeepContextList**](../../Model/DeepContextList)

### Description

> Search value items

Get a list of value item models

[Back to top](#top){: .btn .btn-purple }

---
