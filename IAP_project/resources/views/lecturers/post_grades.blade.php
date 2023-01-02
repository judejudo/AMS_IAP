<x-app-layout>
   

    <div class="wrapper" id="wrapper">
        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
        <table>
        <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>grades</th>
                    <th></th>
                </tr>
                @foreach ($students as $student)
                    <tr class="p-2">
                        <td class="p-2">{{ $student->student_id }}</td>
                        @php
                        $studente = $student->student_id
                        @endphp
                       
                        <td class="p-2">{{ $student->student_name }}</td>
                        <form action="/post_student_grades" method="post">
                            @csrf
                            
                            <input type="hidden" name="student_id"value={{$studente}}>
                        
                        <td class="p-2"> 
                            
                            <x-input-label for="grade" :value="__('grade')" />
                            <input name="gradevalue"></textarea>
                        
                  </td>
                   
                        
                

                       
                        
                        

                    </tr>
                @endforeach
                
            </table>
            <x-primary-button class="bg-fuchsia-600 w-50 h-12"> Post grades</x-primary-button>
            <x-danger-button class="bg-fuchsia-600 w-50 h-12"> Edit grades</x-danger-button>
        </x-card>
    </div>

</x-app-layout>