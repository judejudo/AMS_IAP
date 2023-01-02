<x-app-layout>


    @include('student.partials._sidebar2')
    <div class="wrapper" id="wrapper">
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-pink overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 ">
                        @if(count($announcements)==0)
                        <x-card class="p-6 text-gray-900 bg-pink-200">
                            No Announcements Yet
                        </x-card>
                        @else
                        @foreach ($announcements as $announcement)
                        <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
                            <h3 class="">To: {{ $announcement->recepient }}</h3>
                            <p class="pb-2">{{ $announcement->message }}</p>

                            
                        </x-card>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</x-app-layout>