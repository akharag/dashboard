@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 min-w-fit bg-white p-6 rounded-lg">
            @auth
                <h1 class="text-base">Welcome, {{ $current_user->first_name }} {{ $current_user->last_name }}</h1>
                @if ($current_user->role === 'user')
                    <h2 class="text-sm">Address</h2>
                    <p class="text-xs">{{ $current_user->address }}</p>
                @else
                    <table class="w-full b-radius-sm border-collapse text-left">
                        <thead class="bg-gray-300">
                            <th class="border-b-2 border-gray-700 p-2">id</th>
                            <th class="border-b-2 border-gray-700 p-2">first name</th>
                            <th class="border-b-2 border-gray-700 p-2">last name</th>
                            <th class="border-b-2 border-gray-700 p-2">email</th>
                            <th class="border-b-2 border-gray-700 p-2">username</th>
                            <th class="border-b-2 border-gray-700 p-2">address</th>
                            <th class="border-b-2 border-gray-700 p-2">role</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b-gray-600">
                                    <td class="border-b border-gray-300 p-2">{{ $user->id }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->first_name }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->last_name }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->email }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->username }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->address }}</td>
                                    <td class="border-b border-gray-300 p-2">{{ $user->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            @endauth
            @guest
                Please login to proceed
            @endguest
        </div>
    </div>
@endsection
