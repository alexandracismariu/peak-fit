@extends('layouts.app')

@section('content')
    @include('partials.header', [
        'title' => 'Show details',
        'route' => 'schedules.create'
    ])

    <div class="bg-gray-100 bg-opacity-50 h-screen">
        <div class="mx-auto container max-w-2xl md:w-3/4 rounded-md shadow-md">

            <div class="p-4 bg-green-200 border-t-2 bg-opacity-20 border-green-400 rounded-t">
                <div class="max-w-sm mx-auto md:w-full md:mx-0">
                    <div class="inline-flex items-center space-x-4">
                        <img src="/img/alexandra-cis.png" alt="User avatar" class="w-10 h-10 object-cover rounded-full"/>

                        <h1 class="text-gray-600">{{ $schedule->user->name }}</h1>
                    </div>
                </div>
            </div>

            <div class="bg-white space-y-4 divide-y-2 divide-green-200">
                <div class="md:inline-flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">Schedule</h2>

                    <div class="grid grid-cols-2 gap-10 md:w-2/3 mx-auto max-w-sm">
                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Weekday</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>

                                <span class="font-medium">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $schedule->date)->format('l') }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Logging at</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>

                                <span class="font-medium">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $schedule->date)->format('d-m-Y') }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Start at</label>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>

                                <span class="font-medium">{{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->start)->format('H:i') }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">End at</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M7 16l-4-4m0 0l4-4m-4 4h18" /></svg>

                                <span class="font-medium">{{ $schedule->stop ? \Carbon\Carbon::createFromFormat('H:i:s', $schedule->stop)->format('H:i') : '--:--' }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Total hours</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" /></svg>

                                <span class="font-medium">{{ $schedule->time->format('%H:%I') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:inline-flex items-center w-full space-y-4 md:space-y-0 p-4 text-gray-500">
                    <h2 class="md:w-1/3 max-w-sm mx-auto">On-Demand</h2>

                    <div class="grid grid-cols-2 gap-10 md:w-2/3 mx-auto max-w-sm">
                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Category</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>

                                <span class="font-medium">{{ config('settings.schedule.categories.' . $schedule->category) }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm text-gray-400">Target area</label>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>

                                <span class="font-medium">{{ config('settings.schedule.target_areas.' . $schedule->target_area) }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Intensity</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" /></svg>

                                <span class="font-medium">{{ config('settings.schedule.intensities.' . $schedule->intensity) }}</span>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <p class="text-sm text-gray-400">Equipment</p>

                            <div class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>

                                <span class="font-medium">{{ config('settings.schedule.equipments.' . $schedule->equipment, 'None') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-10 px-6 py-4">
                    <a href="{{ route('schedules.edit', $schedule) }}"
                        class="flex justify-end items-center focus:outline-none space-x-2 text-gray-500
                        hover:text-blue-600 transform hover:scale-110"
                    >
                        <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>

                        <span>Edit account</span>
                    </a>

                    <form action="{{ route('schedules.destroy', $schedule) }}" method="POST">
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
