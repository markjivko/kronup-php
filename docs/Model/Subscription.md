---
title: Subscription
parent: Model
layout: page
---

# Subscription

```php
new \Kronup\Model\Subscription();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getSubscriptionId()** | **float** | Subscription ID
**getStatus()** | **string** | ( `active` `on_trial` `past_due` `cancelled` `unpaid` `paused` `expired` )
**getUrl()** | **string** | Update payment method URL
**getOrderId()** | **float** | Order ID
**getOrderItemId()** | **float** | Order Item ID
**getProductId()** | **float** | Product ID
**getVariantId()** | **float** | Variant ID
**getCustomerId()** | **float** | Customer ID
**getCardBrand()** | **string** | Card brand ( `visa` `mastercard` `american_express` `discover` `jcb` `diners_club` `null` )
**getCardLast4()** | **string** | Card last 4 digits
**getPricePlan()** | [**\Kronup\Model\PricePlan**](../PricePlan) | 
**getUsersCount()** | **float** | Total number of Organization members
**getRenewsAt()** | **string** | Renews timestamp
**getEndsAt()** | **string** | End timestamp
**getTrialEndsAt()** | **string** | Trial end timestamp
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

