---
title: Tasks List
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
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `100`]
**getTotal()** | **int** | Total number of tasks
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks

