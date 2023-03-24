
document.getElementById("btnReg").addEventListener('click', function() {

    var sFname = document.getElementById("firstName").value;
    var sLname = document.getElementById("lastName").value;
    var sEmail = document.getElementById("emailAddress").value;
    var nNumber = document.getElementById("phoneNumber").value;

    var sJsonData = {
        fname: sFname,
        lname: sLname,
        email: sEmail,
        number: nNumber,
    }

    // const objAjaxData = {
    //     type: 'POST',
    //     url: "controllers/save.php",
    //     data: sJsonData,
    //     success: (result) => {
    //         console.log(result);
    //     }
    // }

    $.ajax({
        type: 'POST',
        url: "controllers/save.php",
        data: sJsonData,
        success: (result) => {
            
                console.log(result);
            
        }
    });

    // $.ajax() // Asynchronous Javascript And XML
    
    // var xhttp = new XMLHttpRequest(); // required 

    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //     // Typical action to be performed when the document is ready:
    //         console.log(this.responseText);
    //     }
    // };
    // xhttp.open("POST", "controllers/save.php", true);
    // xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    // xhttp.send(sJsonData);


});

