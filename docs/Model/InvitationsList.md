---
title: Invitations List
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
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `500`]
**getTotal()** | **int** | Total number of invitations
**getInvitations()** | [**\Kronup\Model\Invitation[]**](../Invitation) | Invitations

