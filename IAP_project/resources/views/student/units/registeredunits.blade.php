<x-app-layout>
    @include('student.partials._sidebar2')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
            <table>
            <tr>
                    <th>semester</th>
                    <th>course</th>
                    <th>name</th>
                    <th></th>


                </tr>
                @foreach ($units as $unit)
                    <tr >
                        <td class="">{{ $unit->semester }}</td>
                        <td class="">{{ $unit->course }}</td>
                        <td class="">{{ $unit->name }}</td>
                        

                    </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>