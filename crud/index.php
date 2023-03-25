<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="login-section">

        <div class="formbox login">
            <form action="">
                <h2>Log In</h2>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-user'></i>
                    </span>
                    <input type="text" id='lusername' required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-lock-alt'></i>
                    </span>
                    <input type="password" id='lpassword' required>
                    <label for="">Password</label>
                </div>
                <!-- <div class="remember-password">
                    <label for=""><input type="checkbox" name="" id="">Remember Me</label>
                    <a href="#">Forget Password</a>
                </div> -->
                <button class="btnRegLog" id="btn_log_in">Log In</button>
                <div class="signup-now">
                    <p>New to our website? <a href="#" class="signup-link">Register Now</a></p>
                </div>
            </form>
        </div>

        <div class="formbox signup">
            <form action="">
                <h2>Sign Up</h2>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-user-minus'></i>
                    </span>
                    <input type="text" id="first_name" required>
                    <label for="">First Name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-user-detail'></i>
                    </span>
                    <input type="text" id="last_name" required>
                    <label for="">Last Name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-envelope'></i>
                    </span>
                    <input type="email" id="email" required>
                    <label for="">Email Address</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-user'></i>
                    </span>
                    <input type="text" id="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class='bx bxs-lock-alt'></i>
                    </span>
                    <input type="password" id="password" required>
                    <label for="">Password</label>
                </div>
                
                <button class="btnRegLog" id="btnRegister">Register</button>
                <div class="login-now">
                    <p>Already have an Account?<a href="#" class="login-link">Log In</a></p>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/script.js"></script>