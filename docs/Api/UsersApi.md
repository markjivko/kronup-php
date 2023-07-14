---
title: "Users"
parent: API
layout: page
---

# Api/UsersApi

Method | Description
------------- | -------------
🔹 [**list()**](#list) | List users
🔹 [**read()**](#read) | Fetch user
🔹 [**remove()**](#remove) | Remove user
🔹 [**updateRole()**](#updaterole) | Update roles


📚 [Users API Reference](https://api.kronup.com/#tag/Users)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->users();
```


## `list()`

> Get a list of user models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/list.php){: .btn .mt-4}

### Request

> **GET** `/users`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\UsersList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\UsersList**](../../Model/UsersList)

[🔺 Back to top](#top)

---


## `read()`

> Retrieve user model


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/read.php){: .btn .mt-4}

### Request

> **GET** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->read(
    string $user_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

[🔺 Back to top](#top)

---


## `remove()`

> Remove user from Organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **remove.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/remove.php){: .btn .mt-4}

### Request

> **DELETE** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->remove(
    string $user_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

[🔺 Back to top](#top)

---


## `updateRole()`

> Update the user model


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **updateRole.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/updateRole.php){: .btn .mt-4}

### Request

> **POST** `/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->updateRole(
    string $user_id,
    \Kronup\Model\PayloadUserRoleUpdate $payload_user_role_update
): \Kronup\Model\UserRoles
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$user_id** | **string**  | User ID 
 **$payload_user_role_update** | [**\Kronup\Model\PayloadUserRoleUpdate**](../../Model/PayloadUserRoleUpdate) |  

### Return type

[**\Kronup\Model\UserRoles**](../../Model/UserRoles)

[🔺 Back to top](#top)

---
