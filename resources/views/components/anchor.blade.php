<a {{ $attributes->merge(['class' => 'text-link hover:text-primary hover:underline', 'href' => $href]) }}>
    {{ $slot }}
</a>
