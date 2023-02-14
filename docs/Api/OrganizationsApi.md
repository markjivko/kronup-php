---
title: Organizations
parent: API
layout: page
---

# Api/OrganizationsApi

[Organizations API Reference](https://api.kronup.com/tag/Organizations/)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->organizations();
```

## Methods

Method | Description
------------- | -------------
[**organizationCreate()**](#organizationcreate) | Create organization
[**organizationUpdate()**](#organizationupdate) | Update organization


## `organizationCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **organizationCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/organizationCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/organizations`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->organizationCreate(
    \Kronup\Model\OrganizationCreateRequest $organization_create_request
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$organization_create_request** | [**\Kronup\Model\OrganizationCreateRequest**](../../Model/OrganizationCreateRequest) |  |

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

### Description

> Create organization

Add an organization owned by the current user

[Back to top](#top){: .btn .btn-purple }

---


## `organizationUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [✨ php -f **organizationUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/organizationUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/organizations/{id}`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->organizationUpdate(
    string $id,
    \Kronup\Model\OrganizationCreateRequest $organization_create_request
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$id** | **string**  | Organization ID |
 **$organization_create_request** | [**\Kronup\Model\OrganizationCreateRequest**](../../Model/OrganizationCreateRequest) |  |

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

### Description

> Update organization

Update organization details

[Back to top](#top){: .btn .btn-purple }

---
