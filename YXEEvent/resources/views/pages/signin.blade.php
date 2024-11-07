
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In - YXE Events</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>

    <div class="container">
        <div class="card">
            <!-- Image Section (Left side) -->
            <div class="card-image">
                <figure><img src="{{ asset('images/evening.jpg') }}" alt="sign in image"></figure>
            </div>
            
            <!-- Form Section (Right side) -->
            <div class="card-form">
                <!-- Make "YXEVENTS" a link to homepage -->
                <a href="{{ route('home') }}" class="brand-title">YXE<span class="green">EVENTS</span></a>
                
                <h2 class="form-title">Sign In</h2>
                <form method="POST" action="{{ route('signin.post') }}" class="register-form" id="login-form">
                    @csrf <!-- CSRF token for form security -->
                    <div class="form-group">
                        <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="your_email" id="your_email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                    <a href="{{ route('signup') }}" class="signup-image-link">Create an account</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Display success or error messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
