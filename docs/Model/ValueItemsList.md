---
title: "Value Items List"
parent: Model
layout: page
---

# Value Items List

```php
new \Kronup\Model\ValueItemsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of value items
**getItems()** | [**\Kronup\Model\ValueItemLite[]**](../ValueItemLite) | Value Items - Lite version

