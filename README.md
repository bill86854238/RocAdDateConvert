# RocAdDateConvert

RocAdDateConvert 是一個用於在中華民國（ROC）和西元（AD）之間轉換日期的 PHP 套件。

## 安裝

使用 Composer 安裝此套件：

```bash
composer require linhuan/roc_ad_date_convert
```

## 使用方式

```php
<?php

require 'vendor/autoload.php';

use RocAdDateConvert\RocAdDateConvert;

// 將ROC轉換為AD
$rocDate = '110-01-01';
$adDate = RocAdDateConvert::convertROCToAD($rocDate);
echo "ROC 日期: $rocDate, AD 日期: $adDate\n";

// 將AD轉換為ROC
$adDate = '2024-01-01';
$rocDate = RocAdDateConvert::convertADToROC($adDate);
echo "AD 日期: $adDate, ROC 日期: $rocDate\n";
```

請確保將 `'110-01-01'` 和 `'2024-01-01'` 替換為您要轉換的實際日期。

## 授權

此套件是根據 [MIT 授權](LICENSE) 的開源軟體。
