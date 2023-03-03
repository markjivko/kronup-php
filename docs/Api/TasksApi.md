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
[**taskCreate()**](#taskcreate) | Create task
[**taskDelete()**](#taskdelete) | Delete task
[**taskList()**](#tasklist) | List tasks
[**taskRead()**](#taskread) | Fetch task
[**taskUpdate()**](#taskupdate) | Update task


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
): \Kronup\Model\Task
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

[**\Kronup\Model\Task**](../../Model/Task)

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
): \Kronup\Model\Task
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

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Delete task

Delete a task from a value item

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
): \Kronup\Model\Task
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

[**\Kronup\Model\Task**](../../Model/Task)

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
): \Kronup\Model\Task
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

[**\Kronup\Model\Task**](../../Model/Task)

### Description

> Update task

Update task details

[Back to top](#top){: .btn .btn-purple }

---
