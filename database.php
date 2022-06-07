<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = bloodbank";
   $credentials = "user = postgres password=postgres";

   $conn = pg_connect( "$host $port $dbname $credentials"  );
   if(!$conn) {
	die("Could not connect");
}
?>
