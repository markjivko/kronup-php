---
title: "Value Item - Lite"
parent: Model
layout: page
---

# Value Item - Lite

```php
new \Kronup\Model\ValueItemLite();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Value item ID
**getTeamId()** | **string** | Team ID
**getChannelId()** | **string** | Channel ID
**getHeading()** | **string** | Value item heading
**getAuthorUserId()** | **string** | User ID
**getStage()** | **string** | Value Item Stage ( `planning` `validation` `execution` `deep context` )
**getCanAdvance()** | **bool** | Conditions for Value Items to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Value Items become read-only; they can only be deleted by an Organization owner or administrator   [default to `false`]
**getType()** | **string** | Value Item Type ( `feature` `bug fix` `routine` )
**getPriority()** | **float** | Value Item Priority   [default to `1`]
**getAssumptions()** | [**\Kronup\Model\AssumptionLite[]**](../AssumptionLite) | Assumptions - Lite
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

