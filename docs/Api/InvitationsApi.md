---
title: "Invitations"
parent: API
layout: page
---

# Api/InvitationsApi

[Invitations API Reference](https://api.kronup.com/#tag/Invitations)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->invitations();
```

## Methods

Method | Description
------------- | -------------
[**accept()**](#accept) | Accept invitation
[**create()**](#create) | Create invitation
[**delete()**](#delete) | Delete invitation
[**list()**](#list) | List invitations
[**read()**](#read) | Fetch invitation
[**update()**](#update) | Update invitation



## `accept()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **accept.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/accept.php){: .btn .btn-green .mt-4}

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

### Description

> Accept invitation

Accept an invitation to join an organization

[Back to top](#top){: .btn .btn-purple }

---



## `create()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/create.php){: .btn .btn-green .mt-4}

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

### Description

> Create invitation

Create a new invitation to this organization

[Back to top](#top){: .btn .btn-purple }

---



## `delete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/delete.php){: .btn .btn-green .mt-4}

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

### Description

> Delete invitation

Delete invitation

[Back to top](#top){: .btn .btn-purple }

---



## `list()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/list.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/invitations`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->list(
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\InvitationsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\InvitationsList**](../../Model/InvitationsList)

### Description

> List invitations

Get a list of invitation models

[Back to top](#top){: .btn .btn-purple }

---



## `read()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/read.php){: .btn .btn-green .mt-4}

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

### Description

> Fetch invitation

Retrieve invitation model

[Back to top](#top){: .btn .btn-purple }

---



## `update()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/update.php){: .btn .btn-green .mt-4}

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

### Description

> Update invitation

Update invitation details

[Back to top](#top){: .btn .btn-purple }

---
