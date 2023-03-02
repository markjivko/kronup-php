---
title: RequestInvitationCreate
parent: Model
layout: page
---

# RequestInvitationCreate

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getInviteName()** | **string** | Invitation name
**getInviteDomain()** | **string** | User email domain name. If specified, restrict access to e-mail addresses belonging to this domain. [default to `''`]
**getInviteOrgRole()** | **string** | User role [default to `'member'`]
**getInviteExpireDays()** | **int** | The invitation expires after this many days. 0 = no expiration [default to `0`]
**getInviteUsesMax()** | **int** | The invitation expires after being used this many times. 0 = no expiration [default to `0`]

