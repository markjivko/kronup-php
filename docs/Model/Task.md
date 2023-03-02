---
title: Task
parent: Model
layout: page
---

# Task

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID <br>Example: `task-id-***` 
**getMinuteId()** | **string** | Minute ID <br>Example: `minute-id-***` 
**getAssigneeId()** | **string** | Author ID <br>Example: `user-id-***` 
**getDigest()** | **string** | Task title <br>Example: `null` 
**getDetails()** | **string** | Task description <br>Example: `null` 
**getState()** | **string** | Task state    * `i` - Idle   * `p` - In progress   * `r` - In review   * `d` - Done <br>Example: `null`  [default to 'i']
**getKeywords()** | **string[]** | Keywords <br>Example: `null` 
**getIteration()** | **float** | Iteration number <br>Example: `null`  [default to 1]

