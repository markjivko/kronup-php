---
title: "Events List"
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
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of events
**getEvents()** | [**\Kronup\Model\Event[]**](../Event) | Events
**getReadOnly()** | **bool** | The organization is currently in read-only mode   [default to `false`]

