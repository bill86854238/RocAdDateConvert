<?php

namespace RocAdDateConvert;

class RocAdDateConvert
{
    public static function convertToWesternYear($taiwaneseYear)
    {
        if (!is_numeric($taiwaneseYear) || $taiwaneseYear < 1) {
            throw new \InvalidArgumentException('Invalid Taiwanese year provided.');
        }

        // Convert to Western year (Gregorian)
        return $taiwaneseYear + 1911;
    }
}
