---
title: ServiceAccount
parent: Model
layout: page
---

# ServiceAccount

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | User ID
**getProvider()** | **string** | Account provider
**getUserName()** | **string** | User name
**getUserIcon()** | **string** | User icon URL
**getServiceAccount()** | **bool** | Service accounts can only perform actions through API calls [default to `false`]
**getPuppetAccount()** | **bool** | Puppet accounts replace users removed from organizations. Puppets can no longer perform any actions [default to `false`]
**getTeams()** | [**\Kronup\Model\UserTeam[]**](../UserTeam) | User Teams
**getRoleSite()** | **string** | User site role
**getRoleOrg()** | [**\Kronup\Model\UserRoleOrg[]**](../UserRoleOrg) | Organization roles
**getCreatedAt()** | **string** | Created timestamp
**getUpdatedAt()** | **string** | Updated timestamp
**getServiceToken()** | **string** | Service Account API key - bearer JSON Web Token

