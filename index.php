<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 4:17 PM
 *
 */
include(header.php);
?>


<div class = "container">
    <div class="wrapper">
        <form action="" method="post" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
            <hr class="colorgraph"><br>

            <input type="text" class="form-control" name="Username ss" placeholder="Username" required="" autofocus="" />
            <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>

            <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.js"></script>
</body>
</html>
