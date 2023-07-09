---
title: "Payload Task Feedback Create"
parent: Model
layout: page
---

# Payload Task Feedback Create

```php
new \Kronup\Model\PayloadTaskFeedbackCreate();
```

Payload object required to add feedback to a Task

## Payload setters

Method name | Argument type | Description
------------ | ------------- | -------------
**setMessage()** | **string** | Feedback details
**setIssue()** | **string** | Feedback issue ( `value` `complexity` `flexibility` `testing` `security` `ci/cd` `standards` `misc` )

