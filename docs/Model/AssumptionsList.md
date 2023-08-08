---
title: "Assumptions List"
parent: Model
layout: page
---

# Assumptions List

```php
new \Kronup\Model\AssumptionsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of assumptions
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions

