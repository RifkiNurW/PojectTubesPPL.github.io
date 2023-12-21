
<?php
$servername = "localhost";
$database = "db_users";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['addnewbarang'])){
  $namabarang = $_POST['namabarang'];
  $kondisi = $_POST['kondisi'];
  $stok = $_POST['stok'];

  $addtotable = mysqli_query($conn, "INSERT INTO tbl_stok(namabarang, kondisi, stok) VALUE ('$namabarang', '$kondisi', '$stok')");
  if($addtotable){
    header('location:stokbarang.php');
  }
}
?>