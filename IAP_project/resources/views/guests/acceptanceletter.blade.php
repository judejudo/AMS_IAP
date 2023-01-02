<x-guest-layout>

    <div class="wrapper">


        @foreach ($names as $name)
            


                <p>Congratulations {{ $name->name }},</p><br>
                <p> You are now a student at Academia University. Kindly Use your email address to log in. The password is
                    "asdfghjkl". Remember to change your password on the Profile details after logging in.
                </p>
                <br>
                <p class="underline">To complete the registration process Kindly leave the following details</p>
                <form action="/complete_reg/{{ $name->id }}" method="POST">
                    @csrf
                    <!-- religion -->
                    <div>
                        <x-input-label for="religion" :value="__('religion')" />
                        <x-text-input id="religion" class="block mt-1 w-full" type="text" name="religion"
                            :value="old('religion')" required autofocus />
                        <x-input-error :messages="$errors->get('religion')" class="mt-2" />
                    </div>
                    <!-- high_school -->
                    <div>
                        <x-input-label for="high_school" :value="__('high_school')" />
                        <x-text-input id="high_school" class="block mt-1 w-full" type="text" name="high_school"
                            :value="old('high_school')" required autofocus />
                        <x-input-error :messages="$errors->get('high_school')" class="mt-2" />
                    </div>
                    
                    <input type="hidden" name="semester" value=1.1>

                    <x-primary-button class="ml-4 mt-4 bg-fuchsia-600 w-50 h-12">
                        {{ __('Next') }}
                    </x-primary-button>
                </form>

            
        @endforeach
    </div>

</x-guest-layout>
