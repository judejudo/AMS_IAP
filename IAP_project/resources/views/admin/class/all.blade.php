<x-app-layout>
@include('admin.partials._sidebar')

<div class="wrapper" id="wrapper">
    <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
    <table>
        <tr>
            <th>Lecturer</th>
            <th>Unit</th>
            <th>Course</th>
            <th>Semester</th>
            <th></th>
        </tr>
        @foreach ($units as $unit)
        <tr class="p-2">
            <td class="p-2">{{ $unit->lecturer_name }}</td>
            <td class="p-2">{{ $unit->unit_name }}</td>
            <td class="p-2">{{ $unit->course }}</td>
            <td class="p-2">{{ $unit->semester }}</td>
            @if ($unit->available == '0')
            <td class="p-2">
                <x-danger-button class="bg-fuchsia-600 w-50 h-12"> Make Unavailable</x-danger-button>
            </td>
            @else
            <td class="p-2">
                <x-primary-button> Make Available</x-primary-button>
            </td>                               
            @endif


        </tr>
        @endforeach
    </table>
</x-card>
</div>

</x-app-layout>