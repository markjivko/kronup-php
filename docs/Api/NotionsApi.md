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
[**notionCreate()**](#notioncreate) | Create notion
[**notionDelete()**](#notiondelete) | Delete notion
[**notionRead()**](#notionread) | Fetch notion
[**notionSearch()**](#notionsearch) | Search notions
[**notionUpdate()**](#notionupdate) | Update notion


## `notionCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **notionCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/notionCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/notions`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->notionCreate(
    string $x_org_id,
    \Kronup\Model\PayloadNotionCreate $payload_notion_create
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$payload_notion_create** | [**\Kronup\Model\PayloadNotionCreate**](../../Model/PayloadNotionCreate) |  

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Create notion

Define a notion

[Back to top](#top){: .btn .btn-purple }

---


## `notionDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **notionDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/notionDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->notionDelete(
    string $notion_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete notion

Delete a notion model. This also removes the associated Experiences for all users in this Organization.

[Back to top](#top){: .btn .btn-purple }

---


## `notionRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **notionRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/notionRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->notionRead(
    string $notion_id,
    string $x_org_id
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Fetch notion

Retrieve notion model

[Back to top](#top){: .btn .btn-purple }

---


## `notionSearch()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **notionSearch.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/notionSearch.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/notions`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->notionSearch(
    string $x_org_id,
    [ string $search_term, ]
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\NotionsList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
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


## `notionUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **notionUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/NotionsApi/notionUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->notions()->notionUpdate(
    string $notion_id,
    string $x_org_id,
    \Kronup\Model\PayloadNotionUpdate $payload_notion_update
): \Kronup\Model\Notion
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$notion_id** | **string**  | Notion ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_notion_update** | [**\Kronup\Model\PayloadNotionUpdate**](../../Model/PayloadNotionUpdate) |  

### Return type

[**\Kronup\Model\Notion**](../../Model/Notion)

### Description

> Update notion

Update notion

[Back to top](#top){: .btn .btn-purple }

---
