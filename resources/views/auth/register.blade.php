@extends ('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-4 flex justify-between w-full gap-2">
                <div class="w-full">
                    <label for="first_name" class="sr-only">First Name</label>
                    <input type="text" name="first_name" id="first)name" placeholder="First name" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('first_name') border-red-500 @enderror
                    " value="{{ old('frist_name') }}">
    
                    @error('first_name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="last_name" class="sr-only">Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last name" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('last_name') border-red-500 @enderror
                    " value="{{ old('name') }}">
    
                    @error('last_name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="address" class="sr-only">Username</label>
                <input type="text" name="address" id="address" placeholder="Address" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('username') border-red-500 @enderror" value="{{ old('address') }}">

                @error('address')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('password') border-red-500 @enderror" value="">

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('password_confirmation') border-red-500 @enderror" value="">

                @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection