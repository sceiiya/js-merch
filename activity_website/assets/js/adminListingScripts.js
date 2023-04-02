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
  var iImage = $("#pImage").val();

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
      url: "/activity_website/controllers/admin_list_product.php",
      data: sJsonProduct,
      success: (result) => {
          if( result == "Product Listed!") {

            // var dCode = $("#pCode").html('');
            // var dName = $("#pName").html('');
            // var dPrice = $("#pPrice").html('');
            // var dQty = $("#pQty").html('');
            // var dDescription = $("#pDescription").html('');
            // var dImage = $("#pImage").html('');

            // var dCode = ' ';
            // var dName = ' ';
            // var dPrice = ' ';
            // var dQty = ' ';
            // var dDescription = ' ';
            // var dImage = ' ';

            // $('#pCode').attr('value') = '';
            // $('#pName').attr('value') = '';
            // $('#pPrice').attr('value') = '';
            // $('#pQty').attr('value') = '';
            // $('#pDescription').attr('value') = '';
            // $('#pImage').attr('value') = '';
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

function fetch() {
  function adminspinshow(){
    $('.sppinnermodal').modal('show');
  }
  function adminspinhide(){
    $('.sppinnermodal').modal('show');
  }
$.ajax({
    type: 'POST',
    url: "/activity_website/controllers/admin_listing_fetch.php",
    beforeSend: adminspinshow(),
    success: (result) => {
        if (result == "error") {
            alert("Please call system admnistrator");
        } else {
            $("#admin_listedProducts").html(result);
        }
    },
    complete: adminspinhide(),
});
}