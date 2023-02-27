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
**getStage()** | **string** | Value Item Stage <ul> <li>`p` - Planning</li> <li>`v` - Validation</li> <li>`x` - Execution</li> <li>`c` - Deep Context</li> </ul> <br>Example: `p` 
**getType()** | **string** | Value Item Type <ul> <li>`f` - Feature</li> <li>`b` - Bug fix</li> <li>`c` - Chore</li> </ul> <br>Example: `f` 
**getPriority()** | **string** | Value Item Priority using MoSCoW <ul> <li>`m` - Must-have</li> <li>`s` - Should-have</li> <li>`c` - Could-have</li> <li>`w` - Will NOT have</li> </ul> <br>Example: `m` 
**getAssumptions()** | [**\Kronup\Model\Assumption[]**](../Assumption) | Assumptions <br>Example: `null` 
**getTasks()** | [**\Kronup\Model\Task[]**](../Task) | Tasks <br>Example: `null` 

