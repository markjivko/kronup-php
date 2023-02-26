---
title: Task
parent: Model
layout: page
---

# Task

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAssigneeId()** | **string** | Author ID <br>Example: `user-id-***` 
**getDigest()** | **string** | Task title <br>Example: `null` 
**getDetails()** | **string** | Task description <br>Example: `null` 
**getState()** | **string** | Task state   * `i` - Idle   * `p` - In progress   * `r` - In review   * `d` - Done <br>Example: `null`  [default to 'i']
**getKeywords()** | **string[]** | Keywords <br>Example: `null` 
**getIteration()** | **float** | Iteration number <br>Example: `null` 
**getDiscoveries()** | [**\Kronup\Model\TaskDiscoveriesInner[]**](../TaskDiscoveriesInner) | Discoveries <br>Example: `null` 
**getFeedback()** | [**\Kronup\Model\TaskFeedbackInner[]**](../TaskFeedbackInner) | Feedback <br>Example: `null` 
**getAma()** | [**\Kronup\Model\TaskAmaInner[]**](../TaskAmaInner) | Ask me anything <br>Example: `null` 

