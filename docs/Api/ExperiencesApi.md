---
title: "Experiences"
parent: API
layout: page
---

# Api/ExperiencesApi

Method | Description
------------- | -------------
🔹 [**evaluate()**](#evaluate) | Evaluate myself
🔹 [**evaluatePeer()**](#evaluatepeer) | Evaluate peers
🔹 [**list()**](#list) | Fetch my experiences
🔹 [**listPeer()**](#listpeer) | Fetch peer experiences
🔹 [**read()**](#read) | Fetch my notion experience
🔹 [**readPeer()**](#readpeer) | Fetch peer notion experience


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `evaluate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluate.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->evaluate(
    string $notion_id,
    string $grade
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$grade** | **string**  | Grade between 1 and 10 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Evaluate myself

Evaluate yourself on a notion. Only the last evaluation is kept in a 24 hours interval.

[Back to top](#top){: .btn .btn-purple }

---


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `evaluatePeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **evaluatePeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluatePeer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/grade/{grade}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->evaluatePeer(
    string $notion_id,
    string $grade,
    string $user_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$grade** | **string**  | Grade between 1 and 10 
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Evaluate peers

Anonymously evaluate another peer on this notion. Only the last evaluation is kept in a 24 hours interval.

[Back to top](#top){: .btn .btn-purple }

---


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ExperiencesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ExperiencesList**](../../Model/ExperiencesList)

### Description

> Fetch my experiences

Retrieve all my experience models

[Back to top](#top){: .btn .btn-purple }

---


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `listPeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **listPeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/listPeer.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->listPeer(
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

> Fetch peer experiences

Retrieve all experience models for this user

[Back to top](#top){: .btn .btn-purple }

---


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->read(
    string $notion_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Fetch my notion experience

Retrieve my experience model for specified Notion

[Back to top](#top){: .btn .btn-purple }

---


📚 [Experiences API Reference](https://api.kronup.com/#tag/Experiences)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->experiences();
```

## `readPeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **readPeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/readPeer.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/notions/{notionId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->readPeer(
    string $notion_id,
    [ string $user_id ]
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

> Fetch peer notion experience

Retrieve peer experience model for specified Notion

[Back to top](#top){: .btn .btn-purple }

---
