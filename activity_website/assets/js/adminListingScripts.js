// ==================== ADMIN isting modal

$('#addProduct').on('click', () => {
  $('#addtoListModal').modal('show');
});

$("#ListProduct").on('click', () => {
  var iCode = $("#pCode").val();
  var iName = $("#pName").val();
  var iPrice = $("#pPrice").val();
  var iQty = $("#pQty").val();
  var iDescription = $("#pDescription").val();
  var iImage = $("#pImage").prop('files')[0];
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
            fetch();
            $('#addtoListModal').modal('hide');
        
            console.log(result);

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

$( document ).ready( fetch()

//   () => {

//   $.ajax({
//     type: 'POST',
//     url: "/activity_website/controllers/admin_listing_fetch.php",
//     success: (result) => {
//         if( result == "Record successfully saved!") {

//         } else if ( result == "Incomplete product description") {
//             alert("Please fill out product all details");
//         } else {
//           $("").innerHTML = result;
//         }  
//     }
// });

// }

);

// function adminspinshow(){
//   $('.sppinnermodal').modal('show');
// }
// function adminspinhide(){
//   $('.sppinnermodal').modal('show');
// }

function fetch() {

$.ajax({
    type: 'POST',
    url: "/activity_website/controllers/admin/admin_listing_fetch.php",
    beforeSend: function (){
      var x = document.querySelector('.sppinnermodal');
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    },
    success: (result) => {
        if (result == "error") {
            alert("Please call system admnistrator");
        } else {
            $("#admin_listedProducts").html(result);
        }
    },
    // complete: function(){
    //   document.querySelector('sppinnermodal').modal('show');
    // },
});
}