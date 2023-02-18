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
[**userList()**](#userlist) | List all users
[**userRead()**](#userread) | Get user
[**userRemove()**](#userremove) | Remove user
[**userUpdateRole()**](#userupdaterole) | Update role


## `userList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **userList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userList(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\UserList
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID |
 **$page_number** | **int**  | Pagination: page number | [default to 1]
 **$page_size** | **int**  | Pagination: page size | [default to 100]

### Return type

[**\Kronup\Model\UserList**](../../Model/UserList)

### Description

> List all users

Get a list of user models; supports pagination

[Back to top](#top){: .btn .btn-purple }

---


## `userRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **userRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/users/{id}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userRead(
    string $id
): \Kronup\Model\Account
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | User ID |

### Return type

[**\Kronup\Model\Account**](../../Model/Account)

### Description

> Get user

Retrieve the user model and expand organizations

[Back to top](#top){: .btn .btn-purple }

---


## `userRemove()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **userRemove.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userRemove.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/users/{id}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userRemove(
    string $id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | User ID |
 **$x_org_id** | **string**  | Organization ID |

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
> [✨ php -f **userUpdateRole.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/UsersApi/userUpdateRole.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/users/{id}`

### Type signature

```php
(new \Kronup\Sdk())->api()->users()->userUpdateRole(
    string $id,
    string $x_org_id,
    \Kronup\Model\UserUpdateRoleRequest $user_update_role_request
): \Kronup\Model\UserRoles
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | User ID |
 **$x_org_id** | **string**  | Organization ID |
 **$user_update_role_request** | [**\Kronup\Model\UserUpdateRoleRequest**](../../Model/UserUpdateRoleRequest) |  |

### Return type

[**\Kronup\Model\UserRoles**](../../Model/UserRoles)

### Description

> Update role

Update the user model

[Back to top](#top){: .btn .btn-purple }

---
