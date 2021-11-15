$(function () {
    $('#loginbtn').click(function (e) {
        e.preventDefault();
        let email = $('#loginEmail').val();
        let password = $('#loginPassword').val();
        if (email === "" || password === "") {
            alert("please fill all the fields");
        } else {
            $.ajax({
                type: "POST",
                url: "./php/loginProcess.php",
                data: { email: email, password: password },
                success: (data) => {
                    if (data == true) {
                        window.location.replace("homepage.php");
                    } else {
                        alert("emailId and password do not match ")
                    }
                },
                error: (data) => { alert("check details and try again") }
            });
        }
    })
})