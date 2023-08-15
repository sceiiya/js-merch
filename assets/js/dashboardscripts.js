$('#rpt_csvProd').on('click', () => {
    var adUname = $("#access_identity").val();
    var adEmail = $("#access_email").val();
  
  var sJsondata = {
        username: adUname,
        email: adEmail,
    };
  
    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_csv_products.php",
        data: sJsondata,
        success: (result) => {
            if( result == "sent") {
              console.log(result);
                alert("Report attachment sen, Please check your email!");
            }else {
                console.log(result);
            }  
        }
    });
});  

$('#rpt_csvSales').on('click', () => {
    var adUname = $("#access_identity").val();
    var adEmail = $("#access_email").val();
  
  var sJsondata = {
        username: adUname,
        email: adEmail,
    };
  
    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_csv_sales.php",
        data: sJsondata,
        success: (result) => {
            if( result == "sent") {
              console.log(result);
                alert("Report attachment sen, Please check your email!");
            }else {
                console.log(result);
            }  
        }
    });
});  

$('#rpt_csvUsers').on('click', () => {
    var adUname = $("#access_identity").val();
    var adEmail = $("#access_email").val();
  
  var sJsondata = {
        username: adUname,
        email: adEmail,
    };
  
    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_csv_users.php",
        data: sJsondata,
        success: (result) => {
            if( result == "sent") {
              console.log(result);
                alert("Report attachment sen, Please check your email!");
            }else {
                console.log(result);
            }  
        }
    });
});  