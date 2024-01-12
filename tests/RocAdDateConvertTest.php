<?php

use PHPUnit\Framework\TestCase;
use RocAdDateConvert\RocAdDateConvert;

class RocAdDateConvertTest extends TestCase
{
    public function testConvertToWesternYear()
    {
        $this->assertEquals(1980, RocAdDateConvert::convertToWesternYear(69));
        $this->assertEquals(2000, RocAdDateConvert::convertToWesternYear(89));
        $this->assertEquals(2022, RocAdDateConvert::convertToWesternYear(111));
    }

    public function testInvalidInput()
    {
        $this->expectException(InvalidArgumentException::class);
        RocAdDateConvert::convertToWesternYear('invalid');
    }
}
