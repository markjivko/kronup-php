---
title: "Event"
parent: Model
layout: page
---

# Event

```php
new \Kronup\Model\Event();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Event ID
**getType()** | **string** | Event type ( `features` `assumptions` `tasks` `self-evaluation` `peer evaluation` )
**getTeamId()** | **string** | Team ID
**getChannelId()** | **string** | Channel ID
**getNotionId()** | **string** | Notion ID
**getPeerUserId()** | **string** | Peers User ID
**getFeatureId()** | **string** | Feature ID
**getAssmId()** | **string** | Assumption ID
**getTaskId()** | **string** | Task ID
**getDiff()** | **string[]** | Difference
**getStage()** | **string** | Feature Stage ( `planning` `validation` `execution` `deep context` )

