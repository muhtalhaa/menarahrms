<x-app-layout title="{{ $title }}">
    <x-navbar>
        <div class="md:flex md:items-center md:justify-between md:space-x-5" x-data="{ isOptionMenuOpen: false }">
            <div class="flex items-start space-x-5">
                <div class="pt-1.5">
                    <h1 id="order-history-heading" class="text-3xl font-bold tracking-tight text-gray-900">
                        {{ $title }}
                    </h1>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ __('List of all employees include their name, email, role and status.') }}
                    </p>
                </div>
            </div>
            <div
                class="justify-stretch mt-6 flex flex-col-reverse space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-y-0 sm:space-x-3 sm:space-x-reverse md:mt-0 md:flex-row md:space-x-3">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none">
                    {{ __('Filter') }}
                </button>
                <button type="button" x-on:click="location.href='{{ route('employees.create') }}'"
                    class="inline-flex items-center justify-center rounded-md border border-primary bg-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-secondary focus:outline-none">
                    {{ __('Create') }}
                </button>
            </div>
        </div>

        <div class="my-6 overflow-hidden bg-white shadow sm:rounded-md -mx-4 md:-mx-6 lg:-mx-0">
            <ul role="list" class="divide-y divide-gray-200">
                @foreach ($users as $user)
                    <li>
                        <div class="block hover:bg-gray-50">
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="flex min-w-0 flex-1 items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://ui-avatars.com/api/?name={{ $user->name }}&background=random&bold=true"
                                            alt="avatar">
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-4 md:gap-4">
                                        <div>
                                            <p class="truncate text-sm font-medium text-primary">
                                                <x-anchor href="#">
                                                    {{ $user->name }}
                                                </x-anchor>
                                            </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                @if ($user->email_verified_at)
                                                    <span title="Email Verified">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor"
                                                            class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400">
                                                            <path fill-rule="evenodd"
                                                                d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                @else
                                                    <span title="Unverified Email">
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                            <path
                                                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                                        </svg>
                                                    </span>
                                                @endif
                                                <span class="truncate">
                                                    {{ $user->email }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900 truncate">
                                                    {{ __('Joined at') }}
                                                    <time datetime="{{ $user->joined_at }}">
                                                        {{ \Carbon\Carbon::parse($user->joined_at)->isoFormat('D MMMM YYYY') }}
                                                    </time>
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500 truncate"
                                                    title="Title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400">
                                                        <path fill-rule="evenodd"
                                                            d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                            clip-rule="evenodd" />
                                                        <path
                                                            d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                                                    </svg>
                                                    @if ($user->hub_id)
                                                        {{ $user->position->name . ' at ' . $user->hub->name }}
                                                    @else
                                                        {{ $user->position->name ?? 'Super Admin' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900 truncate">
                                                    {{ __('Last Login at') }}
                                                    <time datetime="{{ $user->last_login_at }}">
                                                        {{ \Carbon\Carbon::parse($user->last_login_at)->isoFormat('D MMM YY, HH:mm:ss') }}
                                                    </time>
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500 truncate"
                                                    title="Employee Status">
                                                    @if ($user->status)
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        {{ __('Active Employee') }}
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor"
                                                            class="mr-1.5 h-5 w-5 flex-shrink-0 text-red-400">
                                                            <path fill-rule="evenodd"
                                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        {{ __('Inactive Employee') }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900 truncate">
                                                    {{ __('Inactive at') }}
                                                    @if ($user->inactive_at)
                                                        <time datetime="{{ $user->inactive_at }}">
                                                            {{ \Carbon\Carbon::parse($user->inactive_at)->isoFormat('D MMM YY, HH:mm:ss') }}
                                                        </time>
                                                    @else
                                                        {{ __('-- --- ---, --:--:--') }}
                                                    @endif

                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500 truncate"
                                                    title="Work Day Schema">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor"
                                                        class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400">
                                                        <path
                                                            d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    @if ($user->workday_id)
                                                        {{ $user->workday->name }}
                                                    @else
                                                        {{ __('---') }}
                                                    @endif
                                                    {{ __('Work Day Schema') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <x-anchor href="#" class="text-sm font-medium">
                                        {{ __('Edit') }}
                                    </x-anchor>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            {{ $users->appends(request()->query())->links('pagination::tailwind') }}
        </div>
    </x-navbar>
</x-app-layout>
