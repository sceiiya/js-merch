<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Login | JS Merch</title>

</head>

<body>

    <div id="login-container">
        <div id="login-wrapper">
            <h3>LOGIN</h3>

            <form class="position-relative">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="loginUsername" class="form-control" />
                    <label class="form-label" for="form2Example1">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="loginPassword" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

            </form>
            <!-- Submit button -->
            <button type="button" id="loginClient" class="btn btn-primary btn-block mb-4">Log In</button>

            <div class="text-center">
                <p>No account? <a href="/register.php">Register here</a></p>
            </div>
        </div>

    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/assets/js/jquery-3.6.3.min.js"></script>
<script src="/assets/js/scripts.js"></script>