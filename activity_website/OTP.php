<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Activity_Website</title>

</head>

<body>

    <div id="login-container">
        <div id="login-wrapper">
            <h5>A One Time Password was sent to your email.
                Please verify here.
            </h5>

            <form class="position-relative">
                <!-- OTP input -->
                <div class="form-outline mb-4">
                    <input type="number" id="OTP" class="form-control" />
                    <label class="form-label" for="form2Example1">Enter OTP</label>
                </div>

            </form>
            <!-- Submit button -->
            <button type="button" id="verifyOTP" class="btn btn-primary btn-block mb-4">Verify</button>

            <div class="text-center">
                <p>Send new OTP? <a href="#!">Resend</a></p>
            </div>
        </div>

    </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/activity_website/assets/js/jquery-3.6.3.min.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>