@props(['active' => false])

<a {{ $attributes }} 
   class="{{ $active ? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }} rounded-md" 
   aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
