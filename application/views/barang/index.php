
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Barang</h3>
            <ul class="list-group">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            </tr>
                    </thead>

                    <tbody>
                    <?php foreach( $barang as $brg ):?>     
                        <tr>
                            <th><?= $brg['id_barang']; ?></th>
                            <th><?= $brg['nama_barang']; ?></td>
                            <th><?= $brg['harga']; ?></td>
                            <th><?= $brg['stok']; ?></td>
                            <?php endforeach;?>
                        </tr>
                    </tbody>
                    </tbody>
                    </table>
                
            </ul>
        </div>
    </div>
</div>

