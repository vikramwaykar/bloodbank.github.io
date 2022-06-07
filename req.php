<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = bloodbank";
   $credentials = "user = postgres password=postgres";

   $con = pg_connect( "$host $port $dbname $credentials"  );
   if(!$con) {
      echo "Error : Unable to open database\n";
   } else {

$uname1=$_POST['uname'];
$pass1=$_POST['gender'];
$age=$_POST['age'];
$cpass=$_POST['contact'];
$mob1=$_POST['utype'];
$email1=$_POST['email'];
$date=$_POST['date'];
if (filter_var($email1, FILTER_VALIDATE_EMAIL)) 
{
$query="insert into request values('$uname1','$pass1','$age','$cpass','$mob1','$email1','$date')";
pg_query($query);
 header("Location: req1.php"); 
}
else
{
echo"Mail is invalid";
}
}
pg_close($con);
  
?>
