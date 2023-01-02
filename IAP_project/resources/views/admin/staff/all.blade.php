<x-app-layout>
    @include('admin.partials._sidebar')

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
            <table>
            <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Religion</th>
                    <th>Department</th>


                </tr>
                @foreach ($staff as $staf)
                <tr class="p-2">
                    <td class="p-2">{{ $staf->id }}</td>
                    <td class="p-2">{{ $staf->name }}</td>
                    <td class="p-2">{{ $staf->email }}</td>
                    <td class="p-2">{{ $staf->phone_number }}</td>
                    <td class="p-2">{{ $staf->country }}</td>
                    <td class="p-2">{{ $staf->religion }}</td>
                    <td class="p-2">{{ $staf->department }}</td>
                </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>