---
title: Minute Discovery
parent: Model
layout: page
---

# Minute Discovery

```php
new \Kronup\Model\MinuteDiscovery();
```

Task discovery recorded in an iteration

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Discovery ID
**getIat()** | **float** | Issued at time
**getIteration()** | **float** | Iteration number   [default to `1`]
**getAuthorUserId()** | **string** | User ID
**getDetails()** | **string** | Discovery details

