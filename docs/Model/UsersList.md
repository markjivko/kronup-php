---
title: Users List
parent: Model
layout: page
---

# Users List

```php
new \Kronup\Model\UsersList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `100`]
**getTotal()** | **int** | Total number of users
**getUsers()** | [**\Kronup\Model\User[]**](../User) | Users

