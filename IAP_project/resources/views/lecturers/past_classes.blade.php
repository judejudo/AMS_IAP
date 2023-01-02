<x-app-layout>
    @include('lecturers.partials._sidebar')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
        <table>
                <tr>

                    <th>Date</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Semester</th>
                    <th> </th>


                </tr>
                @foreach ($sessions as $session)
                    <tr class="p-2">
                        <td class="p-2">{{ $session->date }}</td>
                        <td class="p-2">{{ $session->start_time }}</td>
                        <td class="p-2">{{ $session->end_time }}</td>
                        <td class="p-2">{{ $session->name }}</td>
                        <td class="p-2">{{ $session->course }}</td>
                        <td class="p-2">{{ $session->semester }}</td>
                        <td class="p-2">
                            <a href="/edit_attendance/{{$session->session_id}}" class="bg-fuchsia-600 w-50 h-12"><x-primary-button> Edit Attendance </x-primary-button></a>
                        </td>
                       

                    </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>