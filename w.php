<?php
header('Content-Type: application/json');

$host = "localhost";
$username = "id8600931_movi";
$password = "()1234567890";
$db_name = "id8600931_movi";

$mysqli = new mysqli($host, $username, $password, $db_name);
if(mysqli_connect_errno()) {
echo "Error: Could not connect to database.";
exit;
}
?>
<?php
$query = "select * from web";

//untuk menjalankan perinta sql
$result = $mysqli->query($query);
//untuk mendapatkan jumlah bari dari table
$num_results = $result->num_rows;
//cek jika data tidak 0
if( $num_results > 0){ 
$array = array();
while( $row = $result->fetch_assoc() ){
//untuk mengektrak data
extract($row);
$array[] = $row;

}

echo json_encode($array);


}else{
//jika data kosong maka akan menampilkan data berikutnya

echo "Data Kosong";
}
//menutup koneksi ke database
$result->free();
$mysqli->close();
?>
