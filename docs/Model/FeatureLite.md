---
title: "Feature - Lite"
parent: Model
layout: page
---

# Feature - Lite

```php
new \Kronup\Model\FeatureLite();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Feature ID
**getTeamId()** | **string** | Team ID
**getChannelId()** | **string** | Channel ID
**getHeading()** | **string** | Feature heading
**getAuthorUserId()** | **string** | User ID
**getStage()** | **string** | Feature Stage ( `planning` `validation` `execution` `deep context` )
**getCanAdvance()** | **bool** | Conditions for Features to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Features become read-only; they can only be deleted by an Organization owner or administrator   [default to `false`]
**getType()** | **string** | Feature Type ( `feature` `bug fix` `routine` )
**getPriority()** | **float** | Feature Priority   [default to `1`]
**getAssumptions()** | [**\Kronup\Model\AssumptionLite[]**](../AssumptionLite) | Assumptions - Lite
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

