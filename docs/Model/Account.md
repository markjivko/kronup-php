---
title: Account
parent: Model
layout: page
---

# Account

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | User ID
**getProvider()** | **string** | Account provider
**getUserName()** | **string** | User name
**getUserIcon()** | **string** | User icon - either a full URL or a resource ID
**getServiceAccount()** | **bool** | Service accounts can only perform actions through API calls [default to `false`]
**getPuppetAccount()** | **bool** | Puppet accounts replace users removed from organizations. Puppets can no longer perform any actions [default to `false`]
**getTeams()** | [**\Kronup\Model\AccountTeam[]**](../AccountTeam) | Account Teams
**getRoleSite()** | **string** | User site role
**getRoleOrg()** | [**\Kronup\Model\AccountRoleOrg[]**](../AccountRoleOrg) | Organization roles
**getClosedTime()** | **float** | Account closed UNIX timestamp; 0 means the account is active [default to `0`]
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp
**getOrgs()** | [**\Kronup\Model\Organization[]**](../Organization) | Organizations
**getApiCalls()** | **array<string,float>** | List of daily API Calls from this account

