<?php
        session_start();
        // Create database connection using config file


        include_once("config.php");
 
        // Fetch all users data from database
        $result = mysqli_query($mysqli, "SELECT * FROM penjualan ORDER BY id_pembeli");
    ?>
<html>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <center><h1>Daftar Penjualan PT. Berkah Perkasa</h1></center>
                
            </div>
            <center>
                <table width = 80% border=1 >
                    
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Jumlah Pembelian</th>
                        <th>Subtotal</th>
                        <th>Diskon</th>
                        <th>Harga Total</th>
                        <th>Nama Pembeli</th>
                        <th>Tanggal Pembelian</th>
                    </tr>
                    <?php
                            while($user_data = mysqli_fetch_array($result)){
                                echo "<tr>";
                                $dummy = $user_data['id_barang'];
                                echo "<td>".$user_data['id_barang']."</td>";
                                $result1 = mysqli_query($mysqli, "SELECT `nama_barang`, `harga_barang` FROM `barang` WHERE id_barang=$dummy");
                                $user_data1 = mysqli_fetch_array($result1);
                                echo "<td>".$user_data1['nama_barang']."</td>";
                                echo "<td>".$user_data1['harga_barang']."</td>";
                                echo "<td>".$user_data['jumlah_pembelian']."</td>";
                                echo "<td>".$user_data['subtotal']."</td>";
                                echo "<td>".$user_data['diskon']."</td>";
                                echo "<td>".$user_data['harga_total']."</td>";
                                echo "<td>".$user_data['nama_pembeli']."</td>";
                                echo "<td>".$user_data['tanggal_pembelian']."</td>";
                                echo "</tr>";        
                        } 
                    ?>
                </table>
            </center>
                <center><table>
                    <tr>
                        <th>
                            <a href="index.php">Back</a>
                        </th>
                    </tr>
                </table> </center>
        </div>
    </div>
    </html>