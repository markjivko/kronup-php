---
title: "API - Assumptions"
description: "API methods for Assumptions"
parent: API
layout: page
---

# Api / Assumptions

Method | Description
------------- | -------------
🔹 [**create()**](#create) | Create assumption
🔹 [**delete()**](#delete) | Delete assumption
🔹 [**experiment()**](#experiment) | Experiment
🔹 [**list()**](#list) | List assumptions
🔹 [**update()**](#update) | Update assumption


📚 [Assumptions API Reference](https://api.kronup.com/#tag/Assumptions)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->assumptions();
```


## `create()`

> Add an assumption to feature


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/features/{featureId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->create(
    string $team_id,
    string $channel_id,
    string $feature_id,
    \Kronup\Model\PayloadAssmCreate $payload_assm_create
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$payload_assm_create** | [**\Kronup\Model\PayloadAssmCreate**](../../Model/PayloadAssmCreate) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

[🔺 Back to top](#top)

---


## `delete()`

> Delete an assumption from a feature


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/features/{featureId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->delete(
    string $team_id,
    string $channel_id,
    string $feature_id,
    string $assm_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$assm_id** | **string**  | Assumption ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `experiment()`

> Update experiment details


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **experiment.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/experiment.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/features/{featureId}/assms/{assmId}/exp`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->experiment(
    string $team_id,
    string $channel_id,
    string $feature_id,
    string $assm_id,
    \Kronup\Model\PayloadAssmExperiment $payload_assm_experiment
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$assm_id** | **string**  | Assumption ID 
 **$payload_assm_experiment** | [**\Kronup\Model\PayloadAssmExperiment**](../../Model/PayloadAssmExperiment) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

[🔺 Back to top](#top)

---


## `list()`

> Get a list of assumption models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/list.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/features/{featureId}/assms`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->list(
    string $team_id,
    string $channel_id,
    string $feature_id,
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\AssumptionsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\AssumptionsList**](../../Model/AssumptionsList)

[🔺 Back to top](#top)

---


## `update()`

> Update assumption details


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/AssumptionsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/features/{featureId}/assms/{assmId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->assumptions()->update(
    string $team_id,
    string $channel_id,
    string $feature_id,
    string $assm_id,
    \Kronup\Model\PayloadAssmUpdate $payload_assm_update
): \Kronup\Model\Assumption
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$assm_id** | **string**  | Assumption ID 
 **$payload_assm_update** | [**\Kronup\Model\PayloadAssmUpdate**](../../Model/PayloadAssmUpdate) |  

### Return type

[**\Kronup\Model\Assumption**](../../Model/Assumption)

[🔺 Back to top](#top)

---
