---
title: "Checkout"
parent: Model
layout: page
---

# Checkout

```php
new \Kronup\Model\Checkout();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Checkout ID
**getProductId()** | **int** | Product ID
**getVariantId()** | **int** | Variant ID
**getDarkMode()** | **bool** | Use dark mode   [default to `false`]
**getUrl()** | **string** | Custom Checkout URL
**getExpiresAt()** | **string** | Expires timestamp

