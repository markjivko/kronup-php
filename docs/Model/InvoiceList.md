---
title: Invoice List
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
**getPageNumber()** | **int** | Page number   [default to `1`]
**getPageSize()** | **int** | Page size   [default to `500`]
**getTotal()** | **int** | Total number of Invoices
**getInvoices()** | [**\Kronup\Model\Invoice[]**](../Invoice) | Invoice Models

