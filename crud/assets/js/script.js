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