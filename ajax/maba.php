<?php
require "../conn/server.php";

$kelompok = $_GET['kelompok'];
$query = "SELECT * FROM maba WHERE kelompok='$kelompok'";

$Data = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($Data)) { ?>
    <option value="<?php echo $row['nama'] ?>">;
<?php } 
?>