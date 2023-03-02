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
**getMinuteId()** | **string** | Minute ID
**getAssigneeId()** | **string** | Author ID
**getDigest()** | **string** | Task title
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state    * `i` - Idle   * `p` - In progress   * `r` - In review   * `d` - Done [default to `'i'`]
**getKeywords()** | **string[]** | Keywords
**getIteration()** | **float** | Iteration number [default to `1`]

