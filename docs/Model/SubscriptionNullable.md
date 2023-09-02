---
title: "Subscription Nullable"
parent: Model
layout: page
---

# Subscription Nullable

```php
new \Kronup\Model\SubscriptionNullable();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getSubscriptionId()** | **float** | Subscription ID
**getStatus()** | **string** | ( `on_trial` `active` `past_due` `cancelled` `unpaid` `paused` `expired` )
**getUrl()** | **string** | Update payment method URL
**getOrderId()** | **float** | Order ID
**getOrderFeatureId()** | **float** | Order Feature ID
**getProductId()** | **float** | Product ID
**getVariantId()** | **float** | Variant ID
**getCustomerId()** | **float** | Customer ID
**getCardBrand()** | **string** | Card brand
**getCardLast4()** | **string** | Card last 4 digits
**getPricePlan()** | [**\Kronup\Model\PricePlan**](../PricePlan) | 
**getUsersCount()** | **float** | Total number of Organization members
**getRenewsAt()** | **string** | Renews timestamp
**getEndsAt()** | **string** | End timestamp
**getTrialEndsAt()** | **string** | Trial end timestamp
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

