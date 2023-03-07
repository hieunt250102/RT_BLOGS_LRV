<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Forgot password</title>
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

            <h2>{{ __('title.title.forgot') }}</h2>
            <form action="">
                <div class="form-group">
                    <label for="email">{{ __('title-field.email') }} <span class="req">*</span></label>
                    <input required type="email" id="email" name="email">
                    <div class="feed-back">Error: password cannot be null</div>
                </div>
                <div class="form-footer">
                    <button>{{ __('button.btn.submit_forgot') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
