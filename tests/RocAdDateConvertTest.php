<?php

use PHPUnit\Framework\TestCase;
use RocAdDateConvert\RocAdDateConvert;

class RocAdDateConvertTest extends TestCase
{
    public function testValidConversion()
    {
        $this->assertEquals('2024-02-29', RocAdDateConvert::convertROCToAD('113-02-29'));
        $this->assertEquals('2000-01-01', RocAdDateConvert::convertROCToAD('89-01-01'));
        $this->assertEquals('2022-05-05', RocAdDateConvert::convertROCToAD('111-5-5'));
    }

    public function testInvalidMonth()
    {
        // 輸入的月份不合法，應該返回 false
        $this->assertFalse(RocAdDateConvert::convertROCToAD('110-13-01'));
    }

    public function testInvalidDay()
    {
        // 輸入的日期不合法，應該返回 false
        $this->assertFalse(RocAdDateConvert::convertROCToAD('110-01-32'));
    }
}
