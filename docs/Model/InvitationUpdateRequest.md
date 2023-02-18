---
title: InvitationUpdateRequest
parent: Model
layout: page
---

# InvitationUpdateRequest

## Model getters

Method name | Return type | Description | Notes
------------ | ------------- | ------------- | -------------
**getInviteName()** | **string** | Invitation name <br>Example: `null` |
**getInviteDomain()** | **string** | User email domain name. If specified, restrict access to e-mail addresses belonging to this domain. <br>Example: `null` | [default to '']
**getInviteOrgRole()** | **string** | User role <br>Example: `member` | [default to 'member']
**getInviteExpireDays()** | **int** | The invitation expires after this many days. 0 = no expiration <br>Example: `5` | [default to 0]
**getInviteUsesMax()** | **int** | The invitation expires after being used this many times. 0 = no expiration <br>Example: `10` | [default to 0]

