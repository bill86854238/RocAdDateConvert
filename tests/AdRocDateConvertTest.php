<?php

use PHPUnit\Framework\TestCase;
use RocAdDateConvert\RocAdDateConvert;

class AdRocDateConvertTest extends TestCase
{
    public function testConvertADToROC()
    {

        // 測試正確的轉換
        $this->assertEquals('110-01-01', RocAdDateConvert::convertADToROC('2021-01-01'));

        // 測試邊界值
        $this->assertEquals('110-12-31', RocAdDateConvert::convertADToROC('2021-12-31'));

        // 測試格式不符合預期的情況
        $this->assertFalse(RocAdDateConvert::convertADToROC('2021-13-01'));
        $this->assertFalse(RocAdDateConvert::convertADToROC('2021-01-32'));
    }
}

// 運行測試
// 在你的命令行中執行 PHPUnit 測試，例如：vendor/bin/phpunit AdRocDateConvertTest.php
