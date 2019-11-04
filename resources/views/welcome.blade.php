<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Example</title>
<link rel="stylesheet" href="/lara_vue_db/public{{ mix('css/app.css') }}">
</head>
<body>

    <div id="app">
        <example-component></example-component>
    </div>


<script src="/lara_vue_db/public{{ mix('js/app.js') }}"></script> 
</body>
</html>
