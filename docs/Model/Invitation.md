---
title: "Models - Invitation"
description: ""
parent: Model
layout: page
---

# Invitation

```php
new \Kronup\Model\Invitation();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Invitation ID
**getOrgId()** | **string** | Organization ID
**getTeamId()** | **string** | Team ID
**getUserId()** | **string** | User ID
**getInviteName()** | **string** | Invitation name
**getInviteOrgRole()** | **string** | Invitation user role ( `admin` `member` )
**getInviteOrgName()** | **string** | Invitation organzation name
**getInviteUses()** | **int** | Number of uses
**getInviteUsesMax()** | **int** | Maximum number of uses
**getInviteViews()** | **int** | Number of views
**getExpiresAt()** | **string** | Expires timestamp
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

