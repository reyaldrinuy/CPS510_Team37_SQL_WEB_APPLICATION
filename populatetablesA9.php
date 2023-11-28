<?php include ('connectDBA9.php');


$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))" ;
$conn = oci_connect("mpinafer", "05293101", $db);

$branch1 = "INSERT INTO library_branch(branch_num, branch_address, branch_name, branch_phone) VALUES(1, '123 Library St.', 'Toronto Public Library', '416-111-1111')";

$branch2 = "INSERT INTO library_branch(branch_num, branch_address, branch_name, branch_phone) VALUES(2, '1494 Tyndall Avenue', 'Tempest Library', '647-234-1294')";

$branch3 = "INSERT INTO library_branch(branch_num, branch_address, branch_name, branch_phone) VALUES(3, '8349 King St. West', 'Royal Park Library', '348-342-2359')";

$branch4 = "INSERT INTO library_branch(branch_num, branch_address, branch_name, branch_phone) VALUES(4, '3342 Church St.', 'Toronto Public Library', '647-188-5834')";

$branch5 = "INSERT INTO library_branch(branch_num, branch_address, branch_name, branch_phone) VALUES(5, '1235 Yonge St.', 'Toronto Public Library', '416-588-2838')";

$branches = [$branch1, $branch2, $branch3, $branch4, $branch5];

$member1 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(1, 0, 'realduy@torontumu.ca', '115 Spencer Avenue', 'Realdin', 'Uy', '647-029-2749', 2)";

$member2 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(2, 0, 'mapifer@gmail.com', '8347 Bathurst St.', 'Mapi', 'Ferre', '729-342-8492', 2)";

$member3 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(3, 0, 'andelcru@yahho.com', '1283 St. Clair Avenue West', 'Andel', 'Cru', '647-382-8349', 4)";

$member4 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(129, 0, 'geogebrown@kitkat.com', '2384 Jefferson Rd', 'George', 'Brown', '382-342-3345', 5)";

$member5 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(849, 1, 'torontomu@torontomu.ca', '256 Dundas St. West', 'Toronto', 'Mu', '238-342-3211', 1)";

$member6 = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) VALUES(203, 0, 'hewlettpackard@gmail.com', '756 Cowan Avenue', 'Hewlett', 'Packard', '283-488-7564', 3)";

$members = [$member1, $member2, $member3, $member4, $member5, $member6];

$libs1 = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) VALUES(153, 'Ellis', 'Manson', '128 Tyndall Rd', 'ellisman@gmail.com', '647-988-2345', 5)";

$libs2 = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) VALUES(284, 'Uber', 'Eatson', '777 Pizza St. East', 'ubereats@gmail.com', '888-345-1234', 2)";

$libs3 = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) VALUES(112, 'Captain', 'Man', '2838 Swellview Avenue', 'captainman@gmail.com', '838-333-1834', 1)";

$libs4 = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) VALUES(943, 'Henry', 'Danger', '2221 Swellview Avnue', 'hengrydanger@gmail.com', '993-212-3424', 4)";

$libs5 = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) VALUES(3, 'Barry', 'Allen', '1234 Central City Street', 'barryallen@gmail.com', '647-239-3847', 3)";

$libs = [$libs1, $libs2, $libs3, $libs4, $libs5];

$pub1 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(102, 'Dundurn Press')";

$pub2 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(234, 'Drawn and Quarterly')";

$pub3 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(934, 'Inkyard Press')";

$pub4 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(373, 'Red Deer Press')";

$pub5 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(123, 'HQN')";

$pub6 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(1029, 'Whitecap Publishing')";

$pub7 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(223, 'Arsenal Press Pup')";

$pub8 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(112, 'Mythos and Ink')";

$pub9 = "INSERT INTO publisher(publisher_id, publisher_name) VALUES(932, 'Elsevier Canada')";

$publishers = [$pub1, $pub2, $pub3, $pub4, $pub5, $pub6, $pub7, $pub8, $pub9];

$book1 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(737, 1, 'Whose Knees Are These?', 'Jabari Asim', 'Kids Educational', 102, TO_DATE('2003-11-28', 'YYYY-MM-DD'), '893293938641', 1)";

$book2 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(2322, 1, 'Whose Toes Are Those?', 'Jabari Asim', 'Sci-Fi', 234, TO_DATE('1994-09-30', 'YYYY-MM-DD'), '28317623943', 3)";

