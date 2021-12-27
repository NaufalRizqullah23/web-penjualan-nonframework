<?php
session_start();
include 'config.php';
// Display selected user data based on id
// Getting id from url
$id_barang = $_GET['id_barang'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id_barang='$id_barang'");
while($user_data = mysqli_fetch_array($result))
{
    $id_barang = $user_data['id_barang'];
    $nama_barang = $user_data['nama_barang'];
    $harga_barang = $user_data['harga_barang'];
}
?>
<html>
    <section>
        <div>
            <h2>Pembelian</h2>
            <div class="row">
                <div class="col-lg-8">
                <table>
                    <form action="aksiBeli.php" method="post">    
                        <div class="form-group">
                            <tr>
                                <input type="text" hidden class="form-control"  name="id_barang" value=<?php echo $id_barang;?>>
                                <td><label for="nama">Nama Barang : </label></td>
                                <td><input type="text" name="nama_barang" class="form-control" placeholder="Air Mineral" value='<?php echo $nama_barang;?>' readonly></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td><label for="nama">Harga Barang : </label></td>
                                <td><input type="number" name="harga_barang" class="form-control" placeholder="2500" value='<?php echo $harga_barang;?>' readonly></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td><label for="jumlah">Nama Pembeli * : </label></td>
                                <td><input type="text" name="nama_pembeli" class="form-control" placeholder="Budi Budiawan"></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td><label for="jumlah">Tanggal Pembelian * : </label></td>
                                <td><input type="date" name="tanggal_pembelian" class="form-control" placeholder="yyyy-mm-dd"></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td><label for="jumlah">Jumlah * : </label></td>
                                <td><input type="text" name="jumlah_pembelian" class="form-control" placeholder="Masukan Jumlah yang akan dibeli"></td>
                            </tr>
                        </div>
                        <div class="form-group mt-2">
                            <tr>
                            <td><button type="submit" name = 'submit' class="btn btn-success">Beli</button></td>
                            </tr>
                        </div>
                        <div class="form-group mt-2">
                            <tr>
                            <td><button><a href=index.php class="btn btn-danger">Back</a></button></td>
                            </tr>
                        </div>
                    </form>
                </table>
                    <php?
                    
                    ?>
                </div>
            </div>
        </div>
    </section>
    </html>