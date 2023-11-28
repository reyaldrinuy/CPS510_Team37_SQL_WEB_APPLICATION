<?php include ('connectDBA9.php');
$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))" ;
$conn = oci_connect("mpinafer", "05293101", $db);

$lib_branch = "CREATE TABLE library_branch(
					branch_num		INTEGER PRIMARY KEY,
					branch_address	VARCHAR(50),
					branch_name		VARCHAR(50),
					branch_phone	VARCHAR(50)
)";

$lib_member = "CREATE TABLE library_member (
					member_id		INTEGER PRIMARY KEY,
					member_status	INTEGER DEFAULT 0,
					member_email	VARCHAR(50),
					member_address	VARCHAR(50),
					first_name		VARCHAR(50),
					last_name		VARCHAR(50),
					member_phone	VARCHAR(50),
					branch_num		INTEGER,
					FOREIGN KEY (branch_num) REFERENCES library_branch (branch_num)
)";

$borrowed_recent = "CREATE TABLE borrowed_recent (
					most_recent_borrow_id	INTEGER PRIMARY KEY,
					member_id				INTEGER,
					FOREIGN KEY (member_id)	REFERENCES library_member (member_id)
)";

$borrow_prod = "CREATE TABLE borrow_prod (
					bprod_id		INTEGER PRIMARY KEY,
					btitle			VARCHAR(50),
					bauthor			VARCHAR(50),
					status			INTEGER,
					most_recent_borrow_id	INTEGER,
					FOREIGN KEY (most_recent_borrow_id) REFERENCES borrowed_recent (most_recent_borrow_id)
)";

$librarian = "CREATE TABLE librarian (
					lib_id			INTEGER PRIMARY KEY,
					first_name		VARCHAR(50) NOT NULL,
					last_name		VARCHAR(50) NOT NULL,
					lib_address		VARCHAR(50),
					lib_email		VARCHAR(50),
					lib_phone		VARCHAR(50),
					branch_num 		INTEGER,
					FOREIGN KEY (branch_num) REFERENCES library_branch (branch_num)
)";

$publisher = "CREATE TABLE publisher (
					publisher_id	INTEGER PRIMARY KEY,
					publisher_name	VARCHAR(50)
)";

$books = "CREATE TABLE books (
					book_id			INTEGER PRIMARY KEY,
					book_status		INTEGER DEFAULT 1,
					book_title		VARCHAR(50),
					book_author		VARCHAR(50),
					book_category	VARCHAR(50),
					publisher_id	INTEGER NOT NULL,
					book_publication_year	DATE,
					book_ISBN		VARCHAR(50),
					branch_num		INTEGER,
					FOREIGN KEY (branch_num) REFERENCES library_branch (branch_num),
					FOREIGN KEY (publisher_id) REFERENCES publisher (publisher_id)
)";


$tables = [$lib_branch, $lib_member, $librarian, $publisher, $books, $borrowed_recent, $borrow_prod];

foreach ($tables as $t) {
    $s = oci_parse($conn, $t);
    oci_execute($s);
	oci_commit($conn);
}

oci_close($conn);
?>
