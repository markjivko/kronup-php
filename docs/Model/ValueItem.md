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
**getStage()** | **string** | Value Item Stage
**getCanAdvance()** | **bool** | Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization manager or administrator [default to `false`]
**getType()** | **string** | Value Item Type
**getPriority()** | **string** | Value Item Priority using MoSCoW
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | List of Tasks
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

