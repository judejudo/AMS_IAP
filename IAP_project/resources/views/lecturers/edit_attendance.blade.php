<x-app-layout>

    <div class="wrapper" id="wrapper">
        <div class="py-12 ">


            <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">

            <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    @foreach ($students as $student)
                        <tr class="p-2">
                            <td class="p-2">{{ $student->student_id }}</td>
                            <td class="p-2">{{ $student->student_name }}</td>

                            @if ($student->attendance == 0)
                            <td class="p-2">
                                <a href="/update_absent/{{ $student->id }}"><x-danger-button class="bg-fuchsia-600 w-50 h-12">Mark as Absent </x-danger-button></a> 
                            </td>
                            @else
                            <td>
                                    <a href="/update_present/{{ $student->id }}" class="bg-fuchsia-600 w-50 h-12"><x-primary-button> Mark as Present</x-primary-button></a> 
                            </td>
                            @endif

                        </tr>
                    @endforeach
                </table>
                <a href="/lecturer"><x-primary-button class="bg-fuchsia-600 w-50 h-12"> Finish</x-primary-button></a>
            </x-card>



        </div>
    </div>
    </div>

    </div>
</x-app-layout>