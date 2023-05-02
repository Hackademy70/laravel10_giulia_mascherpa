<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    
    <x-navbar />

    {{$slot}}

    <x-footer />
    @livewireScripts
</body>
<script src="https://kit.fontawesome.com/f3ae5028b8.js" crossorigin="anonymous"></script>
</html>