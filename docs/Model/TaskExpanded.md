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
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state [default to `'idle'`]
**getMinute()** | [**\Kronup\Model\Minute**](../Minute) | 
**getNotions()** | [**\Kronup\Model\Notion[]**](../Notion) | Notions

