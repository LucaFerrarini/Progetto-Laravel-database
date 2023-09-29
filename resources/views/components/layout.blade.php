<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evangelion</title>
    <link rel="icon" type="image/x-icon" href="../img/eva icon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<x-navbar></x-navbar>

{{$slot}}
 
<script src="https://kit.fontawesome.com/076ab933f6.js" crossorigin="anonymous"></script>
</body>
</html>