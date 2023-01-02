<x-app-layout>


    @include('student.partials._sidebar2')
    <div class="wrapper" id="wrapper">
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-pink overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 text-gray-900 ">
                        <form method="POST" action="/process_regGrad">

                            @csrf


                            <div>
                                <input type="hidden" name="status" value=1>
                                <input type="hidden" name="student_id" value="{{auth()->user()->id}}">
                                <x-primary-button> Register For Graduation </x-primary-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</x-app-layout>