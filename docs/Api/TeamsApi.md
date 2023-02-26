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
[**teamList()**](#teamlist) | List teams
[**teamRead()**](#teamread) | Fetch team
[**teamUnassign()**](#teamunassign) | Unassign from team
[**teamUpdate()**](#teamupdate) | Update team


## `teamAssign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamAssign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamAssign.php){: .btn .btn-green .mt-4}

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
------------- | ------------- | ------------- | -------------
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
> [✨ php -f **teamCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamCreate(
    string $x_org_id,
    \Kronup\Model\TeamCreateRequest $team_create_request
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$team_create_request** | [**\Kronup\Model\TeamCreateRequest**](../../Model/TeamCreateRequest) |  

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

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
> [✨ php -f **teamDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamDelete(
    string $team_id,
    string $x_org_id
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

### Description

> Delete team

Delete a team and unassign all users

[Back to top](#top){: .btn .btn-purple }

---


## `teamList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamList(
    string $x_org_id
): \Kronup\Model\Team[]
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Team[]**](../../Model/Team)

### Description

> List teams

Get a list of team models

[Back to top](#top){: .btn .btn-purple }

---


## `teamRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **teamRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamRead(
    string $team_id,
    string $x_org_id
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

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
> [✨ php -f **teamUnassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamUnassign.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamUnassign(
    string $team_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

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
> [✨ php -f **teamUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TeamsApi/teamUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->teams()->teamUpdate(
    string $team_id,
    string $x_org_id,
    \Kronup\Model\TeamUpdateRequest $team_update_request
): \Kronup\Model\Team
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 
 **$team_update_request** | [**\Kronup\Model\TeamUpdateRequest**](../../Model/TeamUpdateRequest) |  

### Return type

[**\Kronup\Model\Team**](../../Model/Team)

### Description

> Update team

Update team details

[Back to top](#top){: .btn .btn-purple }

---
