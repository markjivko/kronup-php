---
title: Account
parent: Model
layout: page
---

# Account

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** | User ID <br>Example: `user-id-***` | [optional]
**getUserEmail()** | **string** | User e-mail address <br>Example: `john@example.com` | [optional]
**getUserName()** | **string** | User name <br>Example: `John Doe` | [optional]
**getUserIcon()** | **string** | User icon URL <br>Example: `https://***` | [optional]
**getUserTokenIat()** | **int** | User token creation timestamp <br>Example: `1663663000` | [optional]
**getRoleSite()** | **string** | User site role <br>Example: `null` | [optional]
**getRoleOrg()** | [**\Kronup\Model\AccountRoleOrgInner[]**](../AccountRoleOrgInner) |  <br>Example: `null` | [optional]
**getCreatedAt()** | **string** | Created timestamp <br>Example: `2001-01-01T08:08:08.000+00:00` | [optional]
**getUpdatedAt()** | **string** | Updated timestamp <br>Example: `2001-01-01T08:08:08.000+00:00` | [optional]

