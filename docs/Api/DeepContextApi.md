---
title: Deep Context
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
[**deepContextDelete()**](#deepcontextdelete) | Delete value item
[**deepContextRead()**](#deepcontextread) | Fetch value item
[**deepContextSearch()**](#deepcontextsearch) | Search value items


## `deepContextDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **deepContextDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/deepContextDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/deep-context/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->deepContextDelete(
    string $item_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete value item

Delete a value item from Deep Context";

[Back to top](#top){: .btn .btn-purple }

---


## `deepContextRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **deepContextRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/deepContextRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/deep-context/{itemId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->deepContextRead(
    string $item_id,
    string $x_org_id
): \Kronup\Model\ValueItemExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$item_id** | **string**  | Value item ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\ValueItemExpanded**](../../Model/ValueItemExpanded)

### Description

> Fetch value item

Retrieve value item model

[Back to top](#top){: .btn .btn-purple }

---


## `deepContextSearch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **deepContextSearch.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/deepContextSearch.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/deep-context`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->deepContextSearch(
    string $x_org_id,
    [ string $search_term, ]
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\DeepContextList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
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
