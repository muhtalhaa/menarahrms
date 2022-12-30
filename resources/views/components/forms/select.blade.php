<div class="mt-1">
    <select
        {{ $attributes->merge(['class' => 'shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md dark:bg-dark-secondary dark:border-dark-tersier dark:text-white dark:placeholder:text-gray-400', 'name' => $name, 'id' => $id]) }}>
        {{ $slot }}
    </select>
</div>
