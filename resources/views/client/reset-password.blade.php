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
                <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <a href="/">
                    <h1>RT-Blogs</h1>
                </a>
            </div>

            <h2 class="sign-in-title">{{ trans('reset-password.title') }}</h2>
            <form action="">
                <div class="form-group">
                    <label for="password">{{ trans('reset-password.title-field.new') }}<span class="req">*</span></label>
                    <input required type="password" id="password" name="password">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label for="password">{{ trans('reset-password.title-field.confirm') }}<span class="req">*</span></label>
                    <input required type="password" id="password" name="password">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-footer">
                    <button>{{ trans('reset-password.btn-submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
