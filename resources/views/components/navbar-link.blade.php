<a
    {{ $attributes->merge(['class' => 'group flex items-center px-2 py-2 text-base sm:text-sm leading-5 font-medium rounded-md', 'href' => $href]) }}>
    {{ $slot }}
</a>
