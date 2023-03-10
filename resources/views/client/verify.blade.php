<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Verify email</title>
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
            <form action="{{route('auth.resend.verify')}}" method="POST">
                @csrf
                <input type="hidden" hidden name="email" value="{{$email}}">
                <input type="text" disabled value="{{ (session()->has('message')) ? session()->get('message') : __('title.title.verify_content') }}" />
                <div class="form-footer">
                    <button>{{ __('button.btn.submit_verify') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