$book3 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(120, 1, 'But Not the Hippopotamus', 'Sandra Boynton', 'Horror', 934, TO_DATE('2010-04-24', 'YYYY-MM-DD'), '28341204842', 4)";

$book4 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(123, 1, 'Blue Hat, Green Hat', 'Sandra Boynton', 'Comedy', 934, TO_DATE('2012-08-22', 'YYYY-MM-DD'), '19234756293', 5)";

$book5 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(842, 1, 'Freight Train', 'Donald Crews', 'Non-Fiction', 123, TO_DATE('2012-07-23', 'YYYY-MM-DD'), '34234529312', 3)";

$book6 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(172, 0, 'Truck', 'Donald Crews', 'Non-Fiction', 123, TO_DATE('2013-09-09', 'YYYY-MM-DD'), '23841234647', 2)";

$book7 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(9123, 1, 'Color Zoo', 'Lois Ehlert', 'Kids Educational', 373, TO_DATE('2019-07-12', 'YYYY-MM-DD'), '28374612042', 4)";

$book8 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(483, 0, 'Fish Eyes: A Book You Can Count On', 'Lois Ehlert', 'Kids Educational', 373, TO_DATE('2020-07-15', 'YYYY-MM-DD'), '18234627310', 5)";

$book9 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(756, 0, 'Ten Little Fingers and Ten Little Toes', 'Mem Fox', 'Kids Educational', 1029, TO_DATE('1984-05-22', 'YYYY-MM-DD'), '19234759203', 1)";

$book10 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(563, 0, 'Follow Your Dreams, Little One', 'Vashti Harrison', 'Fiction', 223, TO_DATE('2004-06-18', 'YYYY-MM-DD'), '28394175820', 3)"; 

$book11 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(883, 0, 'Exactly the Opposite', 'Tana Hoban', 'Historical Fiction', 112, TO_DATE('2006-09-29', 'YYYY-MM-DD'), '19246472389', 1)";

$book12 = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) VALUES(542, 0, 'Chikca Chicka Boom Boom', 'Bill Martin Jr', 'Non-Fiction', 932, TO_DATE('2011-08-12', 'YYYY-MM-DD'), '38457493019', 5)";

$books = [$book1, $book2, $book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10, $book11, $book12];


$bprod1 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (1, 'Truck', 'Donald Crews', 0, 1)";

$bprod2 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (2, 'Freight Train', 'Donald Crews', 1, 849)";

$bprod3 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (3, 'Whose Knees Are These?', 'Jabari Asim', 1, 203)";

$bprod4 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (4, 'Color Zoo', 'Lois Ehlert', 0, 2)";

$bprod5 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (5, 'Exactly the Opposite', 'Tana Hoban', 0, 129)";

$bprod6 = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) VALUES (6, 'Follow Your Dreams, Little One', 'Vashti Harrison', 0, 3)";

$bproducts = [$bprod1, $bprod2, $bprod3, $bprod4, $bprod5, $bprod6];


$recent1 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(1, 1)";

$recent2 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(849, 849)";

$recent3 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(203, 203)";

$recent4 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(2, 2)";

$recent5 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(129, 129)";

$recent6 = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES(3, 3)";

$recent_books = [$recent1, $recent2, $recent3, $recent4, $recent5, $recent6];


foreach ($branches as $b) {
	$a = oci_parse($conn, $b);
	oci_execute($a);
	oci_commit($conn);
}

foreach ($members as $m) {
	$mem = oci_parse($conn, $m);
	oci_execute($mem);
	oci_commit($conn);
}

foreach ($libs as $l) {
	$c = oci_parse($conn, $l);
	oci_execute($c);
	oci_commit($conn);
}

foreach ($publishers as $p) {
	$d = oci_parse($conn, $p);
	oci_execute($d);
	oci_commit($conn);
}

foreach ($books as $bk) {
	$e = oci_parse($conn, $bk);
	oci_execute($e);
	oci_commit($conn);
}

foreach ($recent_books as $rb) {
	$f = oci_parse($conn, $rb);
	oci_execute($f);
	oci_commit($conn);
}

foreach ($bproducts as $bp) {
    $g = oci_parse($conn, $bp);
    oci_execute($g);
    oci_commit($conn);
}

oci_close($conn);
?>

