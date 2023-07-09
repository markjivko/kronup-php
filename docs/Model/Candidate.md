---
title: "Candidate"
parent: Model
layout: page
---

# Candidate

```php
new \Kronup\Model\Candidate();
```

Task Candidate

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getUserId()** | **string** | User ID
**getUserName()** | **string** | User name
**getUserItems()** | **int** | Number of value items where this user is executing tasks
**getYdStress()** | **float** | Forecast stress level based on notion assessments (0 to 100)
**getYdPrecision()** | **float** | Percentage of notions assessed for this task (0 to 100)
**getYdScore()** | **float** | Yerkes-Dodson score; 40+ is good, 90+ is great

