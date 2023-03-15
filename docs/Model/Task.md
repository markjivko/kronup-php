---
title: Task
parent: Model
layout: page
---

# Task

Task model without Minutes

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeId()** | **string** | Author ID
**getDigest()** | **string** | Task title
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state [default to `'idle'`]
**getNotionIds()** | **string[]** | Notion IDs

