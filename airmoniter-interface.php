<?php

    error_reporting(E_ALL);

    error_reporting(E_ALL);
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'project1'; 
  // checking if a user is logged in
//  if (!isset($_SESSION[''])) {
  //  header('Location:');
  //}

  $user_table = '';
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  // getting the list of users
  $query = "SELECT * FROM airmoniter ORDER BY id DESC;";
  $users = mysqli_query($conn, $query);

  //verify_query($users);

  while ($user = mysqli_fetch_assoc($users)) {
    $user_table .= "<tr>";
    $user_table .= "<td>{$user['id']}</td>";
    $user_table .= "<td>{$user['Value_1']}</td>";
    $user_table .= "<td>{$user['Value_2']}</td>";
    $user_table .= "<td>{$user['Value_3']}</td>";
    $user_table .= "<td>{$user['Value_4']}</td>";
    $user_table .= "</tr>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/mui.css">
     <link rel="icon" type="image/x-icon" href="">
     <script src="function/fun1/fun4.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>*****************</title>
</head>
<body>
   <br>
     <nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="#">Logo</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="nav navbar-nav">
     <div class="f1">
     <br>
    <!-- <label>Name:<?php// echo $_SESSION['T1'];?></label>-->
     <br>
      <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
    </div>
  </div>
</nav>

    <div class="container-fluid">
    <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
     <br><br><br>
     <div class="f3">
     <img src="icon/icons8_user_male_104px.png" class="img-rounded" alt="Cinque Terre" width="100" height="100">
     </div>
     <br>
     <!--<label>Name:<?php //echo $_SESSION['T1'];?></label>-->
     <br>
      <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     <input type="submit" name="b2" class="btn btn-primary btn-lg btn-block" value="............................">
     <br>
     </div>

      <div class="col-sm-9">
      <!--<div class="well">-->
      <div class="f4">
        <!--<div class="btn-group btn-group-lg">-->
          <h1>Air Meter</h1>
          <br><br>
          <input type="text" id="myInput_id" onkeyup="myFunction_id()" placeholder="Search For Id.." title="Type In a Id">
          <br><br>
            <table class="table table-striped" id="myTable">
  <thead>
    <tr>
        <th>Id</th>
        <th>Temparage</th>
        <th>Humidity</th>
        <th>Methane, Butane, LPG</th>
        <th>Carbon Monoxide</th>
      </tr>

      <?php echo $user_table;?>
  </tbody>
</table>
</div>

<br><br>
</div></div>

</div>
</div>
</div>
</div>

<script>
function myFunction_id() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput_id");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

/*function myFunction_date_time() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput_date_time");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
-*/

</script>

</body>
</html>
