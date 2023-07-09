---
title: "Teams List"
parent: Model
layout: page
---

# Teams List

```php
new \Kronup\Model\TeamsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `500`]
**getTotal()** | **int** | Total number of teams
**getTeams()** | [**\Kronup\Model\Team[]**](../Team) | Teams

