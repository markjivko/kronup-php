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

> Evaluate yourself on a notion. Only the last evaluation is kept in a 24 hours interval.


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **evaluate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluate.php){: .btn .mt-4}

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

[🔺 Back to top](#top)

---


## `evaluatePeer()`

> Anonymously evaluate another peer on this notion. Only the last evaluation is kept in a 24 hours interval.


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **evaluatePeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/evaluatePeer.php){: .btn .mt-4}

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

[🔺 Back to top](#top)

---


## `list()`

> Retrieve all my experience models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/list.php){: .btn .mt-4}

### Request

> **GET** `/xp`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\ExperiencesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\ExperiencesList**](../../Model/ExperiencesList)

[🔺 Back to top](#top)

---


## `listPeer()`

> Retrieve all experience models for this user


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **listPeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/listPeer.php){: .btn .mt-4}

### Request

> **GET** `/xp/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->listPeer(
    string $user_id,
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\ExperiencesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\ExperiencesList**](../../Model/ExperiencesList)

[🔺 Back to top](#top)

---


## `read()`

> Retrieve my experience model for specified Notion


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/read.php){: .btn .mt-4}

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

[🔺 Back to top](#top)

---


## `readPeer()`

> Retrieve peer experience model for specified Notion


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **readPeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/readPeer.php){: .btn .mt-4}

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

[🔺 Back to top](#top)

---
