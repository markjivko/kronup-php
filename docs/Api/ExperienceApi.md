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
[**evaluatePeer()**](#evaluatepeer) | Evaluate peer
[**evaluateSelf()**](#evaluateself) | Self-evaluation


## `evaluatePeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluatePeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperienceApi/evaluatePeer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/users/{userId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experience()->evaluatePeer(
    string $notion_id,
    string $user_id,
    string $grade,
    string $x_org_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$user_id** | **string**  | User ID 
 **$grade** | **string**  | Grade between 1 and 10 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Evaluate peer

Anonymously evaluate another user on this notion

[Back to top](#top){: .btn .btn-purple }

---


## `evaluateSelf()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluateSelf.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperienceApi/evaluateSelf.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experience()->evaluateSelf(
    string $notion_id,
    string $grade,
    string $x_org_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$grade** | **string**  | Grade between 1 and 10 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Self-evaluation

Evaluate yourself on a notion

[Back to top](#top){: .btn .btn-purple }

---
