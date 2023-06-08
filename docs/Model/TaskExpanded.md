---
title: TaskExpanded
parent: Model
layout: page
---

# TaskExpanded

Task model without Minutes

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeUserId()** | **string** | User ID
**getHeading()** | **string** | Task title
**getState()** | **string** | Task state ( `idle`, `in progress`, `in review`, `done`, )  [default to `'idle'`]
**getDetails()** | **string** | Task description
**getMinute()** | [**\Kronup\Model\Minute**](../Minute) | 
**getNotions()** | [**\Kronup\Model\Notion[]**](../Notion) | Notions

