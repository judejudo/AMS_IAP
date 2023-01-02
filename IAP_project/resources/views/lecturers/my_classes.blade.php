<x-app-layout>
    @include('lecturers.partials._sidebar')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
            <table>
                <tr>

                    <th>Weekday</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Name</th>
                    <th> </th>


                </tr>
                @foreach ($classes as $class)
                <tr class="p-2">
                    <td class="p-2">{{ $class->weekday }}</td>
                    <td class="p-2">{{ $class->start_time }}</td>
                    <td class="p-2">{{ $class->end_time }}</td>
                    <td class="p-2">{{ $class->name }}</td>
                    <td class="p-2">
                        <form method="POST" action="/create_session/{{$class->id}}">
                            @csrf
                            <x-primary-button> Attendance </x-primary-button>
                        </form>
                    </td>
                    <td class="p-2">
                        <form method="POST" action="/post_grades/{{$class->id}}">
                            @csrf
                            <x-primary-button> post grades </x-primary-button>
                        </form>
                    </td>

                    <td class="p-2">
                        <a href="/addcoursework/{{$class->id}}"><x-primary-button class="bg-fuchsia-600 w-50 h-12">Upload Coursework Materials</x-primary-button> </a>
                    </td>

                </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>