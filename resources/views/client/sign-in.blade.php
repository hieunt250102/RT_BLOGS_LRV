<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Login</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <div class="wrapper-form">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <a href="/">
                    <h1>RT-Blogs</h1>
                </a>
            </div>

            <h2>{{ trans('sign-in.title') }}</h2>
            <form action="">
                <div class="form-group">
                    <label for="email">{{ trans('sign-in.title-field.username-email') }} <span class="req">*</span></label>
                    <input required type="email" id="email" name="email">
                    <div class="feed-back">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label for="password">{{ trans('sign-in.title-field.password') }}<span class="req">*</span></label>
                    <input required type="password" id="password" name="password">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="user-option">
                    <div class="user-option__remmember">
                        <input type="checkbox" name="remmember" id="remmember">
                        <p>{{ trans('sign-in.title-field.remmember') }}</p>
                    </div>
                    <a href="/forgot-password" class="user-option__forgot">
                        {{ trans('sign-in.title-field.forgot') }}
                    </a>
                </div>
                <div class="form-footer">
                    <button>{{ trans('sign-in.btn-submit') }}</button>
                    <a href="/sign-up">{{ trans('sign-in.nav-sign-up') }}</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
