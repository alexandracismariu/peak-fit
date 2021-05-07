@extends('layouts.app')

@section('content')
    @include('partials.header', [
        'title' => 'Show details',
        'route' => 'users.create'
    ])

    <div class="bg-gray-100 bg-opacity-50 h-screen">
        <div class="mx-auto container max-w-2xl md:w-3/4 rounded-md shadow-md">

            <div class="p-4 bg-green-200 border-t-2 bg-opacity-20 border-green-400 rounded-t">
                <div class="max-w-sm mx-auto md:w-full md:mx-0">
                    <div class="inline-flex items-center space-x-4">
                        <img src="/img/alexandra-cis.png" alt="User avatar" class="w-10 h-10 object-cover rounded-full"/>

                        <h1 class="text-gray-600">{{ $user->name }}</h1>
                    </div>
                </div>
            </div>

            <div class="bg-white space-y-4 divide-y-2 divide-green-200">

                <div class="md:inline-flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>

                    <div class="md:w-2/3 max-w-sm mx-auto space-y-2">
                        <p class="text-sm text-gray-400">Email</p>

                        <div class="flex items-center space-x-2 ">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>

                            <span class="font-medium">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="md:inline-flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>

                    <div class="grid grid-cols-2 gap-10 md:w-2/3 mx-auto max-w-sm">
                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Gender</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>

                                <span class="font-medium">{{ $user->gender }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Age</label>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" /></svg>

                                <span class="font-medium">{{ $user->age }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Height</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" /></svg>

                                <span class="font-medium">{{ $user->height }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Weight</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>

                                <span class="font-medium">{{ $user->weight }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-10 px-6 py-4">
                    <a href="{{ route('users.edit', $user) }}"
                        class="flex justify-end items-center focus:outline-none space-x-2 text-gray-500
                        hover:text-blue-600 transform hover:scale-110"
                    >
                        <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>

                        <span>Edit account</span>
                    </a>

                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('delete')

                        <button
                            type="submit"
                            class="flex justify-end items-center focus:outline-none space-x-2 text-gray-500
                                hover:text-red-500 transform hover:scale-110"
                        >
                            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>

                            <span>Delete account</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
