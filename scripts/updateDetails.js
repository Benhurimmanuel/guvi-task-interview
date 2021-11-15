$(function () {


    $('#updatebtn').click(function (e) {
        let fullname = $('#updateFullName').val();
        let dob = new Date($('#updateDob').val()).toLocaleDateString();
        // console.log($('#updateDob').val())
        let age = $('#updateAge').val();
        let contact = $('#updatePhone').val();
        let email = $('#updateEmail').val();
        $.ajax({
            type: "POST",
            url: "./php/updateDetails.php",
            data: { fullname: fullname, dob: dob, email: email, age: age, contact: contact },
            success: (data) => {
                alert(data);
                location.reload();
            },
            error: (data) => { alert("Please try again") }
        });
    })
})