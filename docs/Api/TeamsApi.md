---
title: Teams
parent: API
layout: page
---

# Api/TeamsApi

[Teams API Reference](https://api.kronup.com/#tag/Teams)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->teams();
```

## Methods

Method | Description
------------- | -------------
[**teamAssign()**](#teamassign) | Assign to team
[**teamCreate()**](#teamcreate) | Create team
[**teamDelete()**](#teamdelete) | Delete team
[**teamListAll()**](#teamlistall) | List all teams
[**teamListUser()**](#teamlistuser) | List user teams
[**teamRead()**](#teamread) | Fetch team
[**teamUnassign()**](#teamunassign) | Unassign from team
[**teamUpdate()**](#teamupdate) | Update team


## `teamAssign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamAssign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamAssign.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamAssign(
    string $team_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Assign to team

Assign a user to a team

[Back to top](#top){: .btn .btn-purple }

---


## `teamCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamCreate(
    string $x_org_id,
    \Kronup\Model\PayloadTeamCreate $payload_team_create
): \Kronup\Model\TeamExtended
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$payload_team_create** | [**\Kronup\Model\PayloadTeamCreate**](../../Model/PayloadTeamCreate) |  

### Return type

[**\Kronup\Model\TeamExtended**](../../Model/TeamExtended)

### Description

> Create team

Create a new team to this organization

[Back to top](#top){: .btn .btn-purple }

---


## `teamDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamDelete(
    string $team_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete team

Delete a team and unassign all users

[Back to top](#top){: .btn .btn-purple }

---


## `teamListAll()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamListAll.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamListAll.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamListAll(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TeamsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TeamsList**](../../Model/TeamsList)

### Description

> List all teams

Get a list of all organization team models

[Back to top](#top){: .btn .btn-purple }

---


## `teamListUser()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamListUser.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamListUser.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamListUser(
    string $user_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TeamsExtendedList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TeamsExtendedList**](../../Model/TeamsExtendedList)

### Description

> List user teams

Get a list of extended team models for this user

[Back to top](#top){: .btn .btn-purple }

---


## `teamRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamRead(
    string $team_id,
    string $x_org_id
): \Kronup\Model\TeamExtended
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\TeamExtended**](../../Model/TeamExtended)

### Description

> Fetch team

Retrieve team model

[Back to top](#top){: .btn .btn-purple }

---


## `teamUnassign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamUnassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamUnassign.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamUnassign(
    string $team_id,
    string $user_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Unassign from team

Remove a user from a team

[Back to top](#top){: .btn .btn-purple }

---


## `teamUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **teamUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamUpdate(
    string $team_id,
    string $x_org_id,
    \Kronup\Model\PayloadTeamUpdate $payload_team_update
): \Kronup\Model\TeamExtended
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_team_update** | [**\Kronup\Model\PayloadTeamUpdate**](../../Model/PayloadTeamUpdate) |  

### Return type

[**\Kronup\Model\TeamExtended**](../../Model/TeamExtended)

### Description

> Update team

Update team details

[Back to top](#top){: .btn .btn-purple }

---
