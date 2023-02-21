---
title: Item
parent: Model
layout: page
---

# Item

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Value item ID <br>Example: `value-item-***` 
**getDigest()** | **string** | Value item digest <br>Example: `Value item number 1` 
**getDetails()** | **string** | Value item description <br>Example: `Item detailed description ***` 
**getOrgId()** | **string** | Organization ID <br>Example: `Organization, Inc.` 
**getProjectId()** | **string** | Project ID <br>Example: `Productivity app` 
**getTeamId()** | **string** | Team ID <br>Example: `UX` 
**getAuthorId()** | **string** | Author ID <br>Example: `user-id-***` 
**getStage()** | [**\Kronup\Model\ItemStage**](../ItemStage) |  <br>Example: `null` 
**getStageChanges()** | [**\Kronup\Model\StageChangesInner[]**](../StageChangesInner) |  <br>Example: `null` 
**getType()** | **string** | Value Item Type   * `f` - Feature   * `b` - Bug fix   * `c` - Chore <br>Example: `null` 
**getPriority()** | **string** | Value Item Priority using MoSCoW   * `m` - Must-have   * `s` - Should-have   * `c` - Could-have   * `w` - Will NOT have <br>Example: `null` 
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions <br>Example: `null` 
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks <br>Example: `null` 

