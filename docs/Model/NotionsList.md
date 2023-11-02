---
title: "Models - NotionsList"
description: ""
parent: Model
layout: page
---

# Notions List

```php
new \Kronup\Model\NotionsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of notions
**getNotions()** | [**\Kronup\Model\Notion[]**](../Notion) | Notions

