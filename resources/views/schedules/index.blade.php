@extends('layouts.app')

@section('content')
    @include('partials.header', [
        'title' => 'Workout list',
        'route' => 'schedules.create'
    ])

    <div class="w-3/4 mx-auto text-gray-600 bg-white rounded shadow-md max-h-96 overflow-y-auto">

        <div class="grid lg:grid-cols-3 px-10 py-2 text-sm bg-green-200 bg-opacity-50 font-bold leading-normal uppercase border-t-2 border-green-400">
            <p>User name</p>
            <p>Date</p>
            <p class="lg:text-center">Actions</p>
        </div>

        @foreach ($schedules as $schedule)
            <div class="grid lg:grid-cols-3 px-10 py-4 font-semibold border-b border-gray-200 hover:bg-green-200">
                <div class="flex items-center space-x-2 justify-start">
                    <div>
                        <img class="w-6 h-6 rounded-full" src="/img/alexandra-cis.png"/>
                    </div>
                    <span>{{ $schedule->user->name }}</span>
                </div>

                <div class="flex items-center space-x-2">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clipRule="evenodd" /></svg>

                    <span class="font-medium">{{ $schedule->date }}</span>
                </div>

                <div class="flex lg:justify-center space-x-4">
                    <a href="{{ route('schedules.show', $schedule) }}"
                        class="w-4 text-gray-500 hover:text-yellow-500 transform hover:scale-125"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </a>

                    <a  href="{{ route('schedules.edit', $schedule) }}"
                        class="w-4 text-gray-500 hover:text-blue-500 transform hover:scale-125"
                    >
                        <svg class="w-5 h-5"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                    </a>

                    <form action="{{ route('schedules.destroy', $schedule) }}" method="POST">
                        @csrf
                        @method('delete')

                        <button
                            type="submit"
                            class="w-4 text-gray-500 hover:text-red-500 transform hover:scale-125"
                        >
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
