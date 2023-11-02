---
title: "Models - ExperiencesList"
description: ""
parent: Model
layout: page
---

# Experiences List

```php
new \Kronup\Model\ExperiencesList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of experiences
**getExperiences()** | [**\Kronup\Model\Experience[]**](../Experience) | Experiences

