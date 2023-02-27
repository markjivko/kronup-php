---
title: ValueItemUpdateRequest
parent: Model
layout: page
---

# ValueItemUpdateRequest

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getDigest()** | **string** | Value item digest <br>Example: `Feature name` 
**getDetails()** | **string** | Value item description <br>Example: `Feature description` 
**getStage()** | **string** | Value item stage <ul> <li><code>p</code> - Planning</li> <li><code>v</code> - Validation</li> <li><code>x</code> - Execution</li> <li><code>c</code> - Deep Context</li> </ul> <br>Example: `p` 
**getType()** | **string** | Value item type  <ul> <li><code>f</code> - Feature</li> <li><code>b</code> - Bug fix</li> <li><code>c</code> - Chore</li> </ul> <br>Example: `f` 
**getPriority()** | **string** | Value item MoSCoW priority <ul> <li><code>m</code> - Must-have</li> <li><code>s</code> - Should-have</li> <li><code>c</code> - Could-have</li> <li><code>w</code> - Will NOT have</li> </ul> <br>Example: `m` 

