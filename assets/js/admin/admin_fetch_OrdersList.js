$( document ).ready( fetch_adOrderList_all());

function fetch_adOrderList_all() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_fetch_OrdersList.php",
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
                $("#admin_OrderList").html(result);
            }
        },
        complete: function(){
          var x = document.querySelector('.sppinnermodal');
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }    },
    });
    }