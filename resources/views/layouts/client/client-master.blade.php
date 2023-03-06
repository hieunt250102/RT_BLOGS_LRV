<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | @yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        @include('layouts.client.header')
        <main>
            @yield('content')
        </main>
        @include('layouts.client.footer')
    </div>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
