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
**getState()** | **string** | Task state    * `i` - Idle   * `p` - In progress   * `r` - In review   * `d` - Done [default to `'i'`]
**getNotions()** | **string[]** | Notions

