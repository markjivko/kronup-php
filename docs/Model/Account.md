---
title: Account
parent: Model
layout: page
---

# Account

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | User ID <br>Example: `user-id-***` 
**getUserEmail()** | **string** | User e-mail address <br>Example: `john@example.com` 
**getUserName()** | **string** | User name <br>Example: `John Doe` 
**getUserIcon()** | **string** | User icon URL <br>Example: `https://***` 
**getTeams()** | [**\Kronup\Model\UserTeamChannel[]**](../UserTeamChannel) |  <br>Example: `null` 
**getRoleSite()** | **string** | User site role <br>Example: `null` 
**getRoleOrg()** | [**\Kronup\Model\UserRoleOrg[]**](../UserRoleOrg) |  <br>Example: `null` 
**getCreatedAt()** | **string** | Created timestamp <br>Example: `2001-01-01T08:08:08.000+00:00` 
**getUpdatedAt()** | **string** | Updated timestamp <br>Example: `2001-01-01T08:08:08.000+00:00` 
**getOrgs()** | [**\Kronup\Model\Organization[]**](../Organization) |  <br>Example: `null` 

