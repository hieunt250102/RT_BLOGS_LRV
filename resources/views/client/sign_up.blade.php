<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Register</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="wrapper-form">
        <div class="container">
            <div class="logo">
                <a href="{{ route('blogs.index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                <a href="{{ route('blogs.index') }}">
                    <h1>RT-Blogs</h1>
                </a>
            </div>

            <h2 class="sign-in-title">{{ __('title.title.signup') }}</h2>
            <form action="{{ route('auth.sign-up') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('title-field.email') }} <span class="req">*</span></label>
                    <input type="email" id="email" name="email" value="{{old('email') }}">
                    @error('email')
                        <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">{{ __('title-field.name') }} <span class="req">*</span></label>
                    <input type="text" id="email" name="name" value="{{old('name') }}">
                    @error('name')
                        <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('title-field.password') }}<span class="req">*</span></label>
                    <input type="password" id="password" name="password" value="{{old('password') }}">
                    @error('password')
                        <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">{{ __('title-field.confirm') }}<span class="req">*</span></label>
                    <input type="password" id="password" name="password_confirmation">
                    @error('password')
                        <div class="feed-back is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button>{{ __('button.btn.submit_signup') }}</button>
                    <a href="{{ route('auth.sign-in') }}" class="register_link">{{ __('button.btn.nav_signin') }}</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
