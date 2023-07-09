---
title: "Channel Members List"
parent: Model
layout: page
---

# Channel Members List

```php
new \Kronup\Model\ChannelMembersList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `500`]
**getTotal()** | **int** | Total number of members
**getMembers()** | [**\Kronup\Model\User[]**](../User) | User models

