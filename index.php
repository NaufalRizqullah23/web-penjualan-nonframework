    <?php
        session_start();
        // Create database connection using config file


        include_once("config.php");
 
        // Fetch all users data from database
        $result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id_barang");
    ?>
<html>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <center><h1>Daftar Barang PT. Berkah Perkasa</h1></center>
                
            </div>
            <center>
                <table width = 80% border=1 >
                    
                    <tr>
                        <th>ID.</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        while($user_data = mysqli_fetch_array($result)) {         
                            echo "<tr>";
                            echo "<td>".$user_data['id_barang']."</td>";
                            echo "<td>".$user_data['nama_barang']."</td>";
                            echo "<td>".$user_data['harga_barang']."</td>";    
                            echo "<td><center><a href='show.php?id_barang=$user_data[id_barang]'>beli</a></center>";
                            echo "</tr>";        
                        } 
                    ?>
                </table>
            </center>
                
                <div class="mt3">
               
                </div>
                <center><table>
                    <tr>
                        <th>
                            <a href="daftarJual.php">Daftar Penjualan</a>
                        </th>
                    </tr>
                </table> </center>
        </div>
    </div>
    </html>