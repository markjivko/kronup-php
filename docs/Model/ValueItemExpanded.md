---
title: ValueItemExpanded
parent: Model
layout: page
---

# ValueItemExpanded

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
**getStage()** | **string** | Value Item Stage    * `planning` - Planning   * `validation` - Validation   * `execution` - Execution   * `deep context` - Deep Context
**getCanAdvance()** | **bool** | Value Item can advance to the next stage   * In Planning: at least 1 Assumption was added   * In Validation: all Assumptions were validated   * In Execution: all Tasks were completed [default to `false`]
**getType()** | **string** | Value Item Type    * `feature` - Feature   * `bug fix` - Bug fix   * `chore` - Chore
**getPriority()** | **string** | Value Item Priority using MoSCoW    * `must` - Must-have   * `should` - Should-have   * `could` - Could-have   * `will not` - Will NOT have
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions
**getTasks()** | [**\Kronup\Model\TaskExpanded[]**](../TaskExpanded) | List of expanded Tasks

