<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 5:55 PM
 */
include('header.php');

require_once 'db.php';
?>
<body>
<div class="container">
    <div class="row">
        <div id="" class="col-md-6 col-md-offset-3 wrapper">
            <?php
            if (isset($_SESSION['coursefailed'])){
                echo $_SESSION['coursefailed'];
                unset($_SESSION['coursefailed']);
            } ?>
            <?php
            if (isset($_SESSION['date'])){
                echo $_SESSION['date'];
                unset($_SESSION['date']);
            } ?>
            <?php
            if (isset($_SESSION['start'])) {
                echo $_SESSION['start'];
                unset($_SESSION['start']);
            }
                ?>
            <?php
            if (isset($_SESSION['end'])){
                echo $_SESSION['end'];
                unset($_SESSION['end']);
            } ?>
            <?php
            if (isset($_SESSION['course'])) {
                echo $_SESSION['course'];
                unset($_SESSION['course']);
            }
            ?>
            <form id="login" action ="create-event.php" method="post">
                <div class="form-group">
                    <label for="Studentgroup">Date</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <input class="form-control" id="date" required= "required" name="date" placeholder="YYYY/MM/DD" type="date"></input>
                    </div>
                </div>
                <div class="form-group">
                    <label for="start">Start Time</label>
                    <select class="selectpicker form-control" data-live-search="true" name="start" required= "required">
                        <option data-tokens="09:00" value="09:00">09:00</option>
                        <option data-tokens="10:00" value="10:00">10:00</option>
                        <option data-tokens="11:00" value="11:00">11:00</option>
                        <option data-tokens="12:00" value="12:00">12:00</option>
                        <option data-tokens="13:00" value="13:00">13:00</option>
                        <option data-tokens="14:00" value="14:00">14:00</option>
                        <option data-tokens="15:00" value="15:00">15:00</option>
                        <option data-tokens="16:00" value="16:00">16:00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="end">Finish Time</label>
                    <select class="selectpicker form-control" data-live-search="true" name="end" required= "required">
                        <option data-tokens="10:00" value="10:00">10:00</option>
                        <option data-tokens="11:00" value="11:00">11:00</option>
                        <option data-tokens="12:00" value="12:00">12:00</option>
                        <option data-tokens="13:00" value="13:00">13:00</option>
                        <option data-tokens="14:00" value="14:00">14:00</option>
                        <option data-tokens="15:00" value="15:00">15:00</option>
                        <option data-tokens="16:00" value="16:00">16:00</option>
                        <option data-tokens="17:00" value="17:00">17:00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <select class="selectpicker form-control" data-live-search="true" name="course" required= "required">
                        <?php
                        $ans=$link->query("Select * FROM courses");
                        while ($row=$ans->fetch_assoc()) {
                            $code=$row['course_Code'];
                            $title=$row['title'];
                            echo'<option value="'.$code.'">'.$title.'</option>';
                        }
                        ?>
                    </select>
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
            format: 'yyyy/mm/dd',
            container: 'body',
            todayHighlight: true,
            autoclose: true,
        })
    });
</script>
</body>
</html>