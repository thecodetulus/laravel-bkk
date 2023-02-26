<?php

if (! function_exists('hitungSelisihHari')) {
    /**
     * Menghitung selisih hari antara dua tanggal.
     *
     * @param  string  $startDate
     * @param  string  $endDate
     * @return int
     */
    function hitungSelisihHari($startDate, $endDate)
    {
        $startDate = \Carbon\Carbon::parse($startDate);
        $endDate = \Carbon\Carbon::parse($endDate);

        return $endDate->diffInDays($startDate);
    }
}