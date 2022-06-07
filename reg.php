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
$cpass=$_POST['contact'];
$mob1=$_POST['utype'];
$email1=$_POST['email'];
if (filter_var($email1, FILTER_VALIDATE_EMAIL)) 
{
$query="insert into userr values('$uname1','$pass1','$cpass','$mob1','$email1')";
pg_query($query);
 header("Location: reg1.php"); 
}
else
{
echo"Mail is invalid";
}
}
pg_close($con);
  
?>
