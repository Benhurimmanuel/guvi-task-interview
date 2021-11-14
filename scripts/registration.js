
$(function () {
    $('#registerbtn').click(function (e) {
        let fullname = $('#registerFullName').val();
        let email = $('#registerEmail').val();
        let password = $('#registerPassword').val();
        if (fullname === "" || email === "" || password === "") {
            alert("please fill all the fields");
        } else {
            $.ajax({
                type: "POST",
                url: "./php/registrationProcess.php",
                data: { fullname: fullname, email: email, password: password },
                success: (data) => {
                    alert(data);
                    window.location.replace("login.php");
                },
                error: (data) => { alert("check details and try again") }
            });
        }
    })
})
