<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo/>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

             <!-- Gender -->
            <div>
                <label class="text-sm text-gray-600">Gender</label>

                <div class="w-full inline-flex border @error('gender') border-red-600 @enderror  rounded-md">
                    <select
                        class="w-full block border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm" required autofocus
                        id="gender"
                        name="gender"
                        value="{{ old('gender') }}"
                    >
                        <option value="">None</option>
                        @foreach (collect(config('settings.user.genders')) as $key => $value)
                        <option
                            value="{{ $key }}"
                            {{ $key == old('gender') ? 'selected' : '' }}
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

            <!-- age -->
            <div>
                <label class="text-sm text-gray-600">Age</label>
                <div class="w-full inline-flex border @error('age') border-red-600 @enderror rounded-md">
                    <input
                        class="w-full block border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm" required autofocus
                            id="age"
                            type="number"
                            min=10
                            name="age"
                            value="{{ old('age') }}"
                    />
                </div>
                @error('age')
                    <p class="text-red-600">{{ $errors->first('age')}}</p>
                @enderror
            </div>

            <!-- Height -->
           <div>
                <label class="text-sm text-gray-600">Height</label>
                <div class="w-full inline-flex border @error('height') border-red-600 @enderror rounded-md">
                    <input
                        class="w-full block border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm" required autofocus
                            id="height"
                            type="number"
                            name="height"
                            step=".01"
                            min=0.5
                            max=2.5
                            lang="en"
                            value="{{ old('height') }}"
                    />
                </div>
                @error('height')
                    <p class="text-red-600 mt-2">{{ $errors->first('height')}}</p>
                @enderror
            </div>

            <!-- Weight -->
           <div>
                <label class="text-sm text-gray-600">Weight</label>
                <div class="w-full inline-flex border @error('weight') border-red-600 @enderror rounded-md">
                    <input
                        class="w-full block border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm" required autofocus
                            id="weight"
                            type="number"
                            step=".01"
                            min=20
                            max=500
                            lang="en"
                            name="weight"
                            value="{{ old('weight') }}"
                    />
                </div>
                @error('weight')
                    <p class="text-red-600 mt-2">{{ $errors->first('weight')}}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end space-x-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
