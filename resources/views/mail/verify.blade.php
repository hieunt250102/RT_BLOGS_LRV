<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Email</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="wrapper-form">
        <div class="container">
            <div class="logo">
                <a href="{{route('blogs.index')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <a href="{{route('blogs.index')}}">
                    <h1>RT-Blogs</h1>
                </a>
            </div>
            <h2 style="margin-bottom: 10px;">{{ __('title.title.verify') }}</h2>
            <a href="{{route('auth.verify',['token_verify' => $token_verify, 'time_create' => $time_create])}}">Verify email</a>
        </div>
    </div>
</body>

</html>
