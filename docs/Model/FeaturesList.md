---
title: "Features List"
parent: Model
layout: page
---

# Features List

```php
new \Kronup\Model\FeaturesList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of features
**getFeatures()** | [**\Kronup\Model\FeatureLite[]**](../FeatureLite) | Features - Lite version

