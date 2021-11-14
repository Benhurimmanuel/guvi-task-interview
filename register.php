<?php include("includes/header.php");?>


    <div class="container">
        <div class="row">
            <div id="formdiv" class="offset-xl-4 offset-md-3 offset-sm-1 col-xl-4 col-md-6 col-sm-11 mt-5">
                <form >
                    <div class=" mb-3">
                        <label for="registerFullName" class="form-label">Full Name</label>
                        <input required type="text" class="form-control" name="registerFullName" id="registerFullName"/>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <input required type="email" class="form-control" name="registerEmail"id="registerEmail" />
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword"name=registerPassword />
                    </div>
                    <button type="submit" class="btn btn-primary" id= "registerbtn" name="Register">Register <i class="fa fa-user-plus"
                            aria-hidden="true"></i></button>
                </form>

                <div class="d-flex justify-content-end mt-2 ">

                    <span id="loginHelp" class="form-text ">Already have an account! </span>
                    <a href="login.php"  aria-describedby="loginHelp">Login Here </a>
                </div>
            </div>
        </div>
    </div>


    <?php include("includes/footer.php")?>
    <script src="./scripts/registration.js"></script>
</body>

</html>