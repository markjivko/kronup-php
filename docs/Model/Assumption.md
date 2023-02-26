---
title: Assumption
parent: Model
layout: page
---

# Assumption

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getDigest()** | **string** | Assumptions are formulated as simple statements that can be proven true or false; avoid questions and opinions.  > ❌ What are the features? >  > ❌ Does this feature exist? >  > ❌ I don't like this feature. >  > ✅ This feature exists. <br>Example: `Electron.js supports Windows 7` 
**getValidated()** | **bool** | Assumption was validated by experiments <br>Example: `null`  [default to false]
**getExperiment()** | [**\Kronup\Model\AssumptionExperiment**](../AssumptionExperiment) |  <br>Example: `null` 

