---
title: TaskExpanded
parent: Model
layout: page
---

# TaskExpanded

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getMinute()** | [**\Kronup\Model\Minute**](../Minute) | 
**getAssigneeId()** | **string** | Author ID
**getDigest()** | **string** | Task title
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state    * `idle` - Idle   * `in progress` - In progress   * `in review` - In review   * `done` - Done [default to `'idle'`]
**getNotions()** | [**\Kronup\Model\Notion[]**](../Notion) | Notions

