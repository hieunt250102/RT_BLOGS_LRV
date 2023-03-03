<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RT Blogs | Register</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
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

            <h2 class="sign-in-title">Sign in</h2>
            <form action="">
                <div class="form-group">
                    <label for="email">User name or email <span class="req">*</span></label>
                    <input required type="email" id="email" name="email">
                    <div class="feed-back">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="req">*</span></label>
                    <input required type="password" id="password" name="password">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-group">
                    <label for="password">Confirm password<span class="req">*</span></label>
                    <input required type="password" id="password" name="password">
                    <div class="feed-back is-invalid">Error: password cannot be null</div>
                </div>
                <div class="form-footer">
                    <button>Sign up</button>
                    <a href="/sign-in" class="register_link">Already have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
