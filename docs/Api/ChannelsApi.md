---
title: "Channels"
parent: API
layout: page
---

# Api/ChannelsApi

Method | Description
------------- | -------------
🔹 [**assign()**](#assign) | Assign to channel
🔹 [**create()**](#create) | Create channel
🔹 [**delete()**](#delete) | Delete channel
🔹 [**listMembers()**](#listmembers) | List members
🔹 [**listProspects()**](#listprospects) | Find prospects
🔹 [**unassign()**](#unassign) | Unassign from channel
🔹 [**update()**](#update) | Update channel


📚 [Channels API Reference](https://api.kronup.com/#tag/Channels)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->channels();
```


## `assign()`

> Channels Assign a user to a channel

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **assign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/assign.php){: .btn .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->assign(
    string $team_id,
    string $channel_id,
    string $user_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

[🔺 Back to top](#top)

---


## `create()`

> Channels Create a new channel for a team

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->create(
    string $team_id,
    \Kronup\Model\PayloadChannelCreate $payload_channel_create
): \Kronup\Model\TeamExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$payload_channel_create** | [**\Kronup\Model\PayloadChannelCreate**](../../Model/PayloadChannelCreate) |  

### Return type

[**\Kronup\Model\TeamExpanded**](../../Model/TeamExpanded)

[🔺 Back to top](#top)

---


## `delete()`

> Channels Delete a channel and unassign all users

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->delete(
    string $team_id,
    string $channel_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `listMembers()`

> Channels List all channel members

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **listMembers.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/listMembers.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/users`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->listMembers(
    string $team_id,
    string $channel_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ChannelMembersList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ChannelMembersList**](../../Model/ChannelMembersList)

[🔺 Back to top](#top)

---


## `listProspects()`

> Channels List 10 channel prospects

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **listProspects.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/listProspects.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/prospects`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->listProspects(
    string $team_id,
    string $channel_id,
    [ string $user_name ]
): \Kronup\Model\ChannelProspectsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_name** | **string**  | Wildcard for prospect user name 

### Return type

[**\Kronup\Model\ChannelProspectsList**](../../Model/ChannelProspectsList)

[🔺 Back to top](#top)

---


## `unassign()`

> Channels Remove a user from a channel; removing the user from the default channel is the same as removing the user from the team

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **unassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/unassign.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->unassign(
    string $team_id,
    string $channel_id,
    string $user_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `update()`

> Channels Update channel details for a team

{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->update(
    string $team_id,
    string $channel_id,
    \Kronup\Model\PayloadChannelUpdate $payload_channel_update
): \Kronup\Model\TeamExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$payload_channel_update** | [**\Kronup\Model\PayloadChannelUpdate**](../../Model/PayloadChannelUpdate) |  

### Return type

[**\Kronup\Model\TeamExpanded**](../../Model/TeamExpanded)

[🔺 Back to top](#top)

---
