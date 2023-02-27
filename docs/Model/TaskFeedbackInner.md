---
title: TaskFeedbackInner
parent: Model
layout: page
---

# TaskFeedbackInner

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getIssue()** | **string** | Feedback issue <ul> <li>`v` - Value</li> <li>`c` - Complexity</li> <li>`f` - Flexibility</li> <li>`t` - Testing</li> <li>`s` - Security</li> <li>`ci` - CI/CD</li> <li>`st` - Standards</li> <li>`m` - Miscellaneous</li> </ul> <br>Example: `null`  [default to 'v']
**getMessage()** | **string** | Feedback details <br>Example: `null` 
**getReply()** | **string** | Feedback reply from task assignee <br>Example: `null` 
**getIteration()** | **float** | Iteration number <br>Example: `null` 

