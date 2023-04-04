<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
  <title>List of Users</title>
</head>

<body class="admin_dashboard">
<?php include("../../includes/admin/admin_position.php") ?>

  <div class="modal" id="addtoListModal">
    <div class="modal-dialog">
      <div class="modal-content bg-transparent border-0">

        <div class="add-list-cont">

          <h3 class="txtc mb-4">List Product</h3>

          <!-- Product Code -->
          <div class="form-outline mb-1">
            <label for="">Product Code</label>
            <input type="text" id="pCode" class="form-control" />
          </div>

          <!-- Product Name -->
          <div class="form-outline mb-1">
            <label for="">Product Name</label>
            <input type="text" id="pName" class="form-control" />
          </div>

          <!-- Product Price -->
          <div class="form-outline mb-1">
            <label for="">Product Price</label>
            <input type="number" id="pPrice" class="form-control" />
          </div>

          <!-- Product Quantity -->
          <div class="form-outline mb-1">
            <label for="">Product Quantity</label>
            <input type="number" id="pQty" class="form-control" />
          </div>

          <!-- Product Description -->
          <div class="form-outline mb-1">
            <label for="">Product Description</label>
            <textarea type="text" id="pDescription" rows="10" cols="50" class="form-control pDescription"></textarea>
          </div>

          <!-- Product Price -->
          <div class="form-outline mb-1">
            <label for="">Product Image</label>
            <input type="file" id="pImage" class="form-control" accept="image/*" />
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-1">

          </div>

          <!-- Submit button -->
          <button type="button" id="ListProduct" class="btn btn-warning btn-block mb-4"><a class="txt-light">Add Product</a></button>

          <!-- Register buttons -->
          <div class="text-center">
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="sppinnermodal modal" style="display: none;">
    <div class="containersp">
      <div class="outerringg">
        <div class="innerringg">
        </div>
      </div>
    </div>
  </div>

  <?php include("../../includes/admin/admin_nav.php") ?>

  <main class="main_adminList">
    <button id="addProduct">List Product</button>
    <section id="admin_listedProducts">
    </section>
  </main>

  <div class="modal" id="modifyModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modify</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <input id="indexer" style="display: none;">
          <div class="row">
            <div class="col-md-6 mb-4">

              <div class="form-outline">
                <input type="text" id="productCode" name="productCode" class="form-control form-control-lg" />
                <label class="form-label" for="productCode">Product Code</label>
              </div>

            </div>
            <div class="col-md-6 mb-4">

              <div class="form-outline">
                <input type="text" id="productName" name="productName" class="form-control form-control-lg" />
                <label class="form-label" for="productName">Product Name</label>
              </div>

            </div>
          </div>


          <div class="row">

            <div class="col-md-6 mb-4 pb-2">

              <div class="form-outline">
                <input type="email" id="productPrice" name="productPrice" class="form-control form-control-lg" />
                <label class="form-label" for="productPrice">Product Price</label>
              </div>

            </div>

            <div class="col-md-6 mb-4 pb-2">

              <div class="form-outline">
                <input type="email" id="productQuantity" name="productQuantity" class="form-control form-control-lg" />
                <label class="form-label" for="productQuantity">Product Quantity</label>
              </div>

            </div>

            <!-- Product Description -->
            <div class="form-outline mb-1">
              <label for="">Product Description</label>
              <textarea type="text" id="productDescription" rows="10" cols="50" class="form-control pDescription"></textarea>
            </div>

            <!-- Product Price -->
            <div class="form-outline mb-1">
              <label for="">Replace Image</label>
              <input type="file" id="productPhoto" class="form-control" accept="image/*" />
            </div>

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="">
            <!-- <input class="btn btn-primary btn-lg" type="submit" value="Register" /> -->
            <button class="btn btn-primary" id="Modify">Modify</button>
          </div>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/activity_website/assets/js/adminListingScripts.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="/activity_website/assets/js/admin_navs.js"></script>
<script src="/activity_website/assets/js/admin_access_validation.js"></script>