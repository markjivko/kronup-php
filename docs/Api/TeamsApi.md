---
title: "Teams"
parent: API
layout: page
---

# Api/TeamsApi

Method | Description
------------- | -------------
🔹 [**assign()**](#assign) | Assign to team
🔹 [**create()**](#create) | Create team
🔹 [**delete()**](#delete) | Delete team
🔹 [**listAll()**](#listall) | List all teams
🔹 [**listUser()**](#listuser) | List user teams
🔹 [**read()**](#read) | Fetch team
🔹 [**unassign()**](#unassign) | Unassign from team
🔹 [**update()**](#update) | Update team


📚 [Teams API Reference](https://api.kronup.com/#tag/Teams)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->teams();
```


## `assign()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/assign.php){: .btn .mt-4}

### Request

> **PUT** `/teams/{teamId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->assign(
    string $team_id,
    string $user_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Assign to team

Assign a user to a team

[🔺 Back to top](#top)

---


## `create()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->create(
    \Kronup\Model\PayloadTeamCreate $payload_team_create
): \Kronup\Model\TeamExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_team_create** | [**\Kronup\Model\PayloadTeamCreate**](../../Model/PayloadTeamCreate) |  

### Return type

[**\Kronup\Model\TeamExpanded**](../../Model/TeamExpanded)

### Description

> Create team

Create a new team to this organization

[🔺 Back to top](#top)

---


## `delete()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->delete(
    string $team_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 

### Return type

**bool**

### Description

> Delete team

Delete a team and unassign all users

[🔺 Back to top](#top)

---


## `listAll()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **listAll.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/listAll.php){: .btn .mt-4}

### Request

> **GET** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->listAll(
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TeamsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TeamsList**](../../Model/TeamsList)

### Description

> List all teams

Get a list of all organization team models

[🔺 Back to top](#top)

---


## `listUser()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **listUser.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/listUser.php){: .btn .mt-4}

### Request

> **GET** `/teams/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->listUser(
    string $user_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TeamsExpandedList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TeamsExpandedList**](../../Model/TeamsExpandedList)

### Description

> List user teams

Get a list of all teams this user is a part of

[🔺 Back to top](#top)

---


## `read()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/read.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->read(
    string $team_id
): \Kronup\Model\TeamExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 

### Return type

[**\Kronup\Model\TeamExpanded**](../../Model/TeamExpanded)

### Description

> Fetch team

Retrieve team model

[🔺 Back to top](#top)

---


## `unassign()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **unassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/unassign.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->unassign(
    string $team_id,
    string $user_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$user_id** | **string**  | User ID 

### Return type

**bool**

### Description

> Unassign from team

Remove a user from a team

[🔺 Back to top](#top)

---


## `update()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->update(
    string $team_id,
    \Kronup\Model\PayloadTeamUpdate $payload_team_update
): \Kronup\Model\TeamExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$payload_team_update** | [**\Kronup\Model\PayloadTeamUpdate**](../../Model/PayloadTeamUpdate) |  

### Return type

[**\Kronup\Model\TeamExpanded**](../../Model/TeamExpanded)

### Description

> Update team

Update team details

[🔺 Back to top](#top)

---
