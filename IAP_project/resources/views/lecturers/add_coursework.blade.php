<x-app-layout>


  
    <div class="wrapper" id="wrapper">
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-fuchsia-300 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 bg-fuchsia-200">
                        <form method="POST" action="/processcoursework" enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="classes_id" value="{{ $classes_id->id }}">


                            <div>
                                <x-input-label for="topic" :value="__('topic')" />
                                <input name="topic" type="text">
                            </div>
                            <div>
                                <x-input-label for="file" :value="__('file')" />
                                <input name="file" type="file">
                            </div>


                            <x-primary-button class="ml-4 mt-4">
                                {{ __('Post') }}
                            </x-primary-button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</x-app-layout>