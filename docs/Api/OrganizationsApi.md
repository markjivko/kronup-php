---
title: "Organizations"
parent: API
layout: page
---

# Api/OrganizationsApi

Method | Description
------------- | -------------
🔹 [**create()**](#create) | Create organization
🔹 [**delete()**](#delete) | Delete organization
🔹 [**logo()**](#logo) | Update logo
🔹 [**update()**](#update) | Update organization


📚 [Organizations API Reference](https://api.kronup.com/#tag/Organizations)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->organizations();
```


## `create()`

> Add an organization owned by the current user


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/create.php){: .btn .mt-4}

### Request

> **POST** `/organizations`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->create(
    \Kronup\Model\PayloadOrganizationCreate $payload_organization_create
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$payload_organization_create** | [**\Kronup\Model\PayloadOrganizationCreate**](../../Model/PayloadOrganizationCreate) |  

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

[🔺 Back to top](#top)

---


## `delete()`

> Remove organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/organizations/{orgId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->delete(
    string $org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$org_id** | **string**  | Organization ID 

### Return type

**bool**

[🔺 Back to top](#top)

---


## `logo()`

> Update organization logo


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **logo.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/logo.php){: .btn .mt-4}

### Request

> **POST** `/organizations/{orgId}/logo`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->logo(
    string $org_id,
    [ \SplFileObject $logo ]
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$org_id** | **string**  | Organization ID 
 **$logo** | **\SplFileObject** **\SplFileObject**  | Logo - must be a PNG file, exactly 256x256 pixels, smaller than 200KB 

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

[🔺 Back to top](#top)

---


## `update()`

> Update organization details


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/update.php){: .btn .mt-4}

### Request

> **POST** `/organizations/{orgId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->update(
    string $org_id,
    \Kronup\Model\PayloadOrganizationUpdate $payload_organization_update
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$org_id** | **string**  | Organization ID 
 **$payload_organization_update** | [**\Kronup\Model\PayloadOrganizationUpdate**](../../Model/PayloadOrganizationUpdate) |  

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

[🔺 Back to top](#top)

---
