---
title: Subscription - Lite
parent: Model
layout: page
---

# Subscription - Lite

```php
new \Kronup\Model\SubscriptionLite();
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
**getRenewsAt()** | **string** | Renews timestamp
**getEndsAt()** | **string** | End timestamp
**getTrialEndsAt()** | **string** | Trial end timestamp
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp
**getId()** | **string** | Organization ID

