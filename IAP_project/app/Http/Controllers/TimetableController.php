<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Services\CalendarService;

class TimetableController extends Controller
{
    public function show_timetable(CalendarService $calendarService)
    {

        $weekDays     = Classes::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays);

        return view('admin.timetable', ['weekDays' => $weekDays, 'calendarData' => $calendarData]);
    }

    public function show_studtimetable(CalendarService $calendarService)
    {

        $weekDays     = Classes::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays);

        return view('student.timetable', ['weekDays' => $weekDays, 'calendarData' => $calendarData]);
    }

    public function show_lectimetable(CalendarService $calendarService)
    {

        $weekDays     = Classes::WEEK_DAYS;
        $calendarData = $calendarService->generateCalendarData($weekDays);

        return view('lecturers.timetable', ['weekDays' => $weekDays, 'calendarData' => $calendarData]);
    }

}
