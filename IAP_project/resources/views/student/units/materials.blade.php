<x-app-layout>
   

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
            <table>
            <tr>
                    <th>Topic</th>
                    
                    <th>File</th>


                </tr>
                @foreach ($files as $file)
                    <tr >
                        <td class="">{{ $file->topic }}</td>
                        <td class="mr-2"><a href="/storage/{{$file->file}}">Open file</a></td>
                      
                        
                        
                    </tr>
                @endforeach
            </table>
        </x-card>
    </div>

</x-app-layout>