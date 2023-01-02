<x-app-layout>
    <div class="wrapper">
        <form method="POST" action="/processannounce" class="w-96">
            @csrf


            <div class="mt-6 ml-6">
                <x-input-label for="recepient" :value="__('recepient')" />
                <select name="recepient" value="{{ old('recepient') }}" class="rounded-lg text-black">

                    <option value="all">All</option>
                    <option value="admin">Admins</option>
                    <option value="lecturer">Lecturers</option>
                    <option value="student">Students</option>
                    <option value="staff">Staff</option>

                </select>
                <x-input-error :messages="$errors->get('recepient')" class="mt-2" />
            </div>

            <!-- Announcement -->
            <div class="mt-6 ml-6">
                <x-input-label for="announcement" :value="__('announcement')" />
                <textarea name="message" class="rounded-lg text-black"></textarea>
            </div>

            <x-primary-button class="ml-14 mt-4">
                {{ __('Announce') }}
            </x-primary-button>


        </form>
    </div>
</x-app-layout>