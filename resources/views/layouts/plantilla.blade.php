<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .active{color: red; }
    </style>
</head>
<body>
    @include('layouts.partials.header')    
    <h1>@yield('content')</h1>
</body>
</html>
