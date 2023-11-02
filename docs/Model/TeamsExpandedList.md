---
title: "Models - TeamsExpandedList"
description: ""
parent: Model
layout: page
---

# Teams Expanded List

```php
new \Kronup\Model\TeamsExpandedList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of teams
**getTeams()** | [**\Kronup\Model\TeamExpanded[]**](../TeamExpanded) | Teams

