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
**getAuthorUserId()** | **string** | User ID
**getStage()** | **string** | Value Item Stage
**getCanAdvance()** | **bool** | Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization manager or administrator [default to `false`]
**getType()** | **string** | Value Item Type
**getPriority()** | **float** | Value Item Priority [default to `5`]
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions
**getTasks()** | [**\Kronup\Model\TaskExpanded[]**](../TaskExpanded) | Expanded Tasks
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

