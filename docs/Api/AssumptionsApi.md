---
title: Assumptions
parent: API
layout: page
---

# Api/AssumptionsApi

[Assumptions API Reference](https://api.kronup.com/#tag/Assumptions)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->assumptions();
```

## Methods

Method | Description
------------- | -------------
[**assumptionCreate()**](#assumptioncreate) | Create assumption
[**assumptionDelete()**](#assumptiondelete) | Delete assumption
[**assumptionList()**](#assumptionlist) | List assumptions
[**assumptionRead()**](#assumptionread) | Fetch assumption
[**assumptionUpdate()**](#assumptionupdate) | Update assumption
[**assumptionValidate()**](#assumptionvalidate) | Validate


## `assumptionCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    \Kronup\Model\PayloadAssmCreate $payload_assm_create
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_assm_create** | [**\Kronup\Model\PayloadAssmCreate**](../../Model/PayloadAssmCreate) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

### Description

> Create assumption

Add an assumption to value item

[Back to top](#top){: .btn .btn-purple }

---


## `assumptionDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$assm_id** | **string**  | Assumption ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete assumption

Delete an assumption from a value item

[Back to top](#top){: .btn .btn-purple }

---


## `assumptionList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionList(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\AssumptionsList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\AssumptionsList**](../../Model/AssumptionsList)

### Description

> List assumptions

Get a list of assumption models

[Back to top](#top){: .btn .btn-purple }

---


## `assumptionRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionRead(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$assm_id** | **string**  | Assumption ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

### Description

> Fetch assumption

Retrieve assumption model

[Back to top](#top){: .btn .btn-purple }

---


## `assumptionUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id,
    \Kronup\Model\PayloadAssmUpdate $payload_assm_update
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$assm_id** | **string**  | Assumption ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_assm_update** | [**\Kronup\Model\PayloadAssmUpdate**](../../Model/PayloadAssmUpdate) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

### Description

> Update assumption

Update assumption details

[Back to top](#top){: .btn .btn-purple }

---


## `assumptionValidate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assumptionValidate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/assumptionValidate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}/exp`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->assumptionValidate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id,
    \Kronup\Model\PayloadAssmValidate $payload_assm_validate
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$assm_id** | **string**  | Assumption ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_assm_validate** | [**\Kronup\Model\PayloadAssmValidate**](../../Model/PayloadAssmValidate) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

### Description

> Validate

Update experiment details

[Back to top](#top){: .btn .btn-purple }

---
