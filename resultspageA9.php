<?php

$db = "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(Host=oracle12c.scs.ryerson.ca)(Port=1521))(CONNECT_DATA=(SID=orcl12c)))";
$conn = oci_connect("mpinafer", "05293101", $db);

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    echo "<head><link rel ='stylesheet' href='Sec10T37A9css.css'></head>";
    echo "Search: " . htmlspecialchars($searchTerm);

    $bookauthorq = "SELECT * FROM books WHERE book_author = '$searchTerm'";
    $bookauthorquery = oci_parse($conn, $bookauthorq);
    oci_execute($bookauthorquery);

    $bookq = "SELECT * FROM books WHERE book_title = '$searchTerm'";
    $bookquery = oci_parse($conn, $bookq);
    oci_execute($bookquery);
	
    echo "<section>
            <table>
                <th>Book ID</th>
                <th>Status</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Publisher ID</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                <th>Branch Number</th>";

    
    while ($row = oci_fetch_assoc($bookauthorquery)) {
        echo "<tr>";

         foreach ($row as $column => $value) {
            echo "<td>" . $value . "</td>";
        }

        echo "</tr>";
        }
 
		
    while ($row = oci_fetch_assoc($bookquery)) {
        echo "<tr>";

        foreach ($row as $column => $value) {
            echo "<td>" . $value . "</td>";
        }

         echo "</tr>";
    }


    echo "</table></section>";
} else {
    echo "No search term provided.";
}

?>