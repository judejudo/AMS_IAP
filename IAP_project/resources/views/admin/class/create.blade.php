<x-app-layout>
    @include('admin.partials._sidebar')
    <div class="wrapper" id="wrapper">
        <div class="py-12 ">
            

                    <x-card class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">

                        <form action=" /create_class" method="POST" class="text-gray-900 bg-fuchsia-300 mt-4 rounded-lg">
                            @csrf
                            <!-- unit -->
                            <div class="mt-6 ml-6">
                                <x-input-label for="name" :value="__('Select the required unit')" />
                                <select name="units_list_id" value="{{ old('units_list_id') }}" class="rounded-lg text-black">
                                    <option value="">--</option>
                                    @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Course -->
                            <div class="mt-6 ml-6">
                                <x-input-label for="course" :value="__('course')" />
                                <x-text-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" class="rounded-lg text-black" required />
                                <x-input-error :messages="$errors->get('course')" class="mt-2" />
                            </div>

                            <!-- semester -->
                            <div class="mt-6 ml-6">
                                <x-input-label for="semester" :value="__('semester')" />
                                <x-text-input id="semester" class="block mt-1 w-full" type="text" name="semester" :value="old('semester')" class="rounded-lg text-black" required />
                                <x-input-error :messages="$errors->get('semester')" class="mt-2" />
                            </div>

                            <x-primary-button class="ml-8 mt-6 bg-fuchsia-600">
                                {{ __('Next') }}
                            </x-primary-button>

                        </form>
                    </x-card>



        </div>
    </div>
    </div>

    </div>
</x-app-layout>