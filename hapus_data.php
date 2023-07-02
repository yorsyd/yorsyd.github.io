<?php

include "connect.php"; // Koneksi ke database

// Cek apakah parameter id_post terdefinisi dan merupakan bilangan bulat positif
if (isset($_GET['id_post']) && ctype_digit($_GET['id_post'])) {
    $id_post = $_GET['id_post'];

    // Query untuk menghapus data berdasarkan id_post
    $query = "DELETE FROM penjualanbarang WHERE id = '$id_post'";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus";


        $maxIdQuery = "SELECT MAX(id) as max_id FROM penjualanbarang";
        $result = mysqli_query($conn, $maxIdQuery);
        $row = mysqli_fetch_assoc($result);
        $maxId = $row['max_id'];
      
        // Mengatur ulang nilai awal AUTO_INCREMENT pada kolom ID
        $alterQuery = "ALTER TABLE penjualanbarang AUTO_INCREMENT = " . ($maxId + 1);
        mysqli_query($conn, $alterQuery);

        header("Location: dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn); // Tutup koneksi
?>
