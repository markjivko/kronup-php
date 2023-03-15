---
title: Invitations
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
[**invitationAccept()**](#invitationaccept) | Accept invitation
[**invitationCreate()**](#invitationcreate) | Create invitation
[**invitationDelete()**](#invitationdelete) | Delete invitation
[**invitationList()**](#invitationlist) | List invitations
[**invitationRead()**](#invitationread) | Fetch invitation
[**invitationUpdate()**](#invitationupdate) | Update invitation


## `invitationAccept()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationAccept.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationAccept.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationAccept(
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


## `invitationCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/invitations`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationCreate(
    string $x_org_id,
    \Kronup\Model\PayloadInvitationCreate $payload_invitation_create
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$payload_invitation_create** | [**\Kronup\Model\PayloadInvitationCreate**](../../Model/PayloadInvitationCreate) |  

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

### Description

> Create invitation

Create a new invitation to this organization

[Back to top](#top){: .btn .btn-purple }

---


## `invitationDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationDelete(
    string $invite_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete invitation

Delete invitation

[Back to top](#top){: .btn .btn-purple }

---


## `invitationList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/invitations`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationList(
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\InvitationsList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\InvitationsList**](../../Model/InvitationsList)

### Description

> List invitations

Get a list of invitation models

[Back to top](#top){: .btn .btn-purple }

---


## `invitationRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationRead(
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


## `invitationUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **invitationUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/InvitationsApi/invitationUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/invitations/{inviteId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->invitations()->invitationUpdate(
    string $invite_id,
    string $x_org_id,
    \Kronup\Model\PayloadInvitationUpdate $payload_invitation_update
): \Kronup\Model\Invitation
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$invite_id** | **string**  | Invitation ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_invitation_update** | [**\Kronup\Model\PayloadInvitationUpdate**](../../Model/PayloadInvitationUpdate) |  

### Return type

[**\Kronup\Model\Invitation**](../../Model/Invitation)

### Description

> Update invitation

Update invitation details

[Back to top](#top){: .btn .btn-purple }

---
