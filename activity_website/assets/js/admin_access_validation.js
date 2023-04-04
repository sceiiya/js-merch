$(document).ready(()=>{
new posHtml = $("#access_identifier").val()
});

$.ajax({
    type: 'POST',
    url: "/activity_website/includes/admin/admin_position.php",
    data: sAdminCred,
    success: (result) => {
        if( result == "Logged in succesfully!") {
            console.log(result);          
            window.location = "/activity_website/admin/dashboard/index.php";
        }else if (result == "Incomplete credentials!"){
            console.log(result);          
            alert("Please fill up your Admin Credentials to gain access!");
        }else if (result == "forbidden access"){
            console.log(result);          
            alert("You do not have permission to gain access to this page");
        }else{
            console.log(result);
        }
    }
});
