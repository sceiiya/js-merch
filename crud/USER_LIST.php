<?php 
    session_start();

        if(!isset($_SESSION['username'])){
          header('Location: http://localhost/crud/index.php');
        }else{
            $sUsername = $_SESSION['username'];
        }


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJS User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/css/bootstrap.min.css"> -->
</head>
<body>
<!-- // -----------------logged and logout session -->
    <div style="width:100%; display:flex; flex-direction:column; font-size: 20px;">
      <div>Welcome, <strong><?php echo "$sUsername" ?></strong>!</div>
      <button id="logout" style="width: 100px; margin-top: 10px;" onclick=<?php session_destroy() ?>>Log out</button>
      </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="container py-5 h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-12 col-xl-12" id="div-data">
                    
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">EDIT</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <input id="indexer" style="display: none;">
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
                            <input type="email" id="userName" name="userName" class="form-control form-control-lg" />
                            <label class="form-label" for="userName">Username</label>
                          </div>

                          </div>
                          
                          <div class="col-md-6 mb-4 pb-2">

                            <div class="form-outline">
                              <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg" />
                              <label class="form-label" for="emailAddress">Email</label>
                            </div>

                          </div>

                        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div class="">
                          <!-- <input class="btn btn-primary btn-lg" type="submit" value="Register" /> -->
                          <button class="btn btn-primary" id="edit">Modify</button>
                        </div>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

    <!-- <button id="btnTest">Test</button> -->
</body>
</html>
<script>document.getElementById('logout').addEventListener('click', function() {
    window.location = "http://localhost/crud/index.php";
})</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/js/fetch.js"></script>


