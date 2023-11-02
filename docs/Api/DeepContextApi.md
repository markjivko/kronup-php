---
title: "API - Deep Context"
description: "API methods for Deep Context"
parent: API
layout: page
---

# Api / Deep Context

Method | Description
------------- | -------------
🔹 [**delete()**](#delete) | Delete feature
🔹 [**read()**](#read) | Fetch expanded feature
🔹 [**search()**](#search) | Search features


📚 [Deep Context API Reference](https://api.kronup.com/#tag/Deep-Context)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->deepContext();
```


## `delete()`

> Delete a feature from Deep Context


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/deep-context/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->delete(
    string $feature_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$feature_id** | **string**  | Feature ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `read()`

> Retrieve feature model


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/read.php){: .btn .mt-4}

### Request

> **GET** `/deep-context/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->read(
    string $feature_id
): \Kronup\Model\FeatureExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$feature_id** | **string**  | Feature ID 

### Return type

[**\Kronup\Model\FeatureExpanded**](../../Model/FeatureExpanded)

[🔺 Back to top](#top)

---


## `search()`

> Get a list of feature models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **search.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/DeepContextApi/search.php){: .btn .mt-4}

### Request

> **GET** `/deep-context`

### Type signature

```php
(new \Kronup\Sdk())->api()->deepContext()->search(
    [ string $search_term, ]
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\DeepContextList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$search_term** | **string**  | Search term 
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\DeepContextList**](../../Model/DeepContextList)

[🔺 Back to top](#top)

---
