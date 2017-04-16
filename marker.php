<?php


require_once 'db.php';
  $cod = $_POST['studBCode'];

?>
<?php include('header.php');?>
  <body>
  <div class="container">
      <div class="row">
          <?php
          $sq1= "SELECT * FROM student WHERE student_ID = '$cod'";
                $q1=mysqli_query($link, $sq1);
            $rom = mysqli_fetch_assoc($q1);
            ?>

            <table class="table table-striped">
              <thead>
                <th> Student ID</th>
                <th> First Name</th>
                <th> Last Name</th>
              </thead>
              <tbody>
                <td><?php echo $rom['student_ID']; ?></td>
                <td><?php echo $rom['firstname'] ?></td>
                <td><?php echo $rom['lastname'] ?></td>
              <?php
                  if($_POST['studBCode'] !=null){
              while($_POST['studBCode'] !=$cod){
                $sq2= "SELECT * FROM student WHERE student_ID = '{$_POST['studBCode']}'";
                $q2=mysqli_query($link, $sq2);
                $rome = mysqli_fetch_assoc($q2);
                $stu=$rome['student_ID'];
                $fir=$rome['firstname'];
                $las=$rome['lastname'];
                  echo   "<td>".$stu."<td>".
                        "<td>".$fir."<td>".
                        "<td>".$las."<td>";
                $cod = $_POST['studBCode'];
              }
            }
              ?>

              </body>



            </table>



        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
        </body>
        </html>
