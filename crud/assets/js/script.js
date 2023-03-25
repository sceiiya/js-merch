const LoginSection = document.querySelector('.login-section')
const LoginLink = document.querySelector('.login-link')
const SignUpLink = document.querySelector('.signup-link')
SignUpLink.addEventListener('click',()=>{
    LoginSection.classList.add('active')
})
LoginLink.addEventListener('click',()=>{
    LoginSection.classList.remove('active')
})

// SAVING REGISTRATION

document.getElementById("btnRegister").addEventListener('click', function() {
    var sFname = document.getElementById("first_name").value;
    var sLname = document.getElementById("last_name").value;
    var sEmail = document.getElementById("email").value;
    var sUsername = document.getElementById("username").value;
    var sPassword = document.getElementById("password").value;

    var sJsonData = {
        fname: sFname,
        lname: sLname,
        email: sEmail,
        username: sUsername,
        password: sPassword,
    }

    $.ajax({
        type: 'POST',
        url: "controllers/save.php",
        data: sJsonData,
        success: (result) => {
                console.log(result); 
        }
    });
});

document.getElementById("btn_log_in").addEventListener('click', function() {
    var sUsername = document.getElementById("lusername").value;
    var sPassword = document.getElementById("lpassword").value;

    var sJsonData = {
        username: sUsername,
        password: sPassword,
    }

    $.ajax({
        type: 'POST',
        url: "controllers/login.php",
        data: sJsonData,
        success: (result) => {
                console.log(result); 
        }
    });
});

// -----------------logout session
$('#logout').on('click', () => {
    window.location = 'logout.php';
});