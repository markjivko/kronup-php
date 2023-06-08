---
title: Task - Lite
parent: Model
layout: page
---

# Task - Lite

```php
new \Kronup\Model\TaskLite();
```

Task model without Minutes

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeUserId()** | **string** | User ID
**getState()** | **string** | Task state ( `idle` `in progress` `in review` `done` )  [default to `'idle'`]
**getNotionIds()** | **string[]** | Notion IDs

