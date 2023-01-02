<x-app-layout>

    <div class="wrapper" id="wrapper">
        <div class="py-12 ">


            <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">

                <form method="POST" action="/process_session">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="date" :value="__('Date')" />
                        <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>



                    <input type="hidden" name="classes_id" value="{{ $classes->id }}">
                    <input type="hidden" name="start_time" value="{{ $classes->start_time }}">
                    <input type="hidden" name="end_time" value="{{ $classes->end_time }}">




                    <x-primary-button class="ml-4 mt-4 bg-fuchsia-600 w-50 h-12">
                        {{ __('Mark Attendance') }}
                    </x-primary-button>
                </form>
            </x-card>



        </div>
    </div>
    </div>

    </div>
</x-app-layout>