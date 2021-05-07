<div class="flex justify-center items-center space-x-14 text-sm lg:text-base">
    <div class="flex justify-start space-x-6">
        <img class="w-12 h-12 rounded-full" src="{{ asset('img/favicon.ico') }}">

        <a  href="/"
            class="py-3 uppercase text-gray-600 tracking-wide font-bold no-underline transform
                @if(Route::is('/')) lg:border-b-2 border-green-500
                @else border-transparent lg:hover:text-green-600 lg:hover:scale-125 lg:hover:skew-y-6 @endif
            "
        >
            Home
        </a>
    </div>

    <a href="{{ route('users.index') }}"
        class="py-3 uppercase text-gray-600 tracking-wide font-bold no-underline transform
            @if(Route::is('users*')) lg:border-b-2 border-green-500
            @else border-transparent lg:hover:text-green-600 lg:hover:scale-125 lg:hover:skew-y-6 @endif
        "
    >
        Users
    </a>

    <a href="{{ route('current-week') }}"
        class="py-3 uppercase text-gray-600 tracking-wide font-bold no-underline transform
            @if(Route::is('current-week')) lg:border-b-2 border-green-500
            @else border-transparent lg:hover:text-green-600 lg:hover:scale-125 lg:hover:skew-y-6 @endif
        "
    >
        Current week
    </a>

    <a href="{{ route('schedules.index') }}"
        class="py-3 uppercase text-gray-600 tracking-wide font-bold no-underline transform
            @if(Route::is('schedules*')) lg:border-b-2 border-green-500
            @else border-transparent lg:hover:text-green-600 lg:hover:scale-125 lg:hover:skew-y-6 @endif
        "
    >
        Workout schedules
    </a>

    @include('partials.navigation')
</div>

