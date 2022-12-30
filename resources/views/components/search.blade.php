<div class="relative z-10" role="dialog" aria-modal="true">
    <div x-show="isSearchPanelShow" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"></div>

    <div x-show="isSearchPanelShow" class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20">
        <div x-show="isSearchPanelShow" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100""
            x-transition:leave-end="opacity-0 scale-95" @click.away="isSearchPanelShow = false"
            class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
            <div class="relative">
                <!-- Heroicon name: mini/magnifying-glass -->
                <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                </svg>
                <input type="text" name="search" id="search"
                    class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm"
                    placeholder="{{ __('Search something...') }}" autocomplete="off" role="combobox"
                    aria-expanded="false" aria-controls="options">
            </div>

            <!-- Results, show/hide based on command palette state. -->
            <ul class="max-h-80 scroll-py-10 scroll-pb-2 space-y-4 overflow-y-auto p-4 pb-2" id="options"
                role="listbox">
                <li>
                    <h2 class="text-xs font-semibold text-gray-900">
                        {{ __('Recent search') }}
                    </h2>
                    <ul class="-mx-4 mt-2 text-sm text-gray-700">
                        <!-- Active: "bg-indigo-600 text-white" -->
                        <li class="group flex cursor-default select-none items-center px-4 py-2" id="option-1"
                            role="option" tabindex="-1">
                            <a href="#" class="w-full flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                                <span class="ml-3 flex-auto truncate">Workflow Inc. / Website Redesign</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
