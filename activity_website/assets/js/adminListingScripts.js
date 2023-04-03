// ==================== ADMIN isting modal

$('#addProduct').on('click', () => {
  var iCode = $("#pCode").val("");
  var iName = $("#pName").val("");
  var iPrice = $("#pPrice").val("");
  var iQty = $("#pQty").val("");
  var iDescription = $("#pDescription").val("");
  var iImage = $("#pImage").val("");
  $('#addtoListModal').modal('show');

  $("#ListProduct").on('click', () => {
    iCode = $("#pCode").val();
    iName = $("#pName").val();
    iPrice = $("#pPrice").val();
    iQty = $("#pQty").val();
    iDescription = $("#pDescription").val();
    iImage = $("#pImage").val();
  //image still in develoipmeneent
  
    // var sJsonProduct =   new FormData();
    // sJsonProduct.append('code', iCode);
    // sJsonProduct.append('name', iName);
    // sJsonProduct.append('price', iPrice);
    // sJsonProduct.append('qty', iQty);
    // sJsonProduct.append('description', iDescription);
    // sJsonProduct.append('image', iImage);
  
  //   {
  //     code: iCode,
  //     name: iName,
  //     price: iPrice,
  //     qty: iQty,
  //     description: iDescription,
  //     image: iImage,
  // };
  
  var sJsonProduct = {
        code: iCode,
        name: iName,
        price: iPrice,
        qty: iQty,
        description: iDescription,
        image: iImage,
    };
  
    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/admin/admin_list_product.php",
        data: sJsonProduct,
        success: (result) => {
            if( result == "Product Listed!") {
              $('#addtoListModal').modal('hide');
              console.log(result);
              fetch();
                // window.location = "/activity_website/controllers/OTP.php";
            } else if ( result == "Incomplete product description") {
                alert("Please fill out product all details");
            } else if ( result == "Failed Listing!") {
                alert("Failed Listing!");
            }else {
                console.log(result);
            }  
        }
    });
  
  });
  
});



