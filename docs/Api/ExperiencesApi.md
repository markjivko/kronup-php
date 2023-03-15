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
[**experienceEvaluatePeer()**](#experienceevaluatepeer) | Evaluate peer
[**experienceEvaluateSelf()**](#experienceevaluateself) | Self-evaluation
[**experienceRead()**](#experienceread) | Fetch notion experience
[**experiencesList()**](#experienceslist) | Fetch all experiences


## `experienceEvaluatePeer()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **experienceEvaluatePeer.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/experienceEvaluatePeer.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/users/{userId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->experienceEvaluatePeer(
    string $notion_id,
    string $user_id,
    string $grade,
    string $x_org_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
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


## `experienceEvaluateSelf()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **experienceEvaluateSelf.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/experienceEvaluateSelf.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/xp/notions/{notionId}/grade/{grade}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->experienceEvaluateSelf(
    string $notion_id,
    string $grade,
    string $x_org_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
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


## `experienceRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **experienceRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/experienceRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/notions/{notionId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->experienceRead(
    string $notion_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\Experience
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Experience**](../../Model/Experience)

### Description

> Fetch notion experience

Retrieve experience model for specified Notion

[Back to top](#top){: .btn .btn-purple }

---


## `experiencesList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **experiencesList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ExperiencesApi/experiencesList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/xp/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->experiences()->experiencesList(
    string $user_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ExperiencesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ExperiencesList**](../../Model/ExperiencesList)

### Description

> Fetch all experiences

Retrieve all experience models for this user

[Back to top](#top){: .btn .btn-purple }

---
