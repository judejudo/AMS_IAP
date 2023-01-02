<x-app-layout>
    @include('admin.partials._sidebar')
    <div class="wrapper" id="wrapper">
        <div class="py-12 ">


            <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">

                <form action=" /create_classroom" method="POST" class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
                    @csrf
                    <!-- lecturer -->
                    <div>
                        <div class="mt-6 ml-6">
                            <x-input-label for="name" :value="__('Lecturers who belong to the School of the Unit')" />
                            <select name="lecturer_id" value="{{ old('lecturer') }}" class="rounded-lg text-black">
                                <option value="">--</option>
                                @foreach ($lecturers as $lecturer)
                                <option value="{{$lecturer->id}}">{{ $lecturer->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Day of week-->
                        <div class="mt-6 ml-6">
                            <x-input-label for="name" :value="__('Week Day')" />
                            <select name="weekday" value="{{ old('weekday') }}" class="rounded-lg text-black">
                                <option value="">--</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thursday</option>
                                <option value="5">Friday</option>
                                <option value="6">Saturday</option>
                                <option value="7">Sunday</option>
                            </select>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <input type="hidden" name="units_id" value={{$unit_id}}>

                        <!-- semester -->
                        <div class="mt-6 ml-6">
                            <x-input-label for="start_time" :value="__('start_time')" />
                            <x-text-input id="start_time" class="block mt-1 w-full" type="time" name="start_time" :value="old('start_time')" required />
                            <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
                            <x-input-error :messages="$errors->get('semester')" class="mt-2" />
                        </div>

                        <!-- end_time -->
                        <div class="mt-6 ml-6">
                            <x-input-label for="end_time" :value="__('end_time')" />
                            <x-text-input id="end_time" class="block mt-1 w-full" type="time" name="end_time" :value="old('end_time')" required />
                            <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
                        </div>

                        <!-- available -->
                        <div class="mt-4">
                    <input type="radio" name="availabile" value='0'>
                    <label for="availability">Make Class Available</label>
                    <input type="radio" name="availabile" value='1'>
                    <label for="availability">Make Class not Available</label>
                </div>

                        <x-primary-button class="bg-fuchsia-600 w-50 h-12 ml-6 mt-6">
                            {{ __('Next') }}
                        </x-primary-button>

                </form>
            </x-card>



        </div>
    </div>
    </div>

    </div>
</x-app-layout>