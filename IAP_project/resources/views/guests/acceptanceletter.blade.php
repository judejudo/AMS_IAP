<x-guest-layout>

    <div class="wrapper">


        @foreach ($names as $name)


        
            <p>Congratulations {{ $name->name }},</p><br>
            <p> You are now a student at Academia University. Kindly Use your email address to log in. The password is
                "asdfghjkl". Remember to change your password on the Profile details after logging in.
            </p>
            <br>
            <p>To complete the registration process, kindly login below</p>
        
        <a href="/login" class="underline">Login</a>


        @endforeach
    </div>

</x-guest-layout>