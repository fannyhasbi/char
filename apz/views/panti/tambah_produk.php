<div class="row">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tambah Produk Baru</h3>
      </div>

      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="nama" class="col-md-2 control-label">Nama Produk</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-2 control-label">Harga</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="harga_produk" placeholder="Tulis angka saja. Ex: 120000" required>
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
              <textarea class="form-control" name="deskripsi_produk" placeholder="Deskripsi lengkap mengenai produk" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-2 control-label" required>Foto</label>
            <div class="col-md-10">
              <input type="file" name="foto_produk">
            </div>
          </div>

        </div>

        <div class="box-footer">
          <input type="submit" name="tambah_produk" class="btn btn-success" value="Tambah">
        </div>
      </form>
    </div>
  </div>
</div>