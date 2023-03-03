---
title: ValueItem
parent: Model
layout: page
---

# ValueItem

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Value item ID
**getOrgId()** | **string** | Organization ID
**getTeamId()** | **string** | Team ID
**getChannelId()** | **string** | Channel ID
**getDigest()** | **string** | Value item digest
**getDetails()** | **string** | Value item description
**getAuthorId()** | **string** | Author ID
**getStage()** | **string** | Value Item Stage    * `p` - Planning   * `v` - Validation   * `x` - Execution   * `c` - Deep Context
**getCanAdvance()** | **bool** | Value Item can advance to the next stage   * In Planning: at least 1 Assumption was added   * In Validation: all Assumptions were validated   * In Execution: all Tasks were completed [default to `false`]
**getType()** | **string** | Value Item Type    * `f` - Feature   * `b` - Bug fix   * `c` - Chore
**getPriority()** | **string** | Value Item Priority using MoSCoW    * `m` - Must-have   * `s` - Should-have   * `c` - Could-have   * `w` - Will NOT have
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions
**getTasks()** | [**\Kronup\Model\TaskCore[]**](../TaskCore) | 

