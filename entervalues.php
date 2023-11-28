<?php 
$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))" ;
$conn = oci_connect("mpinafer", "05293101", $db); ?>

<!DOCTYPE html>
<html>

<head>
	<link rel ="stylesheet" href="Sec10T37A9css.css">
</head>

<body class ="addvalues">
	<div style="display: flex; flex-direction: row; justify-content: space-evenly;">
	<div class ="branch_details">
		<h2>Library Branch</h2>
		<form method="post" name="library_branch" style="display: flex; flex-direction: column;">
			<label>Branch Number</label>
			<input id="branch_num" type="text" required>
			
			<label>Branch Address</label>
			<input id="branch_address" type="text" required>
			
			<label>Branch Name</label>
			<input id="branch_name" type="text" required>
			
			<label>Branch Phone</label>
			<input id="branch_phone" type="text" required>
			
			<button type="submit">Submit</button>
		</form>
	</div>
	
	<div class ="member_details">
		<h2>Library Member</h2>
		<form method="post" name="library_member" style="display: flex; flex-direction: column;">
			<label>Member ID</label>
			<input id="member_id" type="text" required>
			
			<label>Status (0 or 1)</label>
			<input id="mem_status" type="text" required>
			
			<label>E-mail</label>
			<input id="mem_email" type="text" required>
			
			<label>Address</label>
			<input id="mem_address" type="text" required>
			
			<label>First Name</label>
			<input id="mem_fname" type="text" required>
			
			<label>Last Name</label>
			<input id="mem_lname" type="text" required>
			
			<label>Phone Number</label>
			<input id="mem_phone" type="text" required>
			
			<label>Branch Number</label>
			<input id="mem_branch_num" type="text" required>
			
			<button type="submit">Submit</button>
		</form>
	</div>
	
	<div class ="borrowed_recent_details">
		<h2>Borrowed Recent</h2>
		<form method="post" name="borrowed_recent" style="display: flex; flex-direction: column;">
			<label>Most Recent Borrow ID</label>
			<input id="most_recent_borrow_id" type="text" required>
			
			<label>Member ID</label>
			<input id="member_id" type="text" required>
			
			<button type="submit">Submit</button>
		</form>
	</div>
	
	<div class ="borrow_prod_details">
		<h2>Borrow Products</h2>
		<form method="post" name="borrow_prod" style="display: flex; flex-direction: column;">
			<label>Product ID</label>
			<input id="bprod_id" type="text" required>
			
			<label>Title</label>
			<input id="bprod_title" type="text" required>
			
			<label>Author</label>
			<input id="bprod_author" type="text" required>
			
			<label>Status</label>
			<input id="bprod_status" type="text" required>
			
			<label>Most Recent Borrow ID</label>
			<input id="bpd_most_recent_borrow_id" type="text" required>
			
			<button type="submit">Submit</button>
		</form>
	</div>
	</div>
	
	<div style="display: flex; flex-direction: row; justify-content: space-evenly;" >
		<div class ="librarian_details">
			<h2>Librarian</h2>
			<form method="post" name="librarian" style="display: flex; flex-direction: column;">
				<label>ID</label>
				<input id="lib_id" type="text" required>
				
				<label>First Name</label>
				<input id="lib_fname" type="text" required>
				
				<label>Last Name</label>
				<input id="lib_lname" type="text" required>
				
				<label>Address</label>
				<input id="lib_address" type="text" required>
				
				<label>E-mail</label>
				<input id="lib_email" type="text" required>
				
				<label>Phone Number</label>
				<input id="lib_phone" type="text" required>
				
				<label>Branch Number</label>
				<input id="lib_branch_num" type="text" required>
				
				<button type="submit">Submit</button>
			</form>
		</div>
	
		<div class ="publisher_details">
			<h2>Publisher</h2>
			<form method="post" name="publisher" style="display: flex; flex-direction: column;">
				<label>ID</label>
				<input id="pub_id" type="text" required>
				
				<label>Name</label>
				<input id="pub_name" type="text" required>
				
				<button type="submit">Submit</button>
			</form>
		</div>
	
		<div class ="book_details">
			<h2>Books</h2>
			<form method="post" name="books" style="display: flex; flex-direction: column;">
				<label>ID</label>
				<input id="book_id" type="text" required>
				
				<label>Status</label>
				<input id="book_status" type="text" required>
				
				<label>Title</label>
				<input id="book_title" type="text" required>
				
				<label>Author</label>
				<input id="book_author" type="text" required>
				
				<label>Category</label>
				<input id="book_category" type="text" required>
				
				<label>Publisher ID</label>
				<input id="book_pub_id" type="text" required>
				
				<label>Publication Year (YYYY-MM-DD)</label>
				<input id="publication_year" type="text" required>
				
				<label>ISBN</label>
				<input id="book_isbn" type="text" required>
				
				<label>Branch Number</label>
				<input id="book_branch_num" type="text" required>
				
				<button type="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['library_branch'])) {
		$num = (int)$_POST['branch_num'];
        $address = $_POST['branch_address'];
        $name = $_POST['branch_name'];
        $phone = $_POST['branch_phone'];
		
		$query = "INSERT INTO library_branch (branch_num, branch_address, branch_name, branch_phone) 
				  VALUES ('$num', '$address', '$name', '$phone')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['library_member'])) {
		$id = (int)$_POST["member_id"];
		$status = (int)$_POST["mem_status"];
		$email = $_POST["mem_email"];
		$address = $_POST["mem_address"];
		$fname = $_POST["mem_fname"];
		$lname = $_POST["mem_lname"];
		$mphone = $_POST["mem_phone"];
		$branchnum = (int)$_POST["mem_branch_num"];
		
		$query = "INSERT INTO library_member(member_id, member_status, member_email, member_address, first_name, last_name, member_phone, branch_num) 
				  VALUES ('$id', '$status', '$email', '$address', '$fname', '$lname', '$mphone', '$branchnum')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['borrowed_recent'])) {
		$mostRecentBorrowId = (int)$_POST['most_recent_borrow_id'];
        $id = (int)$_POST['member_id'];
		
		$query = "INSERT INTO borrowed_recent(most_recent_borrow_id, member_id) VALUES('$mostRecentBorrowId', '$id')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['borrow_prod'])) {
		$id = (int)$_POST['bprod_id'];
        $title = $_POST['bprod_title'];
        $author = $_POST['bprod_author'];
        $status = (int)$_POST['bprod_status'];
        $bpdMostRecentBorrowId = (int)$_POST['bpd_most_recent_borrow_id'];
		
		$query = "INSERT INTO borrow_prod(bprod_id, btitle, bauthor, status, most_recent_borrow_id) 
				  VALUES ('$id', '$title', '$author', '$status', '$bpdMostRecentBorrowId')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['librarian'])) {
		$id = (int)$_POST['lib_id'];
        $fname = $_POST['lib_fname'];
        $llname = $_POST['lib_lname'];
        $address = $_POST['lib_address'];
        $email = $_POST['lib_email'];
        $phone = $_POST['lib_phone'];
        $branchnum = (int)$_POST['lib_branch_num'];
		
		$query = "INSERT INTO librarian(lib_id, first_name, last_name, lib_address, lib_email, lib_phone, branch_num) 
				  VALUES('$id', '$fname', '$llname', '$address', '$email', '$phone', '$branchnum')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['publisher'])) {
		$pubId = (int)$_POST['pub_id'];
        $pubName = $_POST['pub_name'];
		
		$query = "INSERT INTO publisher(publisher_id, publisher_name) VALUES('$pubId', '$pubName')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
	
	if(isset($_POST['books'])) {
		$id= (int)$_POST['book_id'];
        $status = (int)$_POST['book_status'];
        $title = $_POST['book_title'];
        $bauthor = $_POST['book_author'];
        $category = $_POST['book_category'];
        $pubid = (int)$_POST['book_pub_id'];
        $publicationYear = $_POST['publication_year'];
        $isbn = $_POST['book_isbn'];
        $branch_num= (int)$_POST['book_branch_num'];
		
		$query = "INSERT INTO books(book_id, book_status, book_title, book_author, book_category, publisher_id, book_publication_year, book_ISBN, branch_num) 
				  VALUES('$id', '$status', '$title', '$bauthor', '$category', '$pubid', TO_DATE('$publicationYear', 'YYYY-MM-DD'), '$isbn', '$branch_num')";
		$q = oci_parse($conn, $query);
		oci_execute($q);
		oci_commit($conn);
	}
?>	