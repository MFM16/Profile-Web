<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>
<body class="flex flex-col py-3 px-5 md:py-5 md:px-10 lg:py-14 lg:px-32 lg:flex-row lg:gap-3 lg:overflow-clip">
    @yield('content')
</body>
<script src="https://kit.fontawesome.com/acdab83cb6.js" crossorigin="anonymous"></script>
</html>