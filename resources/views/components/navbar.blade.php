<div class="min-h-full" x-data="{ isSidebarOpen: false, isDropdownUserOpen: false, isUserMenuOpen: false, isSearchPanelShow: false }">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div x-show="isSidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div x-show="isSidebarOpen" class="fixed inset-0 z-40 flex">
            <div x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                @click.away="isSidebarOpen = false"
                class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4">
                <div x-show="isSidebarOpen" x-transition:enter="ease-in-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" x-on:click="isSidebarOpen = false"
                        class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none">
                        <span class="sr-only">
                            {{ __('Close sidebar') }}
                        </span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-shrink-0 items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="logo">
                </div>
                <div class="mt-5 h-0 flex-1 overflow-y-auto">
                    <nav class="px-2">
                        <div class="space-y-1">
                            <x-navbar-link href="{{ route('dashboard') }}"
                                class="{{ active(['dashboard'], 'active-link', 'inactive-link') }}">
                                <svg class="{{ active(['dashboard'], 'active-icon', 'inactive-icon') }} mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                {{ __('Dashboard') }}
                            </x-navbar-link>

                            <x-navbar-link href="{{ route('employees.index') }}"
                                class="{{ active(['employees', 'employees/*'], 'active-link', 'inactive-link') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ active(['employees', 'employees/*'], 'active-icon', 'inactive-icon') }} mr-3 flex-shrink-0 h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                {{ __('Employees') }}
                            </x-navbar-link>

                            <x-navbar-link href="#" class="inactive-link">
                                <svg class="inactive-icon mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ __('Recent') }}
                            </x-navbar-link>
                        </div>
                        <div class="mt-8">
                            <h3 class="px-3 text-sm font-medium text-gray-500" id="mobile-teams-headline">Teams</h3>
                            <div class="mt-1 space-y-1" role="group" aria-labelledby="mobile-teams-headline">
                                <a href="#"
                                    class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                    <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                                    <span class="truncate">Engineering</span>
                                </a>

                                <a href="#"
                                    class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                    <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full"
                                        aria-hidden="true"></span>
                                    <span class="truncate">Human Resources</span>
                                </a>

                                <a href="#"
                                    class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                    <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full"
                                        aria-hidden="true"></span>
                                    <span class="truncate">Customer Success</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="w-14 flex-shrink-0" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div
        class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col lg:border-r lg:border-gray-200 lg:bg-gray-100 lg:pt-5 lg:pb-4">
        <div class="flex flex-shrink-0 items-center px-6">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                alt="logo">
        </div>
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="mt-5 flex h-0 flex-1 flex-col overflow-y-auto pt-1">
            <!-- User account dropdown -->
            <div class="relative inline-block px-3 text-left">
                <div>
                    <button type="button" x-on:click="isDropdownUserOpen = !isDropdownUserOpen"
                        class="group w-full rounded-md bg-gray-100 px-3.5 py-2 text-left text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none"
                        id="options-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="flex w-full items-center justify-between">
                            <span class="flex min-w-0 items-center justify-between space-x-3">
                                <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                                    src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=random&bold=true"
                                    alt="avatar">
                                <span class="flex min-w-0 flex-1 flex-col">
                                    <span class="truncate text-sm font-medium text-gray-900">
                                        {{ auth()->user()->name }}
                                    </span>
                                    <span class="truncate text-sm text-gray-500">
                                        {{ auth()->user()->email }}
                                    </span>
                                </span>
                            </span>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </div>

                <div x-show="isDropdownUserOpen" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95" @click.away="isDropdownUserOpen = false"
                    class="absolute right-0 left-0 z-10 mx-3 mt-1 origin-top divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="options-menu-item-0">View profile</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="options-menu-item-1">Settings</a>
                    </div>
                    <div class="py-1" role="none">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="options-menu-item-3">Get desktop app</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="options-menu-item-4">Support</a>
                    </div>
                    <div class="py-1" role="none">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <nav class="mt-6 px-3">
                <div class="space-y-1">
                    <x-navbar-link href="{{ route('dashboard') }}"
                        class="{{ active(['dashboard'], 'active-link', 'inactive-link') }}">
                        <svg class="{{ active(['dashboard'], 'active-icon', 'inactive-icon') }} mr-3 flex-shrink-0 h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        {{ __('Dashboard') }}
                    </x-navbar-link>

                    <x-navbar-link href="{{ route('employees.index') }}"
                        class="{{ active(['employees', 'employees/*'], 'active-link', 'inactive-link') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="{{ active(['employees', 'employees/*'], 'active-icon', 'inactive-icon') }} mr-3 flex-shrink-0 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        {{ __('Employees') }}
                    </x-navbar-link>

                    <x-navbar-link href="#" class="inactive-link">
                        <svg class="inactive-icon mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ __('Recent') }}
                    </x-navbar-link>
                </div>
                <div class="mt-8">
                    <!-- Secondary navigation -->
                    <h3 class="px-3 text-sm font-medium text-gray-500" id="desktop-teams-headline">Teams</h3>
                    <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                            <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">Engineering</span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                            <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">Human Resources</span>
                        </a>

                        <a href="#"
                            class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                            <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                            <span class="truncate">Customer Success</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Main column -->
    <div class="flex flex-col lg:pl-64">
        <div
            class="flex h-16 items-center justify-between flex-shrink-0 border-b border-gray-200 bg-white lg:hidden px-4 sm:px-6 lg:px-8">
            <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
            <div class="flex flex-1 items-center lg:hidden">
                <button type="button" x-on:click="isSidebarOpen = !isSidebarOpen"
                    class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                    <span class="sr-only">
                        {{ __('Open menu') }}
                    </span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <button type="button" x-on:click="isSearchPanelShow = !isSearchPanelShow"
                    class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">
                        {{ __('Search') }}
                    </span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>

            <a href="{{ route('dashboard') }}" class="flex">
                <span class="sr-only">
                    {{ env('APP_NAME') }}
                </span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="logo">
            </a>

            <div class="flex flex-1 items-center justify-end">
                <!-- Notification -->
                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">
                        {{ __('Notification') }}
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </a>

                <!-- Account -->
                <div class="ml-4 flow-root">
                    <div class="relative">
                        <div>
                            <button type="button" x-on:click="isUserMenuOpen = !isUserMenuOpen"
                                class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">
                                    {{ __('Open user menu') }}
                                </span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=random&bold=true"
                                    alt="avatar">
                            </button>
                        </div>

                        <div x-show="isUserMenuOpen" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" @click.away="isUserMenuOpen = false"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right divide-y divide-gray-200 rounded-md bg-white shadow-lg focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="user-menu-item-0">View profile</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Settings</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="user-menu-item-3">Get desktop app</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="user-menu-item-4">Support</a>
                            </div>
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="user-menu-item-5">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="flex-1">
            <!-- Page title & actions -->
            <div
                class="border-b border-gray-200 px-4 py-4 lg:flex lg:items-center lg:justify-between sm:px-6 lg:px-8 hidden">
                <div class="min-w-0 flex-1">
                    <span class="sr-only"></span>
                </div>
                <div class="mt-4 flex sm:mt-0 sm:ml-4 space-x-6">
                    <button type="button" x-on:click="isSearchPanelShow = !isSearchPanelShow"
                        class="inline-flex items-center py-2  text-gray-400 hover:text-gray-500 focus:outline-none ml-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button"
                        class="inline-flex items-center py-2  text-gray-400 hover:text-gray-500 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Main -->
            <div class="mt-6 px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <x-search />
</div>
