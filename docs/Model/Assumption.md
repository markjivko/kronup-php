---
title: "Models - Assumption"
description: "Feature Assumption"
parent: Model
layout: page
---

# 

```php
new \Kronup\Model\Assumption();
```

Feature Assumption

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Feature ID
**getAuthorUserId()** | **string** | User ID
**getHeading()** | **string** | Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists.
**getExperiment()** | [**\Kronup\Model\Experiment**](../Experiment) | 

