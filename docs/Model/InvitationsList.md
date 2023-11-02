---
title: "Models - InvitationsList"
description: ""
parent: Model
layout: page
---

# Invitations List

```php
new \Kronup\Model\InvitationsList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of invitations
**getInvitations()** | [**\Kronup\Model\Invitation[]**](../Invitation) | Invitations

