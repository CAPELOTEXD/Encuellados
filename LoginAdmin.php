<!--header-->
<?php include 'header_admin.php';  ?>
<!--Login-->
<Section class="login">
    <div class="container mt-5">
        <form action="controlador/controlador_catalogo.php" method="POST">
            <div class="form-floating d-flex justify-content-center mt-3  mb-5">
                <img src="images/logo/logo3.png" alt="">
            </div>
            <div class="col-md-12 mb-5 d-flex justify-content-center">
                <h1>Login</h1>
            </div>
            <div class="form-floating  mb-3">
                <input type="email" class="form-control" name="UserLogin" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">User</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="PasswordLogin" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating d-flex justify-content-center mt-3">
                <Button type="submit" name="signin" value="ingresar" class="btn btn-danger">Ingresar</Button>
            </div>
        </form>
    </div>
</Section>
<!--Footer-->
<?php include 'footer_admin.php';  ?>