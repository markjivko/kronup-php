---
title: Payload Task Update
parent: Model
layout: page
---

# Payload Task Update

```php
new \Kronup\Model\PayloadTaskUpdate();
```

Payload object required to update a Task

## Payload setters

Method name | Argument type | Description
------------ | ------------- | -------------
**setHeading()** | **string** | Task heading
**setDetails()** | **string** | Task details
**setState()** | **string** | Task state ( `idle` `in progress` `in review` `done` )
**setNotionIds()** | **string[]** | Notion IDs

