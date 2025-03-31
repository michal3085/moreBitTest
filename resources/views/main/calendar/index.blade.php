@extends('main._layout')

@section('content')
    <div class="container">
        <h2>Kalendarz {{ $month }}/{{ $year }}</h2>

        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>Pn</th>
                <th>Wt</th>
                <th>Śr</th>
                <th>Cz</th>
                <th>Pt</th>
                <th>Sb</th>
                <th class="text-danger">Nd</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($weeks as $week)
                <tr>
                    @foreach ($week as $index => $day)
                        <td class="{{ $day['isCurrentMonth'] ? '' : 'text-muted' }} {{ $index == 6 ? 'text-danger' : '' }}">
                            {{ $day['day'] }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between">
            <a href="{{ route('calendar.index', ['month' => $prevMonth, 'year' => $prevYear]) }}" class="btn btn-primary">← Poprzedni miesiąc</a>
            <a href="{{ route('calendar.index', ['month' => $nextMonth, 'year' => $nextYear]) }}" class="btn btn-primary">Następny miesiąc →</a>
        </div>
    </div>
@endsection
