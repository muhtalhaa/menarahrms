<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 dark:text-white', 'for' => $for]) }}>
    {{ $slot }}
</label>
