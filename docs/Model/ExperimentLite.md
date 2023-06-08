---
title: Experiment Lite
parent: Model
layout: page
---

# Experiment Lite

```php
new \Kronup\Model\ExperimentLite();
```

Experiment meant to validate assumption

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAuthorUserIds()** | **string[]** | Author IDs
**getConfirmed()** | **bool** | Experiment confirms assumption   [default to `false`]
**getState()** | **string** | Experiment state ( `idle` `running` `done` )  [default to `'idle'`]

