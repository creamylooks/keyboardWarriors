
<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 5:26 PM
 */
include('header.php');

require_once 'db.php';
?>
<body>
<div class="container">
    <div class="row">
        <div id="" class="col-md-6 col-md-offset-3 wrapper">
            <?php
            if (isset($_SESSION['filesuccess'])){
                echo $_SESSION['filesuccess'];
                unset($_SESSION['filesuccess']);
            } ?>
            <?php
            if (isset($_SESSION['fileerror'])) {
                echo $_SESSION['fileerror'];
                unset($_SESSION['fileerror']);
            }
            ?>
            <?php
            if (isset($_SESSION['firstname'])){
                echo $_SESSION['firstname'];
                unset($_SESSION['firstname']);
            } ?>
            <?php
            if (isset($_SESSION['lastname'])) {
                echo $_SESSION['lastname'];
                unset($_SESSION['lastname']);
            }
            ?><?php
            if (isset($_SESSION['id'])) {
                echo $_SESSION['id'];
                unset($_SESSION['id']);
            }
            ?>
            <form class=" form-img center-block " action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group center-block">
                    <!--!<input type="file" name="image" id="file" class="inputfile" />-->
                    <label class=" btn btn-default btn-file" for="file" style="width: 100%;">
                        <input type="file" name="image" id="file" style="display: none;"/>
                        Choose an image to upload </label>
                </div>
                <div class="form-group">
                    <label for="start">Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Firstname" required="" autofocus="" />
                </div>
                <div class="form-group">
                    <label for="end">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Lirstname" required="" autofocus="" />
                </div>
                <div class="form-group">
                    <label for="start">Student Id</label>
                    <input type="text" class="form-control" name="id" placeholder="Student Id" required="" autofocus="" />
                </div>


                <button type="submit" name="submit" class="btn btn-default">Create Event</button>
            </form>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('.selectpicker').selectpicker();
    });
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: 'body',
            todayHighlight: true,
            autoclose: true,
        })
    });
</script>
</body>
</html>