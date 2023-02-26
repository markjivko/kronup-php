---
title: ValueItem
parent: Model
layout: page
---

# ValueItem

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Value item ID <br>Example: `value-item-***` 
**getOrgId()** | **string** | Organization ID <br>Example: `Organization, Inc.` 
**getTeamId()** | **string** | Team ID <br>Example: `team-id-***` 
**getChannelId()** | **string** | Channel ID <br>Example: `channel-id-***` 
**getDigest()** | **string** | Value item digest <br>Example: `Value item number 1` 
**getDetails()** | **string** | Value item description <br>Example: `Item detailed description ***` 
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getStage()** | **string** | Value Item Stage           * `p` - Planning           * `v` - Validation           * `x` - Execution           * `c` - Deep Context <br>Example: `p` 
**getChanges()** | [**\Kronup\Model\ValueItemChange[]**](../ValueItemChange) |  <br>Example: `null` 
**getType()** | **string** | Value Item Type   * `f` - Feature   * `b` - Bug fix   * `c` - Chore <br>Example: `f` 
**getPriority()** | **string** | Value Item Priority using MoSCoW   * `m` - Must-have   * `s` - Should-have   * `c` - Could-have   * `w` - Will NOT have <br>Example: `m` 
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions <br>Example: `null` 
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks <br>Example: `null` 

