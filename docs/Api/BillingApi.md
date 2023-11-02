---
title: "API - Billing"
description: "API methods for Billing"
parent: API
layout: page
---

# Api / Billing

Method | Description
------------- | -------------
🔹 [**invoiceList()**](#invoicelist) | List Invoices
🔹 [**planCheckout()**](#plancheckout) | Prepare Checkout
🔹 [**planList()**](#planlist) | List Price Plans
🔹 [**subscriptionCancel()**](#subscriptioncancel) | Cancel Subscription
🔹 [**subscriptionRead()**](#subscriptionread) | Fetch Subscription
🔹 [**subscriptionUpdate()**](#subscriptionupdate) | Update Subscription


📚 [Billing API Reference](https://api.kronup.com/#tag/Billing)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->billing();
```


## `invoiceList()`

> Get a list of Invoices


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **invoiceList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/invoiceList.php){: .btn .mt-4}

### Request

> **GET** `/billing/invoices`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->invoiceList(
    [ int $page_number = 1, ]
    [ int $page_size = 500 ]
): \Kronup\Model\InvoiceList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$page_number** | **int**  |   [default to 1]
 **$page_size** | **int**  |   [default to 500]

### Return type

[**\Kronup\Model\InvoiceList**](../../Model/InvoiceList)

[🔺 Back to top](#top)

---


## `planCheckout()`

> Prepare the checkout URL for this Price Plan. The link expires in 23 hours. This method fails if a Subscription is associated with this Organization.


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **planCheckout.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/planCheckout.php){: .btn .mt-4}

### Request

> **GET** `/billing/price-plans/{pricePlanId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->planCheckout(
    string $price_plan_id,
    [ int $dark_mode = 0 ]
): \Kronup\Model\Checkout
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$price_plan_id** | **string**  | Price Plan ID 
 **$dark_mode** | **int**  | Use dark mode  [default to 0]

### Return type

[**\Kronup\Model\Checkout**](../../Model/Checkout)

[🔺 Back to top](#top)

---


## `planList()`

> Get a list of Price Plans


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **planList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/planList.php){: .btn .mt-4}

### Request

> **GET** `/billing/price-plans`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->planList(): \Kronup\Model\PricePlanList
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kronup\Model\PricePlanList**](../../Model/PricePlanList)

[🔺 Back to top](#top)

---


## `subscriptionCancel()`

> Cancel the Subscription for the current Organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **subscriptionCancel.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/subscriptionCancel.php){: .btn .mt-4}

### Request

> **DELETE** `/billing/subscription`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->subscriptionCancel(): \Kronup\Model\Subscription
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kronup\Model\Subscription**](../../Model/Subscription)

[🔺 Back to top](#top)

---


## `subscriptionRead()`

> Get the Subscription model for the current organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **subscriptionRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/subscriptionRead.php){: .btn .mt-4}

### Request

> **GET** `/billing/subscription`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->subscriptionRead(): \Kronup\Model\SubscriptionNullable
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kronup\Model\SubscriptionNullable**](../../Model/SubscriptionNullable)

[🔺 Back to top](#top)

---


## `subscriptionUpdate()`

> Update the Subscription Price Plan for the current Organization


{: .new-title }
> #️⃣ Execute example in terminal 
> 
> [php -f **subscriptionUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/BillingApi/subscriptionUpdate.php){: .btn .mt-4}

### Request

> **PUT** `/billing/subscription/price-plans/{pricePlanId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->billing()->subscriptionUpdate(
    string $price_plan_id
): \Kronup\Model\Subscription
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$price_plan_id** | **string**  | Price Plan ID 

### Return type

[**\Kronup\Model\Subscription**](../../Model/Subscription)

[🔺 Back to top](#top)

---
