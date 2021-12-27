<?php
session_start();
// include database connection file
    include_once("config.php");
    $id_barang = $_POST['id_barang'];
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $nama_pembeli=$_POST['nama_pembeli'];
    $tanggal_pembelian=$_POST['tanggal_pembelian'];
    $jumlah_pembelian = $_POST['jumlah_pembelian'];
    $diskon = 0;
    $subtotal = $jumlah_pembelian * $harga_barang;
    if($subtotal >= 50000){
        $diskon = $subtotal * 0.1;
    }
    $harga_total = $subtotal - $diskon;
  
    $result = mysqli_query($mysqli,"INSERT INTO `penjualan`(`id_barang`,`nama_pembeli`, `tanggal_pembelian`, `jumlah_pembelian`, `subtotal`, `diskon`, `harga_total`) 
    VALUES ($id_barang,'$nama_pembeli','$tanggal_pembelian',$jumlah_pembelian,$subtotal,$diskon,$harga_total)");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
?>
