<div class="mt-1{{ $type == 'password' ? ' relative' : '' }}">
    <input
        {{ $attributes->merge(['class' => 'shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md dark:bg-dark-secondary dark:border-dark-tersier dark:text-white dark:placeholder:text-gray-400', 'type' => $type, 'name' => $name, 'id' => $id, 'x-bind:type' => $bindType]) }}>
    @if ($type == 'password')
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <button type="button"
                x-on:click="{{ $bindType }} = ({{ $bindType }} === 'password') ? 'text' : 'password'"
                class="text-gray-400 bg-white focus:outline-none dark:bg-dark-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-5 sm:w-5"
                    x-bind:class="{{ $bindType }} === 'password' ? 'block' : 'hidden'" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-5 sm:w-5"
                    x-bind:class="{{ $bindType }} === 'text' ? 'block' : 'hidden'" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>
            </button>
        </div>
    @endif
</div>
