<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/logcss.css">
    <title>HND Furniture</title>
    <link rel="shortcut icon" href="pictures/logo copy.png" />
 
</head>
<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                
                <form action="index.php" method="POST">
                    <div class="input-field">
                        <input type="text" id="uname" placeholder="Username" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="psswrd" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="check">
                            <label for="check" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot Password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" >
                    </div>
                </form>
                
                <div class="login-singup">
                    <span class="text">Don't have account yet?
                        <a href="#" class="text signup-text">Signup now</a>
                    </span>
                </div>
            </div>

            <div class="form login">
                <span class="title">Registration</span>
                
                <form action="index.php" method="POST">
                    <div class="input-field">
                        <input type="text" id="uname" placeholder="Username" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" id="email" placeholder="Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="psswrd" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="psswrd" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="check">
                            <label for="check" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot Password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" >
                    </div>
                </form>
                
                <div class="login-singup">
                    <span class="text">Don't have account yet?
                        <a href="#" class="text signup-text">Signup now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="js/js_ad.js"></script>
</body>
</html>
