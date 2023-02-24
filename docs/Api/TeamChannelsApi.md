---
title: Team channels
parent: API
layout: page
---

# Api/TeamChannelsApi

[Team channels API Reference](https://api.kronup.com/#tag/Team-channels)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->teamChannels();
```

## Methods

Method | Description
------------- | -------------
[**teamChannelAssign()**](#teamchannelassign) | Assign to channel
[**teamChannelCreate()**](#teamchannelcreate) | Create channel
[**teamChannelDelete()**](#teamchanneldelete) | Delete channel
[**teamChannelUnassign()**](#teamchannelunassign) | Unassign from channel
[**teamChannelUpdate()**](#teamchannelupdate) | Update channel


## `teamChannelAssign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamChannelAssign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamChannelsApi/teamChannelAssign.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channel/{channelId}/user/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teamChannels()->teamChannelAssign(
    string $team_id,
    string $channel_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Assign to channel

Assign a user to a channel

[Back to top](#top){: .btn .btn-purple }

---


## `teamChannelCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamChannelCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamChannelsApi/teamChannelCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channel`

### Type signature

```php
(new \Kronup\Sdk())->api()->teamChannels()->teamChannelCreate(
    string $team_id,
    string $x_org_id,
    \Kronup\Model\TeamChannelCreateRequest $team_channel_create_request
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 
 **$team_channel_create_request** | [**\Kronup\Model\TeamChannelCreateRequest**](../../Model/TeamChannelCreateRequest) |  

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

### Description

> Create channel

Create a new channel for a team

[Back to top](#top){: .btn .btn-purple }

---


## `teamChannelDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamChannelDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamChannelsApi/teamChannelDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channel/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teamChannels()->teamChannelDelete(
    string $team_id,
    string $channel_id,
    string $x_org_id
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

### Description

> Delete channel

Delete a channel and unassign all users

[Back to top](#top){: .btn .btn-purple }

---


## `teamChannelUnassign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamChannelUnassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamChannelsApi/teamChannelUnassign.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channel/{channelId}/user/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teamChannels()->teamChannelUnassign(
    string $team_id,
    string $channel_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Unassign from channel

Remove a user from a channel

[Back to top](#top){: .btn .btn-purple }

---


## `teamChannelUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamChannelUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamChannelsApi/teamChannelUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channel/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teamChannels()->teamChannelUpdate(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    \Kronup\Model\TeamChannelCreateRequest $team_channel_create_request
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$team_channel_create_request** | [**\Kronup\Model\TeamChannelCreateRequest**](../../Model/TeamChannelCreateRequest) |  

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

### Description

> Update channel

Update channel details for a team

[Back to top](#top){: .btn .btn-purple }

---
