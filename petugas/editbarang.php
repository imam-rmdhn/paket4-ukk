<?php
include_once("../koneksi/koneksi.php");

if (isset($_POST['update'])) {
    $ProdukID = $_GET['idproduk'];
    $NamaProduk = $_POST['nama'];
    $Harga = $_POST['harga'];
    $Stok = $_POST['stok'];

            $result = mysqli_query($koneksi, "UPDATE produk SET nama='$NamaProduk', harga='$Harga', stok='$Stok' WHERE idproduk=$ProdukID");

            if ($result) {
                echo "<script>alert('Berhasil Mengedit Produk');window.location.href='?page=stok';</script>";
                exit();

            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
        } 
    
    
    
    

$id = $_GET['idproduk'];

$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE idproduk=$id");

while ($barang_data = mysqli_fetch_array($result1)) {
    $NamaProduk = $barang_data['nama'];
    $Harga = $barang_data['harga'];
    $Stok = $barang_data['stok'];
}
$koneksi->close();
?>

<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <h3 class="">Update Barang</h3>
        </div>

        <div class="card-body">
            <form action="" method="POST" entype="multipart/form-data">
                
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="NamaUser" value="<?php echo $NamaProduk; ?>" placeholder="Masukkan Nama" name="nama">
            </div> 
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" id="harga" value="<?php echo $Harga; ?>" placeholder="Masukkan Nama" name="harga">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">stok:</label>
                <input type="text" class="form-control" id="stok" value="<?php echo $Stok; ?>" placeholder="Masukkan Stok" name="stok">
            </div>
            
            <button type="submit" name="update" class="btn btn-primary">Update</button> 
         </from>
       </div>
     </div>
   </div>
</div>       