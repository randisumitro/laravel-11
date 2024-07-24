<nav class="bg-gray-800" x-data="{ isOpen: false }"
<div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
  <div class="flex items-center justify-between h-16">
    <div class="flex items-center">
      <div class="flex-shrink-0">
        <img class="w-8 h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      </div>
      <div class="hidden md:block">
        <div class="flex items-baseline ml-10 space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "over:text-whitetext-gray-300 hover:bg-gray-700 h" -->
         <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
         <x-nav-link href="posts" :active="request()->is('posts')">Blog</x-nav-link>
         <x-nav-link href="about" :active="request()->is('about')">About</x-nav-link>
         <x-nav-link href="contact" :active="request()->is('contact')">Contact</x-nav-link>




        </div>
      </div>
    </div>
    <div class="hidden md:block">
      <div class="flex items-center ml-4 md:ml-6">


        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" @click="isOpen = !isOpen" class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>


          <div   x-show="isOpen"
          x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95" 
          class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex -mr-2 md:hidden">
      <!-- Mobile menu button -->
      <button type="button" @click="isOpen = !isOpen"
       class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
        <span class="absolute -inset-0.5"></span>
        <span class="sr-only">Open main menu</span>
        <!-- Menu open: "hidden", Menu closed: "block" -->
        <svg  :class="{'hidden': isOpen, 'blok': !isOprn }"
        class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <!-- Menu open: "block", Menu closed: "hidden" -->
        <svg :class="{'blok': isOpen, 'hidden': !isOprn }"
        class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div   x-show="isOpen" class="md:hidden" id="mobile-menu">
  <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="posts" :active="request()->is('posts')">Blog</x-nav-link>
    <x-nav-link href="about" :active="request()->is('about')">About</x-nav-link>
    <x-nav-link href="contact" :active="request()->is('contact')">Contact</x-nav-link>
  </div>
  <div class="pt-4 pb-3 border-t border-gray-700">
    <div class="flex items-center px-5">
      <div class="flex-shrink-0">
        <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      </div>
      <div class="ml-3">
        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
      </div>
     
    </div>
    <div class="px-2 mt-3 space-y-1">
      <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your Profile</a>
      <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</a>
      <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign out</a>
    </div>
  </div>
</div>
</nav>