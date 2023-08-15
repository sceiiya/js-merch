$( document ).on('load', fetch()

//   () => {

//   $.ajax({
//     type: 'POST',
//     url: "/controllers/admin_listing_fetch.php",
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
    url: "/controllers/admin/admin_listing_fetch.php",
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
    complete: function(){
        var x = document.querySelector('.sppinnermodal');
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
    },
});
}