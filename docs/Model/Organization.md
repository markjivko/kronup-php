---
title: "Organization"
parent: Model
layout: page
---

# Organization

```php
new \Kronup\Model\Organization();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Organization ID
**getOrgName()** | **string** | Organization name
**getOrgIconId()** | **string** | Organization logo ID
**getOrgOwners()** | **string[]** | Organization owner IDs
**getOrgUsersMax()** | **int** | Maximum number of users in this organization   [default to `2`]
**getOrgUsersCount()** | **int** | Current number of users in this organization   [default to `1`]
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp

