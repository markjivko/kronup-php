---
title: MinuteFeedback
parent: Model
layout: page
---

# MinuteFeedback

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Feedback ID
**getIteration()** | **float** | Iteration number [default to `1`]
**getAuthorId()** | **string** | Author ID
**getIssue()** | **string** | Feedback issue    * `value` - Value   * `complexity` - Complexity   * `flexibility` - Flexibility   * `testing` - Testing   * `security` - Security   * `ci/cd` - CI/CD   * `standards` - Standards   * `misc` - Miscellaneous [default to `'value'`]
**getMessage()** | **string** | Feedback details
**getReply()** | **string** | Reply from assignee

