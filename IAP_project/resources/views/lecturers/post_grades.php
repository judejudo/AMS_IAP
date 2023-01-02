<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-l text-gray-800 leading-tight h-4">
                Post grades
            </h2>
        </x-slot>
        @include('lecturers.partials._sidebar')
    
        <div class="main">
            <x-card>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th></th>
                        <th>grades</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr class="p-2">
                            <td class="p-2">{{ $student->student_id }}</td>
                            <td class="p-2">{{ $student->student_name }}</td>
                            <td class="p-2"><input type="text"></td>

                            @if ($student->attendance == 0)
                            <td class="p-2">
                                <a href="/mark_absent/{{ $student->id }}"><x-danger-button>post Grade </x-danger-button></a> 
                            </td>
                            @else
                            <td>
                                    <a href="/mark_present/{{ $student->id }}"><x-primary-button> edit Grade</x-primary-button></a> 
                            </td>
                            @endif

                        </tr>
                    @endforeach
                </table>
                <a href="/lecturer"><x-primary-button> Finish</x-primary-button></a> 

            </x-card>
        </div>    
</x-app-layout>
