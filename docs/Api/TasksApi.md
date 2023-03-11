---
title: Tasks
parent: API
layout: page
---

# Api/TasksApi

[Tasks API Reference](https://api.kronup.com/#tag/Tasks)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->tasks();
```

## Methods

Method | Description
------------- | -------------
[**taskAssign()**](#taskassign) | Assign to user
[**taskCreate()**](#taskcreate) | Create task
[**taskDelete()**](#taskdelete) | Delete task
[**taskDiscoveryCreate()**](#taskdiscoverycreate) | Create discovery
[**taskDiscoveryDelete()**](#taskdiscoverydelete) | Delete discovery
[**taskDiscoveryUpdate()**](#taskdiscoveryupdate) | Update discovery
[**taskFeedbackCreate()**](#taskfeedbackcreate) | Create feedback
[**taskFeedbackDelete()**](#taskfeedbackdelete) | Delete feedback
[**taskFeedbackReply()**](#taskfeedbackreply) | Reply to feedback
[**taskFeedbackUpdate()**](#taskfeedbackupdate) | Update feedback
[**taskList()**](#tasklist) | List tasks
[**taskNotionAdd()**](#tasknotionadd) | Add notion
[**taskNotionRemove()**](#tasknotionremove) | Remove notion
[**taskRead()**](#taskread) | Fetch task
[**taskUpdate()**](#taskupdate) | Update task


## `taskAssign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskAssign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskAssign.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskAssign(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\Task
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Assign to user

Assign task to user

[Back to top](#top){: .btn .btn-purple }

---


## `taskCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskCreate $request_task_create
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_create** | [**\Kronup\Model\RequestTaskCreate**](../../Model/RequestTaskCreate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Create task

Add a task to value item

[Back to top](#top){: .btn .btn-purple }

---


## `taskDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete task

Delete a task from a value item

[Back to top](#top){: .btn .btn-purple }

---


## `taskDiscoveryCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskDiscoveryCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskDiscoveryCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskDiscoveryCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskDiscoveryCreate $request_task_discovery_create
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_discovery_create** | [**\Kronup\Model\RequestTaskDiscoveryCreate**](../../Model/RequestTaskDiscoveryCreate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Create discovery

Add a discovery to task

[Back to top](#top){: .btn .btn-purple }

---


## `taskDiscoveryDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskDiscoveryDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskDiscoveryDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries/{discoveryId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskDiscoveryDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $discovery_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$discovery_id** | **string**  | Discovery ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete discovery

Delete a task discovery

[Back to top](#top){: .btn .btn-purple }

---


## `taskDiscoveryUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskDiscoveryUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskDiscoveryUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries/{discoveryId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskDiscoveryUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $discovery_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskDiscoveryUpdate $request_task_discovery_update
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$discovery_id** | **string**  | Discovery ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_discovery_update** | [**\Kronup\Model\RequestTaskDiscoveryUpdate**](../../Model/RequestTaskDiscoveryUpdate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Update discovery

Update a task discovery

[Back to top](#top){: .btn .btn-purple }

---


## `taskFeedbackCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskFeedbackCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskFeedbackCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskFeedbackCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskFeedbackCreate $request_task_feedback_create
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_feedback_create** | [**\Kronup\Model\RequestTaskFeedbackCreate**](../../Model/RequestTaskFeedbackCreate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Create feedback

Add a feedback to task

[Back to top](#top){: .btn .btn-purple }

---


## `taskFeedbackDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskFeedbackDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskFeedbackDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskFeedbackDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete feedback

Delete a feedback for a task

[Back to top](#top){: .btn .btn-purple }

---


## `taskFeedbackReply()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskFeedbackReply.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskFeedbackReply.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}/reply`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskFeedbackReply(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskFeedbackReply $request_task_feedback_reply
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_feedback_reply** | [**\Kronup\Model\RequestTaskFeedbackReply**](../../Model/RequestTaskFeedbackReply) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Reply to feedback

Update a reply to a task feedback

[Back to top](#top){: .btn .btn-purple }

---


## `taskFeedbackUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskFeedbackUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskFeedbackUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskFeedbackUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskFeedbackUpdate $request_task_feedback_update
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_feedback_update** | [**\Kronup\Model\RequestTaskFeedbackUpdate**](../../Model/RequestTaskFeedbackUpdate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Update feedback

Update a task feedback

[Back to top](#top){: .btn .btn-purple }

---


## `taskList()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskList.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskList.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskList(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TasksList
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TasksList**](../../Model/TasksList)

### Description

> List tasks

Get a list of task models

[Back to top](#top){: .btn .btn-purple }

---


## `taskNotionAdd()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskNotionAdd.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskNotionAdd.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskNotionAdd(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $notion_id,
    string $x_org_id
): \Kronup\Model\Task
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$notion_id** | **string**  | Notion ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Add notion

Add a notion to task

[Back to top](#top){: .btn .btn-purple }

---


## `taskNotionRemove()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskNotionRemove.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskNotionRemove.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/notions/{notionId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskNotionRemove(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $notion_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$notion_id** | **string**  | Notion ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Remove notion

Remove a notion from task

[Back to top](#top){: .btn .btn-purple }

---


## `taskRead()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskRead.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskRead.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskRead(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $x_org_id
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Fetch task

Retrieve task model

[Back to top](#top){: .btn .btn-purple }

---


## `taskUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **taskUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/taskUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->taskUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $x_org_id,
    \Kronup\Model\RequestTaskUpdate $request_task_update
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$x_org_id** | **string**  | Organization ID 
 **$request_task_update** | [**\Kronup\Model\RequestTaskUpdate**](../../Model/RequestTaskUpdate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Update task

Update task details

[Back to top](#top){: .btn .btn-purple }

---
