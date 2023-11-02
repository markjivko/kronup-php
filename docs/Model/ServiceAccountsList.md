---
title: "Models - ServiceAccountsList"
description: ""
parent: Model
layout: page
---

# Service Accounts List

```php
new \Kronup\Model\ServiceAccountsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of service accounts
**getServiceAccounts()** | [**\Kronup\Model\ServiceAccount[]**](../ServiceAccount) | Service Accounts

