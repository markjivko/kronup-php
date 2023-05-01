---
title: Users
parent: API
layout: page
---

# Api/UsersApi

[Users API Reference](https://api.kronup.com/#tag/Users)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->users();
```

## Methods

Method | Description
------------- | -------------
[**list()**](#list) | List users
[**read()**](#read) | Fetch user
[**remove()**](#remove) | Remove user
[**updateRole()**](#updaterole) | Update roles



## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->list(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\UsersList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\UsersList**](../../Model/UsersList)

### Description

> List users

Get a list of user models

[Back to top](#top){: .btn .btn-purple }

---



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/read.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->read(
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Fetch user

Retrieve user model

[Back to top](#top){: .btn .btn-purple }

---



## `remove()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **remove.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/remove.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->remove(
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Remove user

Remove user from Organization

[Back to top](#top){: .btn .btn-purple }

---



## `updateRole()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **updateRole.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/updateRole.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->updateRole(
    string $user_id,
    string $x_org_id,
    \Kronup\Model\PayloadUserRoleUpdate $payload_user_role_update
): \Kronup\Model\UserRoles
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_user_role_update** | [**\Kronup\Model\PayloadUserRoleUpdate**](../../Model/PayloadUserRoleUpdate) |  

### Return type

[**\Kronup\Model\UserRoles**](../../Model/UserRoles)

### Description

> Update roles

Update the user model

[Back to top](#top){: .btn .btn-purple }

---
