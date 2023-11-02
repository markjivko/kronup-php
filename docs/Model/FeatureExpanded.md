---
title: "Models - FeatureExpanded"
description: ""
parent: Model
layout: page
---

# Feature - Expanded

```php
new \Kronup\Model\FeatureExpanded();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Feature ID
**getTeamId()** | **string** | Team ID
**getChannelId()** | **string** | Channel ID
**getHeading()** | **string** | Feature heading
**getDetails()** | **string** | Feature description
**getAuthorUserId()** | **string** | User ID
**getStage()** | **string** | Feature Stage ( `planning` `validation` `execution` `deep context` )
**getCanAdvance()** | **bool** | Conditions for Features to advance to the next stage:    * `planning` - at least 1 Assumption was added   * `validation` - all Assumption experiments were marked as `done`   * `execution` - all Tasks were marked as `done`   * `deep context` - Features become read-only; they can only be deleted by an Organization owner or administrator   [default to `false`]
**getFocus()** | **string** | Feature Focus ( `firmitas` `utilitas` `venustas` )
**getPriority()** | **float** | Feature Priority   [default to `1`]
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions
**getTasks()** | [**\Kronup\Model\TaskExpanded[]**](../TaskExpanded) | Expanded Tasks
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp
**getTeamName()** | **string** | Team name
**getChannelName()** | **string** | Channel name

