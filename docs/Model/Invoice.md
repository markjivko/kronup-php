---
title: "Models - Invoice"
description: ""
parent: Model
layout: page
---

# Invoice

```php
new \Kronup\Model\Invoice();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Invoice ID
**getSubscriptionId()** | **float** | Subscription ID
**getProductId()** | **float** | Product ID
**getVariantId()** | **float** | Variant ID
**getCustomerId()** | **float** | Customer ID
**getPricePlan()** | [**\Kronup\Model\PricePlanLite**](../PricePlanLite) | 
**getStatus()** | **string** | Invoice status ( `paid` `open` `void` `uncollectible` `draft` )
**getUrl()** | **string** | Manage invoice URL
**getRefunded()** | **bool** | Invoice refunded   [default to `false`]
**getSubtotal()** | **float** | Subtotal value in cents (USD)
**getTax()** | **float** | Tax value in cents (USD)
**getTotal()** | **float** | Total value in cents (USD)
**getCardBrand()** | **string** | Card brand
**getCardLast4()** | **string** | Card last 4 digits
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

