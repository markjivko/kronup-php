---
title: Experiences
parent: API
layout: page
---

# Api/ExperiencesApi

[Experiences API Reference](https://api.kronup.com/#tag/Experiences)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## Methods

Method | Description
------------- | -------------
[**evaluatePeer()**](#evaluatepeer) | Evaluate peer
[**evaluateSelf()**](#evaluateself) | Self-evaluation
[**list()**](#list) | Fetch all experiences
[**read()**](#read) | Fetch notion experience



## `evaluatePeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluatePeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluatePeer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/users/{userId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->evaluatePeer(
    string $notion_id,
    string $user_id,
    string $grade
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$user_id** | **string**  | User ID 
 **$grade** | **string**  | Grade between 1 and 5 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Evaluate peer

Anonymously evaluate another user on this notion. Only the last evaluation is kept in a 24 hours interval.

[Back to top](#top){: .btn .btn-purple }

---



## `evaluateSelf()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluateSelf.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluateSelf.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->evaluateSelf(
    string $notion_id,
    string $grade
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$grade** | **string**  | Grade between 1 and 5 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Self-evaluation

Evaluate yourself on a notion. Only the last evaluation is kept in a 24 hours interval.

[Back to top](#top){: .btn .btn-purple }

---



## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->list(
    string $user_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ExperiencesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ExperiencesList**](../../Model/ExperiencesList)

### Description

> Fetch all experiences

Retrieve all experience models for this user

[Back to top](#top){: .btn .btn-purple }

---



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/notions/{notionId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->read(
    string $notion_id,
    string $user_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Fetch notion experience

Retrieve experience model for specified Notion

[Back to top](#top){: .btn .btn-purple }

---
