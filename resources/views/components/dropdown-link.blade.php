<a {{ $attributes->merge(['class' => 'flex items-center space-x-1 px-4 py-1 leading-5 text-gray-700 hover:text-green-600 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>
   <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
   <p>{{ $slot }}</p>
</a>
