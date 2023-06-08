---
title: Events List
parent: Model
layout: page
---

# Events List

```php
new \Kronup\Model\EventsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `100`]
**getTotal()** | **int** | Total number of events
**getEvents()** | [**\Kronup\Model\Event[]**](../Event) | Events

