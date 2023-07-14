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

> Assign task to user


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `create()`

> Add a task to value item


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `delete()`

> Delete a task from a value item


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `discoveryCreate()`

> Add a discovery to task


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `discoveryDelete()`

> Delete a task discovery


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `discoveryUpdate()`

> Update a task discovery


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `feedbackCreate()`

> Add a feedback to task


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `feedbackDelete()`

> Delete a feedback for a task


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `feedbackReply()`

> Update a reply to a task feedback


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `feedbackUpdate()`

> Update a task feedback


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `list()`

> Get a list of task models


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `listCandidates()`

> List potential assignees for this task


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `read()`

> Retrieve task model


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---


## `update()`

> Update task details


{: .new-title }
> #️⃣ Execute example in terminal 
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

[🔺 Back to top](#top)

---
