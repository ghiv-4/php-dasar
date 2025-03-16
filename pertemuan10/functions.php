<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","php_dasar");

function query($query){
    global $conn; // biar $conn bisa dibaca sama function
    $result = mysqli_query($conn , $query);
    $rows =[]; // buat wadah kosong untuk menyimpan data-data
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

// buat function tambah
function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]) ;  // htmlspecialchars biar user gabisa jalankan elemen html
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]) ;
    $ukuran_bra = htmlspecialchars($data["ukuran_bra"]);
    $tinggi_badan = htmlspecialchars($data["tinggi_badan"]);
    $debut = htmlspecialchars($data["debut"]);
    $gambar = htmlspecialchars($data["gambar"]);
  // query insert data (buat masukin ke tabel aktris)
  $query= "INSERT INTO aktris VALUES
  ('', '$nama', '$tanggal_lahir','$ukuran_bra','$tinggi_badan', '$debut','$gambar')";
    mysqli_query($conn,$query);

    // Mengembalikan jumlah baris yang terpengaruh (1 jika sukses, -1 jika gagal)
    return mysqli_affected_rows($conn); 
}

// buat function hapus
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM aktris WHERE id = $id");

    return mysqli_affected_rows($conn);

}
?>
