$( document ).ready( fetch_adClients_all());

function fetch_adClients_all() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_fetch_ClientList.php",
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
                $("#active_clients").html(result);
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