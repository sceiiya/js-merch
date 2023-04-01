<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Product Listing</title>
</head>

<body class="">

<main class="">

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

</main>
<!-- Pills content -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="/activity_website/assets/js/scripts.js"></script>

</html>