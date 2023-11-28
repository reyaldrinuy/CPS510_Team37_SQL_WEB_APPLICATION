<?php

$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))" ;
$conn = oci_connect("mpinafer", "05293101", $db);

$recent = "DROP TABLE borrowed_recent CASCADE CONSTRAINTS";
$borrowed_prod = "DROP TABLE borrow_prod CASCADE CONSTRAINTS";

$books = "DROP TABLE books CASCADE CONSTRAINTS";
$lib_member = "DROP TABLE library_member CASCADE CONSTRAINTS";

$publisher = "DROP TABLE publisher CASCADE CONSTRAINTS";
$librarian = "DROP TABLE librarian CASCADE CONSTRAINTS";
$lib_branch = "DROP TABLE library_branch CASCADE CONSTRAINTS";

$query = [$recent, $borrowed_prod, $books, $lib_member, $publisher, $librarian, $lib_branch];

foreach ($query as $q) {
	$statement = oci_parse($conn, $q);
	oci_execute($statement);
}
oci_commit($conn);
oci_close($conn);

//select table_name from all_tables;
?>