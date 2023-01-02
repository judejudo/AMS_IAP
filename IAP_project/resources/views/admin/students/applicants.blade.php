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
                    <th> </th>
                    <th> </th>
                </tr>
                @foreach ($applicants as $applicant)
                    <tr >
                        <td class="p-2">{{ $applicant->id }}</td>
                        <td class="p-2">{{ $applicant->name }}</td>
                        <td class="p-2">{{ $applicant->email }}</td>
                        <td class="p-2">{{ $applicant->phone_number }}</td>
                        <td class="p-2">{{ $applicant->country }}</td>
                        <td class="p-2">
                            <form method="POST" action="/applicants/{{ $applicant->id }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="user_type" value="student">
                                <input type="hidden" name="status" value=0>
                                
                                <x-primary-button class="bg-fuchsia-600"> Accept </x-primary-button>
                            </form>
                        </td>
                        <td class="p-2">
                            <form method="POST" action="/applicants/{{ $applicant->id }}">
                                @csrf
                                @method('DELETE')
                                <x-danger-button> Decline </x-danger-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>