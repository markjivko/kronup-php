---
title: "Models - InvoiceList"
description: ""
parent: Model
layout: page
---

# Invoice List

```php
new \Kronup\Model\InvoiceList();
```

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getPageNumber()** | **int** | Pagination: page number   [default to `1`]
**getPageSize()** | **int** | Pagination: page size   [default to `500`]
**getTotal()** | **int** | Total number of Invoices
**getInvoices()** | [**\Kronup\Model\Invoice[]**](../Invoice) | Invoice Models

