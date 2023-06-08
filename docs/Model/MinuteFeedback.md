---
title: Minute Feedback
parent: Model
layout: page
---

# Minute Feedback

```php
new \Kronup\Model\MinuteFeedback();
```

Task feedback recorded in an iteration

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Feedback ID
**getIteration()** | **float** | Iteration number   [default to `1`]
**getAuthorUserId()** | **string** | User ID
**getIssue()** | **string** | Feedback issue ( `value` `complexity` `flexibility` `testing` `security` `ci/cd` `standards` `misc` )  [default to `'value'`]
**getMessage()** | **string** | Feedback for assignee
**getReply()** | **string** | Reply from assignee

