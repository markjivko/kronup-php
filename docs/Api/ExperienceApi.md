---
title: Experience
parent: API
layout: page
---

# Api/ExperienceApi

[Experience API Reference](https://api.kronup.com/#tag/Experience)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experience();
```

## Methods

Method | Description
------------- | -------------
[**keywordCreate()**](#keywordcreate) | Create keyword


## `keywordCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **keywordCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperienceApi/keywordCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/keywords`

### Type signature

```php
(new \Kronup\Sdk())->api()->experience()->keywordCreate(
    string $x_org_id,
    \Kronup\Model\RequestKeywordCreate $request_keyword_create
): \Kronup\Model\Keyword
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$request_keyword_create** | [**\Kronup\Model\RequestKeywordCreate**](../../Model/RequestKeywordCreate) |  

### Return type

[**\Kronup\Model\Keyword**](../../Model/Keyword)

### Description

> Create keyword

Define a keyword

[Back to top](#top){: .btn .btn-purple }

---
