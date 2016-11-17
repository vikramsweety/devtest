<?php

  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crmcng_support6";

   $conn = mysqli_connect($host, $username, $password, $dbname);
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
  }

$sql="SELECT projecttaskstatus, count(*) from (select distinct * from vtiger_projecttask) as totalnoofstatus group by projecttaskstatus
having projecttaskstatus in ('new', 'reopened','in progress', 'on hold', 'ready for QA')"

?>