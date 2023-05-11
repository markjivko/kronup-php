---
title: PayloadInvitationCreate
parent: Model
layout: page
---

# PayloadInvitationCreate

Payload object required to create an Invitation

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getTeamId()** | **string** | Team ID
**getInviteName()** | **string** | Invitation name
**getInviteOrgRole()** | **string** | User role [default to `'member'`]
**getInviteExpireDays()** | **int** | The invitation expires after this many days [default to `1`]
**getInviteUsesMax()** | **int** | The invitation expires after being used this many times. 0 = no limit [default to `0`]

