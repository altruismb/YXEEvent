<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>


    <div class="container">
        <div class="card">
            <!-- Image Section (Left side) -->
            <div class="card-image">
                <figure><img src="images/Halloween.jpg" alt="sign in image"></figure>
            </div>
            
            

            <!-- Form Section (Right side) -->
            <div class="card-form">
                <!-- Make "YXEVENTS" a link to index.html -->
                <a href="{{ route('home') }}" class="brand-title">YXE<span class="green">EVENTS</span></a>
                
                <h2 class="form-title">Sign Up</h2>
                <form method="POST" action="{{ route('signup') }}" class="register-form" id="signup-form">
                    @csrf
                    <div class="form-group">
                        <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="first_name" id="first_name" placeholder="First Name"/>
                    </div>
                    <div class="form-group">
                        <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name"/>
                    </div>
                    <div class="form-group">
                        <label for="your_email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="your_email" id="your_email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="your_phone"><i class="zmdi zmdi-phone"></i></label>
                        <input type="text" name="your_phone" id="your_phone" placeholder="Telephone Number"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="confirm_pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Sign Up"/>
                    </div>
                    <a href="{{ route('signin') }}" class="signup-image-link">Already have an account? Sign in</a>
                </form>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
