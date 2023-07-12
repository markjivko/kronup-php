---
title: "Tasks"
parent: API
layout: page
---

# Api/TasksApi

Method | Description
------------- | -------------
🔹 [**assign()**](#assign) | Assign to user
🔹 [**create()**](#create) | Create task
🔹 [**delete()**](#delete) | Delete task
🔹 [**discoveryCreate()**](#discoverycreate) | Create discovery
🔹 [**discoveryDelete()**](#discoverydelete) | Delete discovery
🔹 [**discoveryUpdate()**](#discoveryupdate) | Update discovery
🔹 [**feedbackCreate()**](#feedbackcreate) | Create feedback
🔹 [**feedbackDelete()**](#feedbackdelete) | Delete feedback
🔹 [**feedbackReply()**](#feedbackreply) | Reply to feedback
🔹 [**feedbackUpdate()**](#feedbackupdate) | Update feedback
🔹 [**list()**](#list) | List tasks
🔹 [**listCandidates()**](#listcandidates) | List candidates
🔹 [**read()**](#read) | Fetch task
🔹 [**update()**](#update) | Update task


📚 [Tasks API Reference](https://api.kronup.com/#tag/Tasks)

## Getting started

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->tasks();
```


## `assign()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **assign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/assign.php){: .btn .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->assign(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $user_id
): \Kronup\Model\Task
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$user_id** | **string**  | User ID 

### Return type

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Assign to user

Assign task to user

[🔺 Back to top](#top)

---


## `create()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **create.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/create.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->create(
    string $team_id,
    string $channel_id,
    string $item_id,
    \Kronup\Model\PayloadTaskCreate $payload_task_create
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$payload_task_create** | [**\Kronup\Model\PayloadTaskCreate**](../../Model/PayloadTaskCreate) |  

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Create task

Add a task to value item

[🔺 Back to top](#top)

---


## `delete()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **delete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/delete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->delete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 

### Return type

**bool**

### Description

> Delete task

Delete a task from a value item

[🔺 Back to top](#top)

---


## `discoveryCreate()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **discoveryCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/discoveryCreate.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->discoveryCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    \Kronup\Model\PayloadTaskDiscoveryCreate $payload_task_discovery_create
): \Kronup\Model\MinuteDiscovery
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$payload_task_discovery_create** | [**\Kronup\Model\PayloadTaskDiscoveryCreate**](../../Model/PayloadTaskDiscoveryCreate) |  

### Return type

[**\Kronup\Model\MinuteDiscovery**](../../Model/MinuteDiscovery)

### Description

> Create discovery

Add a discovery to task

[🔺 Back to top](#top)

---


## `discoveryDelete()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **discoveryDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/discoveryDelete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries/{discoveryId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->discoveryDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $discovery_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$discovery_id** | **string**  | Discovery ID 

### Return type

**bool**

### Description

> Delete discovery

Delete a task discovery

[🔺 Back to top](#top)

---


## `discoveryUpdate()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **discoveryUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/discoveryUpdate.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/discoveries/{discoveryId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->discoveryUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $discovery_id,
    \Kronup\Model\PayloadTaskDiscoveryUpdate $payload_task_discovery_update
): \Kronup\Model\MinuteDiscovery
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$discovery_id** | **string**  | Discovery ID 
 **$payload_task_discovery_update** | [**\Kronup\Model\PayloadTaskDiscoveryUpdate**](../../Model/PayloadTaskDiscoveryUpdate) |  

### Return type

[**\Kronup\Model\MinuteDiscovery**](../../Model/MinuteDiscovery)

### Description

> Update discovery

Update a task discovery

[🔺 Back to top](#top)

---


## `feedbackCreate()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **feedbackCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/feedbackCreate.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->feedbackCreate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    \Kronup\Model\PayloadTaskFeedbackCreate $payload_task_feedback_create
): \Kronup\Model\MinuteFeedback
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$payload_task_feedback_create** | [**\Kronup\Model\PayloadTaskFeedbackCreate**](../../Model/PayloadTaskFeedbackCreate) |  

### Return type

[**\Kronup\Model\MinuteFeedback**](../../Model/MinuteFeedback)

### Description

> Create feedback

Add a feedback to task

[🔺 Back to top](#top)

---


## `feedbackDelete()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **feedbackDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/feedbackDelete.php){: .btn .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->feedbackDelete(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 

### Return type

**bool**

### Description

> Delete feedback

Delete a feedback for a task

[🔺 Back to top](#top)

---


## `feedbackReply()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **feedbackReply.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/feedbackReply.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}/reply`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->feedbackReply(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id,
    \Kronup\Model\PayloadTaskFeedbackReply $payload_task_feedback_reply
): \Kronup\Model\MinuteFeedback
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 
 **$payload_task_feedback_reply** | [**\Kronup\Model\PayloadTaskFeedbackReply**](../../Model/PayloadTaskFeedbackReply) |  

### Return type

[**\Kronup\Model\MinuteFeedback**](../../Model/MinuteFeedback)

### Description

> Reply to feedback

Update a reply to a task feedback

[🔺 Back to top](#top)

---


## `feedbackUpdate()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **feedbackUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/feedbackUpdate.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/feedback/{feedbackId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->feedbackUpdate(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    string $feedback_id,
    \Kronup\Model\PayloadTaskFeedbackUpdate $payload_task_feedback_update
): \Kronup\Model\MinuteFeedback
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$task_id** | **string**  | Task ID 
 **$feedback_id** | **string**  | Feedback ID 
 **$payload_task_feedback_update** | [**\Kronup\Model\PayloadTaskFeedbackUpdate**](../../Model/PayloadTaskFeedbackUpdate) |  

### Return type

[**\Kronup\Model\MinuteFeedback**](../../Model/MinuteFeedback)

### Description

> Update feedback

Update a task feedback

[🔺 Back to top](#top)

---


## `list()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **list.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/list.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->list(
    string $team_id,
    string $channel_id,
    string $item_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\TasksList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value Item ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\TasksList**](../../Model/TasksList)

### Description

> List tasks

Get a list of task models

[🔺 Back to top](#top)

---


## `listCandidates()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **listCandidates.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/listCandidates.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}/candidates`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->listCandidates(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id
): \Kronup\Model\TaskCandidatesList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 

### Return type

[**\Kronup\Model\TaskCandidatesList**](../../Model/TaskCandidatesList)

### Description

> List candidates

List potential assignees for this task

[🔺 Back to top](#top)

---


## `read()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **read.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/read.php){: .btn .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->read(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id
): \Kronup\Model\TaskExpanded
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 

### Return type

[**\Kronup\Model\TaskExpanded**](../../Model/TaskExpanded)

### Description

> Fetch task

Retrieve task model

[🔺 Back to top](#top)

---


## `update()`


### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **update.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/TasksApi/update.php){: .btn .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}/items/{itemId}/tasks/{taskId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->tasks()->update(
    string $team_id,
    string $channel_id,
    string $item_id,
    string $task_id,
    \Kronup\Model\PayloadTaskUpdate $payload_task_update
): \Kronup\Model\Task
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$item_id** | **string**  | Value item ID 
 **$task_id** | **string**  | Task ID 
 **$payload_task_update** | [**\Kronup\Model\PayloadTaskUpdate**](../../Model/PayloadTaskUpdate) |  

### Return type

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Update task

Update task details

[🔺 Back to top](#top)

---
