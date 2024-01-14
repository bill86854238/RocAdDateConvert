<?php

namespace RocAdDateConvert;

class RocAdDateConvert
{
    /**
     * 民國日期轉換西元日期
     */
    public static function convertROCToAD($date)
    {
        // 使用正則表達式匹配可能的分隔符號
        if (preg_match('/^(\d+)[-\/](\d+)[-\/](\d+)$/', $date, $matches)) {
            // 從匹配結果中獲取年、月、日
            $year = $matches[1] > 1500 ? $matches[1] : ($matches[1] + 1911);  // 如果輸入的民國年大於1500 則不進行轉換
            $month = $matches[2];
            $day = $matches[3];

            // 檢查日期區間的有效性
            if ($month >= 1 && $month <= 12 && $day >= 1 && $day <= 31) {
                // 格式化西元日期
                $formattedDate = sprintf('%04d-%02d-%02d', $year, $month, $day);

                return $formattedDate;
            } else {
                // 日期範圍不合法
                return false;
            }
        } else {
            // 日期格式不符合預期
            return false;
        }
    }

    /**
     * 西元轉換民國
     */
    public static function convertADToROC($date)
    {
        // 使用正則表達式匹配可能的分隔符號
        if (preg_match('/^(\d+)[-\/](\d+)[-\/](\d+)$/', $date, $matches)) {
            // 從匹配結果中獲取年、月、日
            $year = $matches[1] - 1911;  // 減去1911年，即為民國年
            $month = $matches[2];
            $day = $matches[3];

            // 檢查日期區間的有效性
            if ($year >= 1 && $month >= 1 && $month <= 12 && $day >= 1 && $day <= 31) {
                // 格式化民國日期
                $formattedDate = sprintf('%03d-%02d-%02d', $year, $month, $day);

                return $formattedDate;
            } else {
                // 日期範圍不合法
                return false;
            }
        } else {
            // 日期格式不符合預期
            return false;
        }
    }

}
