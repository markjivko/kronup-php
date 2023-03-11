---
title: Task
parent: Model
layout: page
---

# Task

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeId()** | **string** | Author ID
**getDigest()** | **string** | Task title
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state    * `idle` - Idle   * `in progress` - In progress   * `in review` - In review   * `done` - Done [default to `'idle'`]
**getNotionIds()** | **string[]** | Notions

