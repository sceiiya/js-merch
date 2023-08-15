$( document ).ready( fetch_adColleague_all());

function fetch_adColleague_all() {

    $.ajax({
        type: 'POST',
        url: "/controllers/admin/admin_fetch_ColleagueList.php",
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
                $("#colleagueList").html(result);
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