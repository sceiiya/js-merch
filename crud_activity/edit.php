<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <?php include ("includes/navbar.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Form</h3>

                      <!-- <form action="controllers/save.php" method="POST"> -->

                        <div class="row">
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" />
                              <label class="form-label" for="firstName">First Name</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4">

                            <div class="form-outline">
                              <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" />
                              <label class="form-label" for="lastName">Last Name</label>
                            </div>

                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" />
                              <label class="form-label" for="emailAddress">Email</label>
                            </div>

                          </div>
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg" />
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>

                          </div>
                        </div>


                        <div class="mt-4 pt-2">
                          <!-- <input class="btn btn-primary btn-lg" type="submit" value="Register" /> -->
                          <button class="btn btn-primary btn-lg" id="edit">Edit</button>
                        </div>

                      <!-- </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>

    <!-- <button id="btnTest">Test</button> -->
</body>
</html>

<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/edit.js"></script>