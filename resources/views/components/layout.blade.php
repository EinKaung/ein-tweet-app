<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやきアプリ</title>
    <link href="./css/app.css" rel="stylesheet">
    <script src="./js/app.js"></script>
    <title>{{ $title ?? 'つぶやきアプリ' }}</title>
</head>
<body class="bg-gray-50">
    {{ $slot }}
</body>