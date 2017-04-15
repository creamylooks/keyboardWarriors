<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 12:31 AM
 *
 */
include('header.php');

require_once 'db.php';
?>
<body>
<div class="container">
    <div class="row">
        <div id="" class="col-md-6 col-md-offset-3 wrapper">
            <div class="form-group">
                <label for="start">Course</label>

                <select class="selectpicker form-control" name="course" >
                    <?php
                    $sql = "SELECT * FROM courses ";
                    $result = $link->query($sql);
                    while ($row=$result->fetch_array()){
                        $code=$row['course_Code'];
                        $title=$row['title'];
                        echo'<option value="'.$code.'">'.$title.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div id="" class="col-md-6 col-md-offset-3 wrapper">
                <div class="form-group">
                    <label for="start">Student</label>
                    <select class="selectpicker form-control" name="student[]" multiple="multiple">
                    <?php
                    $sql = "SELECT *FROM student";
                    $result = $link->query($sql);

                        while($row = $result->fetch_assoc()) {
                                        $firstname=$row['Firstname'];
                                        $lastname=$row['Lastname'];
                                        $id=$row['student_ID'];
                            echo'<option value="'.$row["student_ID"].'" >'.$row["Firstname"].' '.$row["Lastname"].'</option>';
                        }
                                ?></select>
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