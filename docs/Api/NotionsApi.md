---
title: Notions
parent: API
layout: page
---

# Api/NotionsApi

[Notions API Reference](https://api.kronup.com/#tag/Notions)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->notions();
```

## Methods

Method | Description
------------- | -------------
[**create()**](#create) | Create notion
[**delete()**](#delete) | Delete notion
[**read()**](#read) | Fetch notion
[**search()**](#search) | Search notions
[**update()**](#update) | Update notion



## `create()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/create.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/notions`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->create(
    \Kronup\Model\PayloadNotionCreate $payload_notion_create
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_notion_create** | [**\Kronup\Model\PayloadNotionCreate**](../../Model/PayloadNotionCreate) |  

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Create notion

Define a notion

[Back to top](#top){: .btn .btn-purple }

---



## `delete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/delete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->delete(
    string $notion_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 

### Return type

**bool**

### Description

> Delete notion

Delete a notion model. This also removes the associated Experiences for all users in this Organization.

[Back to top](#top){: .btn .btn-purple }

---



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->read(
    string $notion_id
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Fetch notion

Retrieve notion model

[Back to top](#top){: .btn .btn-purple }

---



## `search()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **search.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/search.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/notions`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->search(
    [ string $search_term, ]
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\NotionsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$search_term** | **string**  | Search term 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\NotionsList**](../../Model/NotionsList)

### Description

> Search notions

Get a list of notion models

[Back to top](#top){: .btn .btn-purple }

---



## `update()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/update.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->update(
    string $notion_id,
    \Kronup\Model\PayloadNotionUpdate $payload_notion_update
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$payload_notion_update** | [**\Kronup\Model\PayloadNotionUpdate**](../../Model/PayloadNotionUpdate) |  

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Update notion

Update notion

[Back to top](#top){: .btn .btn-purple }

---
