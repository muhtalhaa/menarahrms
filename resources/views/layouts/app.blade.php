<!DOCTYPE html>
<html lang="en" class="h-full" x-data="{ darkMode: localStorage.getItem('dark-theme') === 'true' }" x-init="$watch('darkMode', value => localStorage.setItem('dark-theme', value))" x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Employee Dev">
    <meta property="og:url" content="http://127.0.0.1:8000">
    <meta property="og:description" content="Employee Dev">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    {{ $header }}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>
        @isset($title)
            {{ $title }} -
        @endisset
        {{ config('app.name') }}
    </title>
</head>

<body class="font-sans antialiased h-full bg-white dark:bg-gray-900 scrollbar" x-data="{ isNotificationShow: false }" x-cloak>
    {{ $slot }}

    <x-notification message="{{ session('status') }}" />

    {{ $footer }}
</body>

</html>
