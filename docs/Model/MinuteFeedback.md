---
title: MinuteFeedback
parent: Model
layout: page
---

# MinuteFeedback

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getIteration()** | **float** | Iteration number
**getAuthorId()** | **string** | Author ID
**getIssue()** | **string** | Feedback issue    * `v` - Value   * `c` - Complexity   * `f` - Flexibility   * `t` - Testing   * `s` - Security   * `ci` - CI/CD   * `st` - Standards   * `m` - Miscellaneous [default to `'v'`]
**getMessage()** | **string** | Feedback details
**getReply()** | **string** | Reply from assignee

