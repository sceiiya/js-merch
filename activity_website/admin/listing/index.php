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


<div class="modal" id="addtoListModal">
  <div class="modal-dialog">
    <div class="modal-content bg-transparent border-0">

      <div class="add-list-cont">

        <h3 class="txtc mb-4">List Product</h3>

                <!-- Product Code -->
        <div class="form-outline mb-1">
          <label for="">Product Code</label>
          <input type="text" id="pCode" class="form-control"/>
        </div>

        <!-- Product Name -->
        <div class="form-outline mb-1">
          <label for="">Product Name</label>
          <input type="text" id="pName" class="form-control"/>
        </div>

                <!-- Product Price -->
        <div class="form-outline mb-1">
          <label for="">Product Price</label>
          <input type="number" id="pPrice" class="form-control"/>
        </div>

       <!-- Product Quantity -->
        <div class="form-outline mb-1">
          <label for="">Product Quantity</label>
          <input type="number" id="pQty" class="form-control"/>
        </div>

        <!-- Product Description -->
        <div class="form-outline mb-1">
          <label for="">Product Description</label>
          <textarea type="text" id="pDescription" rows="10" cols="50" class="form-control pDescription"></textarea>
        </div>

        <!-- Product Price -->
        <div class="form-outline mb-1">
          <label for="">Product Image</label>
          <input type="file" id="pImage" class="form-control" accept="image/*"/>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-1">

        </div>

        <!-- Submit button -->
        <button type="button" id="ListProduct" class="btn btn-warning btn-block mb-4"><a
            class="txt-light">Add Product</a></button>

        <!-- Register buttons -->
        <div class="text-center">
        </div>
      </div>

    </div>
  </div>
</div>



<main class="main_adminList">
<button id="addProduct">List Product</button>
<section id="admin_listedProducts">
</section>
</main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/activity_website/assets/js/adminListingScripts.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>

</html>