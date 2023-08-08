---
title: "Tasks List"
parent: Model
layout: page
---

# Tasks List

```php
new \Kronup\Model\TasksList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of tasks
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks

