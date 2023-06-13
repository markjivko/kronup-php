---
title: Service Accounts List
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
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `500`]
**getTotal()** | **int** | Total number of service accounts
**getServiceAccounts()** | [**\Kronup\Model\ServiceAccount[]**](../ServiceAccount) | Service Accounts

