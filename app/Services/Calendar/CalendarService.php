<?php

namespace App\Services\Calendar;

use Carbon\Carbon;

class CalendarService
{
    public function getNavigation(int $month, int $year): array
    {
        return [
            'prevMonth' => $month == 1 ? 12 : $month - 1,
            'prevYear' => $month == 1 ? $year - 1 : $year,
            'nextMonth' => $month == 12 ? 1 : $month + 1,
            'nextYear' => $month == 12 ? $year + 1 : $year,
        ];
    }

    public function generateCalendar(int $month, int $year): array
    {
        $firstDay = Carbon::create($year, $month, 1);
        $lastDay = $firstDay->copy()->endOfMonth();

        $startDate = $firstDay->copy()->startOfWeek(Carbon::MONDAY);
        $endDate = $lastDay->copy()->endOfWeek(Carbon::SUNDAY);

        $dates = [];
        $currentDate = $startDate->copy();

        while ($currentDate <= $endDate) {
            $dates[] = [
                'day' => $currentDate->day,
                'month' => $currentDate->month,
                'year' => $currentDate->year,
                'isCurrentMonth' => $currentDate->month == $month,
            ];
            $currentDate->addDay();
        }

        return array_chunk($dates, 7);
    }
}
