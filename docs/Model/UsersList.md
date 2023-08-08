---
title: "Users List"
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
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of users
**getUsers()** | [**\Kronup\Model\User[]**](../User) | Users
**getUsersMax()** | **int** | Maximum number of users for this organization

