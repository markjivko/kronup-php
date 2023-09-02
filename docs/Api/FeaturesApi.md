---
title: "Features"
parent: API
layout: page
---

# Api/FeaturesApi

Method | Description
------------- | -------------
🔹 [**advance()**](#advance) | Advance feature
🔹 [**create()**](#create) | Create feature
🔹 [**delete()**](#delete) | Delete feature
🔹 [**list()**](#list) | List features
🔹 [**read()**](#read) | Fetch feature
🔹 [**update()**](#update) | Update feature


📚 [Features API Reference](https://api.kronup.com/#tag/Features)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->features();
```


## `advance()`

> Advance a feature


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **advance.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/advance.php){: .btn .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/features/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->advance(
    string $team_id,
    string $channel_id,
    string $feature_id
): \Kronup\Model\Feature
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 

### Return type

[**\Kronup\Model\Feature**](../../Model/Feature)

[🔺 Back to top](#top)

---


## `create()`

> Add a feature to planning


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/create.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/features`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->create(
    string $team_id,
    string $channel_id,
    \Kronup\Model\PayloadFeatureCreate $payload_feature_create
): \Kronup\Model\Feature
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$payload_feature_create** | [**\Kronup\Model\PayloadFeatureCreate**](../../Model/PayloadFeatureCreate) |  

### Return type

[**\Kronup\Model\Feature**](../../Model/Feature)

[🔺 Back to top](#top)

---


## `delete()`

> Delete a feature from the flow


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/features/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->delete(
    string $team_id,
    string $channel_id,
    string $feature_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `list()`

> Get a list of feature models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/list.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/features`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->list(
    string $team_id,
    string $channel_id,
    [ string $stage, ]
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\FeaturesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$stage** | **string**  | Feature stage 
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\FeaturesList**](../../Model/FeaturesList)

[🔺 Back to top](#top)

---


## `read()`

> Retrieve feature model


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/read.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/features/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->read(
    string $team_id,
    string $channel_id,
    string $feature_id
): \Kronup\Model\Feature
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 

### Return type

[**\Kronup\Model\Feature**](../../Model/Feature)

[🔺 Back to top](#top)

---


## `update()`

> Update feature details


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/FeaturesApi/update.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/features/{featureId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->features()->update(
    string $team_id,
    string $channel_id,
    string $feature_id,
    \Kronup\Model\PayloadFeatureUpdate $payload_feature_update
): \Kronup\Model\Feature
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$feature_id** | **string**  | Feature ID 
 **$payload_feature_update** | [**\Kronup\Model\PayloadFeatureUpdate**](../../Model/PayloadFeatureUpdate) |  

### Return type

[**\Kronup\Model\Feature**](../../Model/Feature)

[🔺 Back to top](#top)

---
