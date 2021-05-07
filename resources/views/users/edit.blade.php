@extends('layouts.app')

@section('content')
    @include('partials.header', [
        'title' => 'Edit user',
        'route' => 'users.create'
    ])

    <form
        action="{{ route('users.update', $user) }}"
        method="POST"
        autocomplete="off"
    >
        @csrf
        @method('PUT')

        <div class="mx-auto container max-w-2xl md:w-3/4 my-10 shadow-md rounded-lg">

            <div class="flex justify-between items-center space-x-4 p-4 bg-green-200 border-t-2 bg-opacity-20 border-green-400 rounded-t">
                <div class="flex items-center space-x-4">
                    <img src="/img/alexandra-cis.png" alt="User avatar" class="w-10 h-10 object-cover rounded-full"/>

                    <div class="flex flex-col space-y-2">
                        <label class="text-sm text-gray-600" for="name">Name</label>
                        <input
                            class="w-80 p-2 focus:outline-none focus:text-gray-600 bg-green-200 bg-opacity-50
                            @error('name') border border-red-600 @enderror"
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                        >
                        @error('name')
                            <p class="text-red-600 mt-2">{{ $errors->first('name')}}</p>
                        @enderror
                    </div>
                </div>

                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button
                        type="submit"
                        class="p-2 text-gray-400 hover:text-red-500 transform hover:scale-110"
                    >
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="bg-white space-y-4 divide-y-2 divide-green-200 rounded-b-lg">
                <div class="md:flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>

                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Email</label>

                            <div class="w-full inline-flex border @error('email') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <input
                                    class="p-2 w-full focus:outline-none focus:text-gray-600 bg-white"
                                        id="email"
                                        type="text"
                                        name="email"
                                        placeholder="email@example.com"
                                        value="{{ old('email', $user->email) }}"
                                />
                            </div>
                            @error('email')
                                <p class="text-red-600 mt-2">{{ $errors->first('email')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Password</label>

                            <div class="w-full inline-flex border @error('password') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" /></svg>
                                </div>
                                <input
                                    class="p-2 w-full focus:outline-none focus:text-gray-600 bg-white"
                                        id="password"
                                        type="password"
                                        name="password"
                                        placeholder="*************"
                                        value="{{ old('password') }}"
                                />
                            </div>
                            @error('password')
                                <p class="text-red-600 mt-2">{{ $errors->first('password')}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="md:flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Personal info</h2>

                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Gender</label>

                            <div class="w-full inline-flex border @error('gender') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                                <select
                                    class="w-full mr-2 p-2 focus:outline-none focus:text-gray-600 bg-white"
                                    id="gender"
                                    name="gender"
                                    value="{{ old('gender', $user->gender) }}"
                                >
                                    <option value="">None</option>
                                    @foreach (collect(config('settings.user.genders')) as $key => $value)
                                    <option
                                        value="{{ $key }}"
                                        {{ $key == old('gender', $user->gender) ? 'selected' : '' }}
                                    >
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            @error('gender')
                                <p class="text-red-600 mt-2">{{ $errors->first('gender')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Age</label>
                            <div class="w-full inline-flex border @error('age') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" /></svg>
                                </div>
                                <input
                                    class="w-full p-2 focus:outline-none focus:text-gray-600 bg-white"
                                        id="age"
                                        type="number"
                                        min=10
                                        name="age"
                                        value="{{ old('age', $user->age) }}"
                                />
                            </div>
                            @error('age')
                                <p class="text-red-600">{{ $errors->first('age')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Height</label>
                            <div class="w-full inline-flex border @error('height') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" /></svg>
                                </div>
                                <input
                                    class="w-full p-2 focus:outline-none focus:text-gray-600 bg-white"
                                        id="height"
                                        type="number"
                                        name="height"
                                        step=".01"
                                        min=0.5
                                        max=2.5
                                        lang="en"
                                        value="{{ old('height', $user->height) }}"
                                />
                            </div>
                            @error('height')
                                <p class="text-red-600 mt-2">{{ $errors->first('height')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Weight</label>
                            <div class="w-full inline-flex border @error('weight') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                                </div>
                                <input
                                    class="w-full p-2 focus:outline-none focus:text-gray-600 bg-white"
                                        id="weight"
                                        type="number"
                                        step=".01"
                                        min=20
                                        max=500
                                        lang="en"
                                        name="weight"
                                        value="{{ old('weight', $user->weight) }}"
                                />
                            </div>
                            @error('weight')
                                <p class="text-red-600 mt-2">{{ $errors->first('weight')}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <button class="flex justify-center items-center space-x-2 py-3 px-4 w-full text-white bg-green-500 focus:outline-none rounded-md">
                        <svg
                            class="w-6 text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fillRule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clipRule="evenodd" />
                        </svg>
                        <span>Edit</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
