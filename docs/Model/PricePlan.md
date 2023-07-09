---
title: "Price Plan"
parent: Model
layout: page
---

# Price Plan

```php
new \Kronup\Model\PricePlan();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Price Plan ID
**getSlug()** | **string** | Variant slug
**getPrice()** | **int** | Price expressed in cents
**getInterval()** | **string** | Subscription interval type ( `day` `week` `month` `year` )  [default to `'month'`]
**getIntervalCount()** | **int** | Subscription interval count
**getTrialEnabled()** | **bool** | Subscription free trial enabled   [default to `false`]
**getTrialInterval()** | **string** | Subscription trial interval type ( `day` `week` `month` `year` )  [default to `'day'`]
**getTrialIntervalCount()** | **int** | Subscription trial interval count   [default to `30`]
**getProductId()** | **int** | Product ID
**getVariantId()** | **int** | Variant ID
**getProductName()** | **string** | Product name
**getProductDesc()** | **string** | Product description (HTML)
**getIsExtra()** | **bool** | Extra variant for large companies   [default to `false`]
**getIsEnabled()** | **bool** | Variant is enabled   [default to `false`]
**getUsersMax()** | **int** | Maximum number of users in this variant   [default to `0`]

