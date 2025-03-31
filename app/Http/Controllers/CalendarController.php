<?php

namespace App\Http\Controllers;

use App\Services\Calendar\CalendarService;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    private CalendarService $calendarService;

    public function __construct(CalendarService $calendarService)
    {
        $this->calendarService = $calendarService;
    }

    public function index(Request $request)
    {
        $month = (int) $request->query('month', date('m'));
        $year = (int) $request->query('year', date('Y'));

        $navigation = $this->calendarService->getNavigation($month, $year);
        $weeks = $this->calendarService->generateCalendar($month, $year);

        return view('main.calendar.index', [
            'weeks' => $weeks,
            'month' => $month,
            'year' => $year,
            'prevMonth' => $navigation['prevMonth'],
            'prevYear' => $navigation['prevYear'],
            'nextMonth' => $navigation['nextMonth'],
            'nextYear' => $navigation['nextYear'],
        ]);
    }
}
