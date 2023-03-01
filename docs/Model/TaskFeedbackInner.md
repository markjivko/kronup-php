---
title: TaskFeedbackInner
parent: Model
layout: page
---

# TaskFeedbackInner

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getIteration()** | **float** | Iteration number <br>Example: `null` 
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getIssue()** | **string** | Feedback issue    * `v` - Value   * `c` - Complexity   * `f` - Flexibility   * `t` - Testing   * `s` - Security   * `ci` - CI/CD   * `st` - Standards   * `m` - Miscellaneous <br>Example: `null`  [default to 'v']
**getMessage()** | **string** | Feedback details <br>Example: `null` 
**getReply()** | **string** | Feedback reply from task assignee <br>Example: `null` 

