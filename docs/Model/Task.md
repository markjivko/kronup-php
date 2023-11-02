---
title: "Models - Task"
description: "Task model"
parent: Model
layout: page
---

# Task

```php
new \Kronup\Model\Task();
```

Task model

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeUserId()** | **string** | User ID
**getHeading()** | **string** | Task title
**getState()** | **string** | Task state ( `idle` `in progress` `in review` `done` )  [default to `'idle'`]
**getNotionIds()** | **string[]** | Notion IDs

