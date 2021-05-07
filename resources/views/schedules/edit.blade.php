@extends('layouts.app')

@section('content')
    @include('partials.header', [
        'title' => 'Create schedule',
        'route' => 'schedules.create'
    ])

    <form
        action="{{ route('schedules.update', $schedule) }}"
        method="POST"
        autocomplete="off"
    >
        @csrf
        @method('PUT')

        <div class="mx-auto container max-w-2xl md:w-3/4 my-10 shadow-md rounded-lg">

            <div class="flex justify-start items-center space-x-4 p-4 bg-green-200 border-t-2 bg-opacity-20 border-green-400 rounded-t">
                <img src="/img/alexandra-cis.png" alt="User avatar" class="w-10 h-10 object-cover rounded-full"/>

                <div class="flex flex-col space-y-2 w-1/2">
                    <label class="text-sm text-gray-600" for="user_id">User name</label>
                    <select
                        class="w-full p-2 focus:outline-none focus:text-gray-600 bg-green-200 bg-opacity-50
                        @error('user_id') border border-red-600 @enderror"
                        id="user_id"
                        name="user_id"
                        value="{{ old('user_id') }}"
                    >
                        <option value="">None</option>
                        @foreach ($users as $user)
                        <option
                            value="{{ $user->id }}"
                            {{ $user->id == old('user_id', $schedule->user_id) ? 'selected' : '' }}
                        >
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>

                    @error('user_id')
                        <p class="text-red-600 mt-2">{{ $errors->first('user_id')}}</p>
                    @enderror
                </div>
            </div>

            <div class="bg-white space-y-4 divide-y-2 divide-green-200 rounded-b-lg">
                <div class="md:flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Schedule</h2>

                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Loggin at</label>

                            <div class="w-full inline-flex border @error('date') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                                <input
                                    class="p-2 w-full focus:outline-none focus:text-gray-600 bg-white"
                                        id="date"
                                        type="date"
                                        name="date"
                                        value="{{ old('date', $schedule->date) }}"
                                />
                            </div>
                            @error('date')
                                <p class="text-red-600 mt-2">{{ $errors->first('date')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Start at</label>

                            <div class="w-full inline-flex border @error('start') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                </div>
                                <input
                                    class="p-2 w-full focus:outline-none focus:text-gray-600 bg-white"
                                        id="start"
                                        type="time"
                                        name="start"
                                        value="{{ old('start', \Carbon\Carbon::createFromFormat('H:i:s', $schedule->start)->format('H:i')) }}"
                                />
                            </div>
                            @error('start')
                                <p class="text-red-600 mt-2">{{ $errors->first('start')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">End at</label>

                            <div class="w-full inline-flex border @error('stop') border-red-600 @enderror">

                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M7 16l-4-4m0 0l4-4m-4 4h18" /></svg>
                                </div>
                                <input
                                    class="p-2 w-full focus:outline-none focus:text-gray-600 bg-white"
                                        id="stop"
                                        type="time"
                                        name="stop"
                                        value="{{ old('stop', $schedule->stop ? \Carbon\Carbon::createFromFormat('H:i:s', $schedule->stop)->format('H:i') : '') }}"
                                />
                            </div>
                            @error('stop')
                                <p class="text-red-600 mt-2">{{ $errors->first('stop')}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="md:flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">On Demand</h2>

                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Category</label>

                            <div class="w-full inline-flex border @error('category') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                                </div>
                                <select
                                    class="w-full mr-2 p-2 focus:outline-none focus:text-gray-600 bg-white"
                                    id="category"
                                    name="category"
                                    value="{{ old('category', ) }}"
                                >
                                    <option value="">None</option>
                                    @foreach (collect(config('settings.schedule.categories')) as $key => $value)
                                    <option
                                        value="{{ $key }}"
                                        {{ $key == old('category', $schedule->category) ? 'selected' : '' }}
                                    >
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            @error('category')
                                <p class="text-red-600 mt-2">{{ $errors->first('category')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Target area</label>

                            <div class="w-full inline-flex border @error('target_area') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                                </div>
                                <select
                                    class="w-full mr-2 p-2 focus:outline-none focus:text-gray-600 bg-white"
                                    id="target_area"
                                    name="target_area"
                                    value="{{ old('target_area') }}"
                                >
                                    <option value="">None</option>
                                    @foreach (collect(config('settings.schedule.target_areas')) as $key => $value)
                                    <option
                                        value="{{ $key }}"
                                        {{ $key == old('target_area', $schedule->target_area) ? 'selected' : '' }}
                                    >
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            @error('target_area')
                                <p class="text-red-600 mt-2">{{ $errors->first('target_area')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Intensity</label>

                            <div class="w-full inline-flex border @error('intensity') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" /></svg>
                                </div>
                                <select
                                    class="w-full mr-2 p-2 focus:outline-none focus:text-gray-600 bg-white"
                                    id="intensity"
                                    name="intensity"
                                    value="{{ old('intensity') }}"
                                >
                                    <option value="">None</option>
                                    @foreach (collect(config('settings.schedule.intensities')) as $key => $value)
                                    <option
                                        value="{{ $key }}"
                                        {{ $key == old('intensity', $schedule->intensity) ? 'selected' : '' }}
                                    >
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            @error('intensity')
                                <p class="text-red-600 mt-2">{{ $errors->first('intensity')}}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Equipment</label>

                            <div class="w-full inline-flex border @error('equipment') border-red-600 @enderror">
                                <div class="p-2 bg-green-100 bg-opacity-50">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                </div>
                                <select
                                    class="w-full mr-2 p-2 focus:outline-none focus:text-gray-600 bg-white"
                                    id="equipment"
                                    name="equipment"
                                    value="{{ old('equipment') }}"
                                >
                                    <option value="" {{ $schedule->equipment == '' ? 'selected' : '' }}>None</option>
                                    @foreach (collect(config('settings.schedule.equipments')) as $key => $value)
                                    <option
                                        value="{{ $key }}"
                                        {{ $key == old('equipment', $schedule->equipment) ? 'selected' : '' }}
                                    >
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            @error('equipment')
                                <p class="text-red-600 mt-2">{{ $errors->first('equipment')}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <button class="flex justify-center items-center space-x-1 py-2 px-4 w-full text-white bg-green-500 focus:outline-none rounded-md">
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
