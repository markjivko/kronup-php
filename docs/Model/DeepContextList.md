---
title: "Models - DeepContextList"
description: ""
parent: Model
layout: page
---

# Deep Context List

```php
new \Kronup\Model\DeepContextList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of features
**getFeatures()** | [**\Kronup\Model\Feature[]**](../Feature) | Features

