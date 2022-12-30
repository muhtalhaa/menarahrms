<x-app-layout title="{{ $title }}">
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </x-slot>

    <x-navbar>
        <div class="md:flex md:items-center md:justify-between" x-data="{ isOptionMenuOpen: false }">
            <div class="min-w-0 flex-1">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                    {{ $title }}
                </h2>
            </div>
        </div>

        <div class="my-6 overflow-hidden bg-white">
            <x-alert />

            <form action="{{ route('employees.store') }}" method="post" class="space-y-8" x-data="{ loading: false }"
                x-on:submit="loading = true">
                @csrf
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div class="space-y-6 sm:space-y-5">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                {{ __('Job Information') }}
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ __('This information will be displayed publicly so be careful what you share.') }}
                            </p>
                        </div>

                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="position_id" class="sm:mt-px sm:pt-2">
                                    {{ __('Position') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-select name="position_id" id="position_id">
                                        <option></option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="hub_id" class="sm:mt-px sm:pt-2">
                                    {{ __('Hub') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-select name="hub_id" id="hub_id">
                                        <option></option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="division_id" class="sm:mt-px sm:pt-2">
                                    {{ __('Division') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-select name="division_id" id="division_id">
                                        <option></option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="salary_id" class="sm:mt-px sm:pt-2">
                                    {{ __('Salary') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-select name="salary_id" id="salary_id">
                                        <option></option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="workday_id" class="sm:mt-px sm:pt-2">
                                    {{ __('Work Day') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-select name="workday_id" id="workday_id">
                                        <option></option>
                                    </x-form-select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                {{ __('Personal Information') }}
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ __('This information will be displayed publicly so be careful what you share.') }}
                            </p>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="name" class="sm:mt-px sm:pt-2">
                                    {{ __('Full Name') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-input type="text" name="name" id="name"
                                        value="{{ old('name') }}" autocomplete="off" required />
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="nik" class="sm:mt-px sm:pt-2">
                                    {{ __('ID Number/NIK') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-input type="number" name="nik" id="nik"
                                        value="{{ old('nik') }}" inputmode="numeric" required />
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="email" class="sm:mt-px sm:pt-2">
                                    {{ __('Email Address') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-input type="email" name="email" id="email"
                                        value="{{ old('email') }}" autocomplete="off" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                                {{ __('Other Information') }}
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                {{ __('This information will be displayed publicly so be careful what you share.') }}
                            </p>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="joined_at" class="sm:mt-px sm:pt-2">
                                    {{ __('Joined at') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-input type="date" name="joined_at" id="joined_at"
                                        value="{{ old('joined_at') }}" required />
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <x-form-label for="inactive_at" class="sm:mt-px sm:pt-2">
                                    {{ __('Inactive at') }}
                                </x-form-label>
                                <div class="col-span-2 lg:col-span-1">
                                    <x-form-input type="date" name="inactive_at" id="inactive_at"
                                        value="{{ old('inactive_at') }}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div class="flex justify-end space-x-3">
                        <x-button type="button" x-on:click="location.href='{{ url()->previous() }}'"
                            class="text-sm button-secondary">
                            {{ __('Cancel') }}
                        </x-button>
                        <x-button type="submit" class="text-sm button-primary" disabled="loading">
                            <span x-text="loading ? '{{ __('Processing...') }}' : '{{ __('Save') }}'"><span>
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </x-navbar>

    <x-slot name="footer">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).on('select2:open', () => {
                    document.querySelector('.select2-search__field').focus();
                });

                const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.post("{{ route('api.positions') }}", {
                    _token: CSRF_TOKEN,
                    position: "{{ old('position_id') }}",
                }, function(response) {
                    $('#position_id').select2({
                        data: response,
                        placeholder: "-- Select position --",
                    });
                });

                $.post("{{ route('api.hubs') }}", {
                    _token: CSRF_TOKEN,
                    hub: "{{ old('hub_id') }}",
                }, function(response) {
                    $('#hub_id').select2({
                        data: response,
                        placeholder: "-- Select hub --",
                    });
                });

                $.post("{{ route('api.divisions') }}", {
                    _token: CSRF_TOKEN,
                    division: "{{ old('division_id') }}",
                }, function(response) {
                    $('#division_id').select2({
                        data: response,
                        placeholder: "-- Select division --",
                    });
                });

                $.post("{{ route('api.salaries') }}", {
                    _token: CSRF_TOKEN,
                    salary: "{{ old('salary_id') }}",
                }, function(response) {
                    $('#salary_id').select2({
                        data: response,
                        placeholder: "-- Select salary --",
                    });
                });

                $.post("{{ route('api.workdays') }}", {
                    _token: CSRF_TOKEN,
                    workday: "{{ old('workday_id') }}",
                }, function(response) {
                    $('#workday_id').select2({
                        data: response,
                        placeholder: "-- Select work day --",
                    });
                });
            });
        </script>
    </x-slot>
</x-app-layout>
