<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'つぶやきアプリ' }}</title>
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50">
    {{ $slot }}
</body>
