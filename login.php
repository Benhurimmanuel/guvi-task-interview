<?php include("includes/header.php")?>

    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 mt-5">
                <form method=POST>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="inputPassword">
                    </div>
                    <button type="submit" id="loginbtn" name=Login class="btn btn-primary">Login<i class="fa fa-user"
                            aria-hidden="true"></i></button>
                </form>
                <div class="d-flex justify-content-end mt-2">
                    <span id="registerHelp" class="form-text ">Dont have an account! </span>
                    <a href="register.php" aria-describedby="registerHelp">Register here </a>
                </div>
            </div>
        </div>
    </div>


    <?php include("includes/footer.php")?>

    <script src="./scripts/login.js"></script>
</body>

</html>