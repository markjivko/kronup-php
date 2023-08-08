---
title: "Invitations"
parent: API
layout: page
---

# Api/InvitationsApi

Method | Description
------------- | -------------
🔹 [**accept()**](#accept) | Accept invitation
🔹 [**create()**](#create) | Create invitation
🔹 [**delete()**](#delete) | Delete invitation
🔹 [**list()**](#list) | List invitations
🔹 [**read()**](#read) | Fetch invitation
🔹 [**update()**](#update) | Update invitation


📚 [Invitations API Reference](https://api.kronup.com/#tag/Invitations)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->invitations();
```


## `accept()`

> Accept an invitation to join an organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **accept.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/accept.php){: .btn .mt-4}

### Request

> **PUT** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->accept(
    string $invite_id
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

[🔺 Back to top](#top)

---


## `create()`

> Create a new invitation to this organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/invitations`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->create(
    \Kronup\Model\PayloadInvitationCreate $payload_invitation_create
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_invitation_create** | [**\Kronup\Model\PayloadInvitationCreate**](../../Model/PayloadInvitationCreate) |  

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

[🔺 Back to top](#top)

---


## `delete()`

> Delete invitation


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->delete(
    string $invite_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `list()`

> Get a list of invitation models


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/list.php){: .btn .mt-4}

### Request

> **GET** `/invitations`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\InvitationsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\InvitationsList**](../../Model/InvitationsList)

[🔺 Back to top](#top)

---


## `read()`

> Retrieve invitation model


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/read.php){: .btn .mt-4}

### Request

> **GET** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->read(
    string $invite_id
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

[🔺 Back to top](#top)

---


## `update()`

> Update invitation details


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->update(
    string $invite_id,
    \Kronup\Model\PayloadInvitationUpdate $payload_invitation_update
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 
 **$payload_invitation_update** | [**\Kronup\Model\PayloadInvitationUpdate**](../../Model/PayloadInvitationUpdate) |  

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

[🔺 Back to top](#top)

---
