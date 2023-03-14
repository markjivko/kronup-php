---
title: Assumption
parent: Model
layout: page
---

# Assumption

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Value item ID
**getAuthorId()** | **string** | Author ID
**getDigest()** | **string** | Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists.
**getValidated()** | **bool** | Assumption was validated by experiments [default to `false`]
**getExperiment()** | [**\Kronup\Model\Experiment**](../Experiment) | 

