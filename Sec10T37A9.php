<?php include('connectDBA9.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<link rel ="stylesheet" href="Sec10T37A9css.css">
	<script type="text/javascript">
	
		function hideTables() {
			document.getElementById("tables").style.display = "none";
			hideQueryButtons();
			hideQueries();
		}
	
		function showTables() {
			document.getElementById("tables").style.display = "flex";
		}
			
		function enableButtons() {
			showTables();
			document.getElementById("lib_branch_button").removeAttribute("disabled");
			document.getElementById("lib_member_button").removeAttribute("disabled");
			document.getElementById("books_button").removeAttribute("disabled");
			document.getElementById("publisher_button").removeAttribute("disabled");
			document.getElementById("librarian_button").removeAttribute("disabled");
			document.getElementById("borrowed_prod_button").removeAttribute("disabled");
			document.getElementById("borrowed_recent_button").removeAttribute("disabled");
			
			showQueryButtons();
			showQueries();
		}
		
		function hideOtherTables(tableDiv, location) {			
			var allTableDivs = document.querySelectorAll(location);
			
			for (var i = 0; i < allTableDivs.length; i++) {
				if (allTableDivs[i].id !== tableDiv) {
					document.getElementById(allTableDivs[i].id).style.display = "none";
				}
			}
		}
		
		function resetButtonStyles(tableDiv) {
			var allTableButtons = document.querySelectorAll(".tables > form > input[type='button']");
			
			for (var i = 0; i < allTableButtons.length; i++) {
				if (allTableButtons[i].id !== tableDiv) {
					document.getElementById(allTableButtons[i].id).style.backgroundColor = "#e7e7e7";
					document.getElementById(allTableButtons[i].id).style.textDecoration = "none";
					document.getElementById(allTableButtons[i].id).style.color = "black";
				}
			}
		}
		
		function showLibBranch(){
			document.getElementById("lib_branch_container").style.display = "block";
			document.getElementById("lib_branch_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("lib_branch_button").style.backgroundColor = "#4c5a65";
			document.getElementById("lib_branch_button").style.color = "#FFFFFF";
			document.getElementById("lib_branch_button").style.textDecoration = "underline";
			
			hideOtherTables("lib_branch_container", ".tables > div");
			resetButtonStyles("lib_branch_button");
		}
		
		function showLibMember() {
			document.getElementById("lib_member_container").style.display = "block";
			document.getElementById("lib_member_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("lib_member_button").style.backgroundColor = "#4c5a65";
			document.getElementById("lib_member_button").style.color = "#FFFFFF";
			document.getElementById("lib_member_button").style.textDecoration = "underline";
			
			hideOtherTables("lib_member_container", ".tables > div");
			resetButtonStyles("lib_member_button");

		}
		
		function showBooks() {
			document.getElementById("books_container").style.display = "block";
			document.getElementById("books_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("books_button").style.backgroundColor = "#4c5a65";
			document.getElementById("books_button").style.color = "#FFFFFF";
			document.getElementById("books_button").style.textDecoration = "underline";
			
			hideOtherTables("books_container", ".tables > div");
			resetButtonStyles("books_button");

		}
		
		function showPublisher() {
			document.getElementById("publisher_container").style.display = "block";
			document.getElementById("publisher_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("publisher_button").style.backgroundColor = "#4c5a65";
			document.getElementById("publisher_button").style.color = "#FFFFFF";
			document.getElementById("publisher_button").style.textDecoration = "underline";
			
			hideOtherTables("publisher_container", ".tables > div");
			resetButtonStyles("publisher_button");
		}
		
		function showBorrowedProds() {
			document.getElementById("borrowed_prod_container").style.display = "block";
			document.getElementById("borrowed_prod_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("borrowed_prod_button").style.backgroundColor = "#4c5a65";
			document.getElementById("borrowed_prod_button").style.color = "#FFFFFF";
			document.getElementById("borrowed_prod_button").style.textDecoration = "underline";
			
			hideOtherTables("borrowed_prod_container", ".tables > div");
			resetButtonStyles("borrowed_prod_button");

		}
		
		function showLibrarians() {
			document.getElementById("librarian_container").style.display = "block";
			document.getElementById("librarian_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("librarian_button").style.backgroundColor = "#4c5a65";
			document.getElementById("librarian_button").style.color = "#FFFFFF";
			document.getElementById("librarian_button").style.textDecoration = "underline";
			
			hideOtherTables("librarian_container", ".tables > div");
			resetButtonStyles("librarian_button");

		}
		
		function showBorrwedRecent() {
			document.getElementById("borrowed_recent_container").style.display = "block";
			document.getElementById("borrowed_recent_container").style.backgroundColor = "#FFFFFF";
			document.getElementById("borrowed_recent_button").style.backgroundColor = "#4c5a65";
			document.getElementById("borrowed_recent_button").style.color = "#FFFFFF";
			document.getElementById("borrowed_recent_button").style.textDecoration = "underline";
			
			hideOtherTables("borrowed_recent_container", ".tables > div");
			resetButtonStyles("borrowed_recent_button");

		}
		
		function showQueryButtons() {
			document.getElementById("query_buttons").style.display = "block";
		}
		
		function hideQueryButtons() {
			document.getElementById("query_buttons").style.display = "none";
		}
		
		function showQueries() {
			document.getElementById("queries").style.display = "block";
		}
		
		function hideQueries() {
			document.getElementById("queries").style.display = "none";
		}
		
		function show_books_by_publisher(){
			document.getElementById("books_by_publisher").style.display = "block";
			hideOtherTables("books_by_publisher", ".queries > div");
		}
		
		function show_librarian_branches(){
			document.getElementById("librarian_branches").style.display = "block";
			hideOtherTables("librarian_branches", ".queries > div");
		}
		
		function show_books_by_location(){
			document.getElementById("books_by_location").style.display = "block";
			hideOtherTables("books_by_location", ".queries > div");
		}
		
		function show_available_books(){
			document.getElementById("available_books").style.display = "block";
			hideOtherTables("available_books", ".queries > div");
		}
		
		function show_unavailable_books(){
			document.getElementById("unavailable_books").style.display = "block";
			hideOtherTables("unavailable_books", ".queries > div");
		}
		
		function show_members_borrowed_books() {
			document.getElementById("members_borrowed_books").style.display = "block";
			hideOtherTables("members_borrowed_books", ".queries > div");
		}
		
	</script>
</head>

<header>
</header>

<body> 
	<h1>Team 37 Library Database</h1>
    <div class="ButtonPresets">
		<form method="post"> 
			<input type="submit" name="Createtables"
					value="Create Tables"/> 
		</form>
		
		<form method="post">
			<input type="submit" name="Populatetables"
						value="Populate Tables"/>
		</form>
		
		<form method="post">
			<input type="submit" name="Droptables"
							value="Drop Tables"/> 
		</form>
		
		<form method="post" action="entervalues.php">
			<input type="submit" name="Entervalues"
							value="Add Values"/> 
		</form>
	</div>
	
	<div class="searchbar">
		<form method="get" action="resultspageA9.php">
			<input type="search" name="search" placeholder="Search book title or author..."/>
			
			<button type="submit">Search</button>
		</form>
	</div>
	
	<div id="tables" class="tables">
		<form id = "table_buttons" method="post" action=""> 
		
			<input type="button" name="Lib_branch"
					value="Library Branch" id="lib_branch_button" onclick="showLibBranch()" disabled /> 
			  
			<input type="button" name="Lib_member"
					value="Library Member" id="lib_member_button" onclick="showLibMember()" disabled /> 
					
			<input type="button" name="Books"
					value="Books" id="books_button" onclick="showBooks()" disabled />
			
			<input type="button" name="Publisher"
					value="Publisher" id="publisher_button" onclick="showPublisher()" disabled />
					
			<input type="button" name="Borrowed_prod"
					value="Borrowed Products" id="borrowed_prod_button" onclick="showBorrowedProds()" disabled />
			
			<input type="button" name="Librarian"
					value="Librarian" id="librarian_button" onclick="showLibrarians()" disabled />
					
			<input type="button" name="Borrowed_recent"
					value="Borrowed Recent" id="borrowed_recent_button" onclick="showBorrwedRecent()" disabled />
		</form>
		
		<div id="lib_branch_container" class="lib_branch">
			<section>
				<table>
					<th>Branch Number</th>
					<th>Address</th>
					<th>Name</th>
					<th>Phone</th>
					<?php //Code for displaying library_branch details
						$branchq = "SELECT * FROM library_branch";
						$branchquery = oci_parse($conn, $branchq);
						oci_execute($branchquery);
						
						while ($row = oci_fetch_assoc($branchquery)) {
							echo "<tr>";
								
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
								
							echo "</tr>";
						}
					?>
				</table>
			</section>
		</div>
		
		<div id="lib_member_container" class="lib_member">
			<section>
				<table>
					<th>Member ID</th>
					<th>Status</th>
					<th>E-mail</th>
					<th>Address</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone Number</th>
					<th>Branch Number</th>
					<?php //Code for displaying library_member details
						$memberq = "SELECT * FROM library_member";
						$memberquery = oci_parse($conn, $memberq);
						oci_execute($memberquery);
						
						while ($row = oci_fetch_assoc($memberquery)) {
							echo "<tr>";
							foreach ($row as $column => $value) {
								
								echo "<td>" . $value . "</td>";
							}
							echo "</tr>";
						}
					?>
				</table>
			</section>
		</div>
		
		<div id="books_container" class="books">
			<section>
				<table>
					<th>Book ID</th>
					<th>Status</th>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>Publisher ID</th>
					<th>Publication Year</th>
					<th>ISBN</th>
					<th>Branch Number</th>
					<?php //Code for displaying book details
						$bookq = "SELECT * FROM books";
						$bookquery = oci_parse($conn, $bookq);
						oci_execute($bookquery);
							
						while ($row = oci_fetch_assoc($bookquery)) {
							echo "<tr>";
									
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
									
							echo "</tr>";
						}
					?>
					</table>
			</section>
		</div>
		
		<div id="publisher_container" class="publisher">
			<section>
				<table>
					<th>Publisher ID</th>
					<th>Name</th>
					<?php //Code for displaying publisher details
						$pubq = "SELECT * FROM publisher";
						$pubquery = oci_parse($conn, $pubq);
						oci_execute($pubquery);
							
						while ($row = oci_fetch_assoc($pubquery)) {
							echo "<tr>";
									
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
									
							echo "</tr>";
						}
					?>
					</table>
			</section>
		</div>
		
		<div id="librarian_container" class="librarian">
			<section>
				<table>
					<th>Librarian ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>E-mail</th>
					<th>Phone Number</th>
					<th>Branch Number</th>
					<?php //Code for display librarian details
						$libq = "SELECT * FROM librarian";
						$libquery = oci_parse($conn, $libq);
						oci_execute($libquery);
						
						while ($row = oci_fetch_assoc($libquery)) {
							echo "<tr>";
								
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
								
							echo "</tr>";
						}
					?>
				</table>
			</section>
		</div>
		
		<div id="borrowed_prod_container" class="borrowed_prod">
			<section>
				<table>
						<th>Product ID</th>
						<th>Title</th>
						<th>Author</th>
						<th>Status</th>
						<th>Recent Borrow ID</th>
					<?php //Code for displaying borrow_prod details
						$bprod = "SELECT * FROM borrow_prod";
						$bprodquery = oci_parse($conn, $bprod);
						oci_execute($bprodquery);
						
						while ($row = oci_fetch_assoc($bprodquery)) {
							echo "<tr>";
								
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
								
							echo "</tr>";
						}
					?>
				</table>
			</section>
		</div>
		
		<div id="borrowed_recent_container" class="borrowed_recent">
			<section>
				<table>
					<th>Most Recent Borrow ID</th>
					<th>Member ID</th>
					<?php //Code for displaying borrowed_recent details
						$mreborrow = "SELECT * FROM borrowed_recent";
						$mreborrowquery = oci_parse($conn, $mreborrow);
						oci_execute($mreborrowquery);
						
						while ($row = oci_fetch_assoc($mreborrowquery)) {
							echo "<tr>";
								
								foreach ($row as $column => $value) {
									echo "<td>" . $value . "</td>";
								}
								
							echo "</tr>";
						}
					?>
				</table>
			</section>
		</div>
	</div>
	
	<div class = "queries" id = "queries">
		<h2>Preset Queries</h2>
		<form id = "query_buttons" method="post" action=""> 
		
			<input type="button" name="books_by_publisher"
					value="Books and Publishers" id="books_by_publisher_button" onclick="show_books_by_publisher()" /> 
			  
			<input type="button" name="librarian_branches"
					value="Librarians and Branches" id="librarian_branches_button" onclick="show_librarian_branches()" /> 
					
			<input type="button" name="books_by_location"
					value="Books and Locations" id="books_by_location_button" onclick="show_books_by_location()" />
			
			<input type="button" name="unavailable_books"
					value="Unavailable Books" id="unavailable_books_button" onclick="show_unavailable_books()" />
					
			<input type="button" name="available_books"
					value="Available Books" id="available_books_button" onclick="show_available_books()" />
			
			<input type="button" name="members_borrowed_books"
					value="Members and Borrowed Books" id="members_borrowed_books_button" onclick="show_members_borrowed_books()" />
			
		</form>
		
		<div id="books_by_publisher" class="books_by_publisher">
			<section>
				<table>
					<th>Book Title</th>
					<th>Book Author</th>
					<th>Publisher</th>
					<?php
					$booksByPublisherQuery = "SELECT books.book_title, books.book_author, publisher.publisher_name FROM books JOIN publisher ON books.publisher_id = publisher.publisher_id";
					$booksByPublisherQuery = oci_parse($conn, $booksByPublisherQuery);
					oci_execute($booksByPublisherQuery);

					while ($row = oci_fetch_assoc($booksByPublisherQuery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
		
		<div id="librarian_branches" class="librarian_branches">
			<section>
				<table>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail</th>
					<th>Phone Number</th>
					<th>Branch Number</th>
					<th>Branch Name</th>
					<?php
					$librarianBranches = "SELECT
												librarian.lib_id,
												librarian.first_name AS librarian_first_name,
												librarian.last_name AS librarian_last_name,
												librarian.lib_email,
												librarian.lib_phone,
												library_branch.branch_num,
												library_branch.branch_name
											FROM librarian
											JOIN library_branch ON librarian.branch_num = library_branch.branch_num";
					$librarianBranchesQuery = oci_parse($conn, $librarianBranches);
					oci_execute($librarianBranchesQuery);

					while ($row = oci_fetch_assoc($librarianBranchesQuery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
		
		<div id="books_by_location" class="books_by_location">
			<section>
				<table>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>ISBN</th>
					<th>Library Name</th>
					<th>Library Address</th>
					<th>Library Phone</th>
					<?php
					$booksByLocation = "SELECT
												books.book_id,
												books.book_title,
												books.book_author,
												books.book_category,
												books.book_ISBN,
												library_branch.branch_name,
												library_branch.branch_address,
												library_branch.branch_phone
											FROM books
											JOIN library_branch ON books.branch_num = library_branch.branch_num";
					$booksByLocationQuery = oci_parse($conn, $booksByLocation);
					oci_execute($booksByLocationQuery);

					while ($row = oci_fetch_assoc($booksByLocationQuery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
		
		<div id="unavailable_books" class="unavailable_books">
			<section>
				<table>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>Publication Year</th>
					<th>ISBN</th>
					<?php
					$unavail_books = "SELECT book_id, book_title, book_author, book_category, book_publication_year, book_ISBN
										FROM books
										WHERE book_status = 1
										ORDER BY book_title, book_id";
					$unavail_booksQuery = oci_parse($conn, $unavail_books);
					oci_execute($unavail_booksQuery);

					while ($row = oci_fetch_assoc($unavail_booksQuery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
		
		<div id="available_books" class="available_books">
			<section>
				<table>
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>Publication Year</th>
					<th>ISBN</th>
					<?php
					$avail_books = "SELECT book_id, book_title, book_author, book_category, book_publication_year, book_ISBN
										FROM books
										WHERE book_status = 0 
										ORDER BY book_title, book_id";
					$avail_booksQuery = oci_parse($conn, $avail_books);
					oci_execute($avail_booksQuery);

					while ($row = oci_fetch_assoc($avail_booksQuery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
		
		<div id="members_borrowed_books" class="members_borrowed_books">
			<section>
				<table>
					<th>Member ID</th>
					<th>First Name</th>
					<th>Last name</th>
					<th>Book Title</th>
					<th>Author</th>
					<th>Book Status</th>
					<?php
					$borr_books = "SELECT
									lm.member_id,
									lm.first_name,
									lm.last_name,
									bprod.btitle,
									bprod.bauthor,
									bprod.status
								FROM
									library_member lm
								JOIN
									borrowed_recent br ON lm.member_id = br.member_id
								JOIN
									borrow_prod bprod ON br.most_recent_borrow_id = bprod.most_recent_borrow_id";
					$borr_booksquery = oci_parse($conn, $borr_books);
					oci_execute($borr_booksquery);

					while ($row = oci_fetch_assoc($borr_booksquery)) {
						echo "<tr>";

						foreach ($row as $column => $value) {
							echo "<td>" . $value . "</td>";
						}

						echo "</tr>";
					}
					?>
				</table>
			</section>
		</div>
	</div>
</body>
</html>

<?php
      
        if(isset($_POST['Createtables'])) { 
            include('createtablesA9.php');
			echo '<script type="text/javascript">';
			echo '    showTables();';
			echo '</script>';			
        } 
		
        if(isset($_POST['Droptables'])) { 
			include('droptablesA9.php');
			echo '<script type="text/javascript">';
			echo '    hideTables();';
			echo '</script>';
        } 
		
		if(isset($_POST['Populatetables'])) { 
			include('populatetablesA9.php');
			echo '<script type="text/javascript">';
			echo '    enableButtons();';
			echo '</script>';
        }
		
		if(isset($_POST['Entervalues'])) { 
			include('entervalues.php');
        }
		
    ?> 