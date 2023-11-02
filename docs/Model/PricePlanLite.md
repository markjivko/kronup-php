---
title: "Models - PricePlanLite"
description: "Store price plan details at the moment the invoice was issued"
parent: Model
layout: page
---

# Price Plan - Lite

```php
new \Kronup\Model\PricePlanLite();
```

Store price plan details at the moment the invoice was issued

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Price Plan ID
**getName()** | **string** | Price Plan Name
**getInterval()** | **string** | Subscription interval type ( `day` `week` `month` `year` )  [default to `'month'`]
**getIntervalCount()** | **int** | Subscription interval count

