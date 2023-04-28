<<<<<<< HEAD
<nav x-data="{ open: false }" class="bg-white dark:bg-black-800 border-b border-black-100 dark:border-black-700">
=======
<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
>>>>>>> NguyenDu
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
<<<<<<< HEAD
                    <a href="http://127.0.0.1:8000/shop">
                        <x-application-logo class="block h-9 w-auto fill-current text-black-800 dark:text-black-200" />
=======
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
>>>>>>> NguyenDu
                    </a>
                </div>

                <!-- Navigation Links -->
<<<<<<< HEAD
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" >
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="color:black" >
                        {{ __('Contact Us!') }}
                    </x-nav-link>
                </div>
            </div>
            
=======
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

>>>>>>> NguyenDu
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
<<<<<<< HEAD
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black-500 dark:text-black-400 bg-white dark:bg-black-800 hover:text-black-700 dark:hover:text-black-300 focus:outline-none transition ease-in-out duration-150" style="width: 150px">
                            <div>Welcome, {{ Auth::user()->name }}</div>
=======
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
>>>>>>> NguyenDu

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
<<<<<<< HEAD
                            <i class="fa-solid fa-user"></i> Profile
                        </x-dropdown-link>
                        @role('admin')
                        <x-dropdown-link :href="route('products.index')">
                            <i class="fa-brands fa-product-hunt"></i> Product Management
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('category.index')">
                            <i class="fa-solid fa-list"></i> Category Management
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('banners.index')">
                            <i class="fa-solid fa-image"></i> Banner Management
                        </x-dropdown-link>
                        @endrole
=======
                            {{ __('Profile') }}
                        </x-dropdown-link>

>>>>>>> NguyenDu
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
<<<<<<< HEAD
                                <i class="fa-solid fa-right-from-bracket"></i> Log out
=======
                                {{ __('Log Out') }}
>>>>>>> NguyenDu
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
<<<<<<< HEAD
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-black-400 dark:text-black-500 hover:text-black-500 dark:hover:text-black-400 hover:bg-black-100 dark:hover:bg-black-900 focus:outline-none focus:bg-black-100 dark:focus:bg-black-900 focus:text-black-500 dark:focus:text-black-400 transition duration-150 ease-in-out">
=======
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
>>>>>>> NguyenDu
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
<<<<<<< HEAD
        <div class="pt-4 pb-1 border-t border-black-200 dark:border-black-600">
            <div class="px-4">
                <div class="font-medium text-base text-black-800 dark:text-black-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-black-500">{{ Auth::user()->email }}</div>
=======
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
>>>>>>> NguyenDu
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
