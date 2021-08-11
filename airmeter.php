<?php
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'project1'; 
	
        
        $id ='';

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if ($conn->connect_error){echo"my sql error";}

    //$sql="INSERT INTO airmeter VALUES('$id','$data1','$data2')";
     $sql = "INSERT INTO airmoniter (Value_1, Value_2, Value_3, Value_4) VALUES ('".$_GET["data1"]."','".$_GET["data2"]."','".$_GET["data3"]."','".$_GET["data4"]."')";    
    
    if($conn->query($sql)===TRUE){echo"*******";}
    else{echo"error inserting data";}
    $conn->close();	
?>
   