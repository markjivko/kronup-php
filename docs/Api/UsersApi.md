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
[**userList()**](#userlist) | List users
[**userRead()**](#userread) | Fetch user
[**userRemove()**](#userremove) | Remove user
[**userUpdateRole()**](#userupdaterole) | Update roles


## `userList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **userList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userList(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\UsersList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
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


## `userRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **userRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userRead(
    string $user_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Fetch user

Retrieve user model

[Back to top](#top){: .btn .btn-purple }

---


## `userRemove()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **userRemove.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userRemove.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userRemove(
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Remove user

Remove user from Organization

[Back to top](#top){: .btn .btn-purple }

---


## `userUpdateRole()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **userUpdateRole.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userUpdateRole.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userUpdateRole(
    string $user_id,
    string $x_org_id,
    \Kronup\Model\RequestUserRoleUpdate $request_user_role_update
): \Kronup\Model\UserRoles
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_user_role_update** | [**\Kronup\Model\RequestUserRoleUpdate**](../../Model/RequestUserRoleUpdate) |  

### Return type

[**\Kronup\Model\UserRoles**](../../Model/UserRoles)

### Description

> Update roles

Update the user model

[Back to top](#top){: .btn .btn-purple }

---
