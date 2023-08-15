// $(document).ready(()=>{
// // new posHtml = $("#access_identifier").val();


//     $.post("/activity_website/includes/admin/admin_position.php",
//     {
//       name: "Donald Duck",
//       city: "Duckburg"
//     },
//     (data,status)=>{
//       alert("Data: " + data + "\nStatus: " + status);
//     });

//     $.get("/activity_website/includes/admin/admin_position.php", (data, status)=>{
//         alert("Data: " + data + "\nStatus: " + status);
//         $("#access_identifier").val(data);
//     });


// $.ajax({
//     type: 'POST',
//     url: "/activity_website/includes/admin/admin_position.php",
//     success: (result) => {
//         $("#access_identifier").val(result);
//         // if( result == "Logged in succesfully!") {
//         //     console.log(result);          
//         //     window.location = "/activity_website/admin/dashboard/index.php";
//         // }else if (result == "Incomplete credentials!"){
//         //     console.log(result);          
//         //     alert("Please fill up your Admin Credentials to gain access!");
//         // }else if (result == "forbidden access"){
//         //     console.log(result);          
//         //     alert("You do not have permission to gain access to this page");
//         // }else{
//         //     console.log(result);
//         // }
//     }
// });

// });


$("#my_adminLogout").on("click", ()=>{
    console.log("clicked");
    window.location = ("/activity_website/controllers/admin/adminLog_out.php");
    // window.Location = "/activity_website/controllers/admin/adminLog_out.php";
})


$(document).ready(() => {
    $.get("/activity_website/controllers/admin/admin_position.php", (data, status) => {
      if (status === "success") {
        // Parse the response data as JSON
        const responseData = JSON.parse(data);
  
        // Update the values of the input fields
        $("#access_identity").val(responseData.adUname);
        $("#access_identifier").val(responseData.adPosition);
        $("#access_email").val(responseData.adEmail);
      } else {
        console.error("Error: Unable to retrieve data from server.");
      }
    });

var getPosition = $("#access_identifier").val();
    
if (getPosition != "co-founder"){
  var p = document.querySelector('#ADDnewAdmin');
  p.style.display = "none";
}

});
