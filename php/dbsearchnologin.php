<?php
$dbhost     = "localhost";
$dbuser     = "root";
$dbpassword = "";
$dbname     = "uas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

//Test if connection occoured
if(mysqli_connect_errno()){
    die("DB connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = mysqli_real_escape_string($conn, $_POST["searchTerm"]);

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM buku_tbl WHERE buku_nama LIKE '%$searchTerm%' OR buku_pengarang LIKE '%$searchTerm%' OR buku_isbn LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);

    // Display the search results
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th>Name</th><th>Author</th><th>ISBN</th></tr></thead><tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td><a href=detailnologin.php?buku_id=" . $row["buku_id"] . ">" . $row["buku_nama"] . "</a></td><td>". $row["buku_pengarang"]. "</td><td>" . $row["buku_isbn"]. "</td></tr>";
            
        }
        echo "</tbody></table>";
    } else {
        echo "<p>No results found.</p>";
    }
}

mysqli_close($conn);
?>