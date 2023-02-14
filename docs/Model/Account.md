---
title: Account
parent: Model
layout: page
---

# Account

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getId()** | **string** |  <br>Example: `user-id-***` | [optional]
**getUserEmail()** | **string** |  <br>Example: `john@example.com` | [optional]
**getUserName()** | **string** |  <br>Example: `John Doe` | [optional]
**getUserIcon()** | **string** |  <br>Example: `https://***` | [optional]
**getUserTokenIat()** | **float** |  <br>Example: `1663663000` | [optional]
**getRoleSite()** | **string** |  <br>Example: `admin` | [optional]
**getRoles()** | [**\Kronup\Model\AccountRolesInner[]**](../AccountRolesInner) |  <br>Example: `null` | [optional]
**getCreatedAt()** | **string** |  <br>Example: `2001-01-01T08:08:08.000+00:00` | [optional]
**getUpdatedAt()** | **string** |  <br>Example: `2001-01-01T08:08:08.000+00:00` | [optional]
**getOrgs()** | [**\Kronup\Model\Organization[]**](../Organization) |  <br>Example: `null` | [optional]

