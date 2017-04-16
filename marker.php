<?php


require_once 'db.php';
  $cod = $_POST['studBCode'];
$ins = $link->query("insert into tester(tc)VALUES ('$cod')");

?>
<?php include('header.php');?>


<script>
    function loadTable(){



            xmlhttp=GetXmlHttpObject();
            var url="wait.php";
  xmlhttp.onreadystatechange=statechanged;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);
        }

        function statechanged()
        {
            if(xmlhttp.readyState==4) {
                document.getElementById("loaded").innerHTML=xmlhttp.responseText;
            }
        }

    }



</script>
  <body>
  <div class="container">
      <div class="row">

            <table class="table table-striped">
              <thead>
                <th> Student ID</th>
                <th> First Name</th>
                <th> Last Name</th>
              </thead>
              <tbody>
              <div id="loaded">

              </div>



              </body>



            </table>



        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script>
    window.setInterval("loadTable()", 5000);
</script>
</body>
        </html>
