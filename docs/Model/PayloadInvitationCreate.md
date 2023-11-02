---
title: "Models - PayloadInvitationCreate"
description: "Payload object required to create an Invitation"
parent: Model
layout: page
---

# Payload Invitation Create

```php
new \Kronup\Model\PayloadInvitationCreate();
```

Payload object required to create an Invitation

## Payload setters

Method name | Argument type | Description
------------ | ------------- | -------------
**setTeamId()** | **string** | Team ID
**setInviteName()** | **string** | Invitation name
**setInviteOrgRole()** | **string** | User role ( `admin` `member` )  [default to `'member'`]
**setInviteExpireDays()** | **int** | The invitation expires after this many days   [default to `1`]
**setInviteUsesMax()** | **int** | The invitation expires after being used this many times. 0 = no limit   [default to `0`]

