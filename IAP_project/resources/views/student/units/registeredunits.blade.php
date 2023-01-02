<x-app-layout>
    @include('student.partials._sidebar2')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-200 mt-4 rounded-lg">
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
                        <td class="p-2"><a href="/view_coursework/{{ $unit->id }}"> <x-primary-button class="bg-fuchsia-600 w-50 h-12>">Coursework</x-primary-button></a> </td>

                    </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>