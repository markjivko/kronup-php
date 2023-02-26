---
title: AssumptionExperiment
parent: Model
layout: page
---

# AssumptionExperiment

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getDigest()** | **string** | Experiment findings formulated in one sentence <br>Example: `Tested latest version successfully with a virtual machine` 
**getDetails()** | **string** | Experiment details <br>Example: `null` 
**getState()** | **string** | Experiment state   * `i` - Idle   * `r` - Running   * `d` - Done <br>Example: `null`  [default to 'i']

