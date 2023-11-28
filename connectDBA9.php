<?php

$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))" ;
$conn = oci_connect("mpinafer", "05293101", $db);
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
// Close the Oracle connection
//oci_close($conn);
?>