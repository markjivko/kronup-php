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
[**create()**](#create) | Create assumption
[**delete()**](#delete) | Delete assumption
[**experiment()**](#experiment) | Experiment
[**list()**](#list) | List assumptions
[**read()**](#read) | Fetch assumption
[**update()**](#update) | Update assumption



## `create()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/create.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->create(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    \Kronup\Model\PayloadAssmCreate $payload_assm_create
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
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



## `delete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/delete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->delete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
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



## `experiment()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **experiment.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/experiment.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}/exp`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->experiment(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id,
    \Kronup\Model\PayloadAssmExperiment $payload_assm_experiment
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$assm_id** | **string**  | Assumption ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_assm_experiment** | [**\Kronup\Model\PayloadAssmExperiment**](../../Model/PayloadAssmExperiment) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

### Description

> Experiment

Update experiment details

[Back to top](#top){: .btn .btn-purple }

---



## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->list(
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
------------- | ------------- | -------------
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



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->read(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $assm_id,
    string $x_org_id
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
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



## `update()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/update.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->update(
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
------------- | ------------- | -------------
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
