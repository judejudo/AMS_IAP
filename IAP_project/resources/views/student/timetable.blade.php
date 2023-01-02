<x-app-layout>
    @include('student.partials._sidebar2')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
        <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th width="125">Time</th>
                            @foreach($weekDays as $day)
                                <th>{{ $day }}</th>
                            @endforeach
                        </thead>
                        <tbody>
                            @foreach($calendarData as $time => $days)
                                <tr>
                                    <td>
                                        {{ $time }}
                                    </td>
                                    @foreach($days as $value)
                                        @if (is_array($value))
                                            <td rowspan="{{ $value['rowspan'] }}" class="align-middle text-center" style="background-color:#f0f0f0">
                                                {{ $value['unit_name'] }}<br>
                                                {{ $value['course'] }}<br>
                                                {{ $value['semester'] }}<br>
                                                Lec: {{ $value['lecturer_name'] }}
                                            </td>
                                        @elseif ($value === 1)
                                            <td></td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </x-card>
    </div>

</x-app-layout>