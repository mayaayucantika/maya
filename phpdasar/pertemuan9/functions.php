,<?php
// koneksi ke databae
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
}$result = mysqli_query($conn,$query);
$rows = [];
while ( $row = mysqli_fetch_assoc($result) ){

}
return $rows;

{}


?>