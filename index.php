<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 4:17 PM
 *
 */
include('header.php') ;
?>

<body class="body">
<div class = "container">
    <div class="row">
        <?php
        if (isset($_SESSION['Username'])){
            echo $_SESSION['Username'];
            unset($_SESSION['Username']);
        } ?>
        <?php
        if (isset($_SESSION['Password'])){
            echo $_SESSION['Password'];
            unset($_SESSION['Password']);
        } ?>
        <?php
        if (isset($_SESSION['coursefailed'])){
            echo $_SESSION['coursefailed'];
            unset($_SESSION['coursefailed']);
        } ?>
        <div class="wrapper">
            <form action="login.php" method="post" name="Login_Form" class="form-signin">
                <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                <hr class="colorgraph"><br>

                <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
                <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>

                <button class="btn btn-lg btn-primary btn-block"  name="Submit"  type="Submit">Login</button>
            </form>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.js"></script>
</body>
</html>
