<div class="row">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit Produk</h3>
      </div>

      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="box-body">
          <div>
            <img src="<?= site_url('uploads/p/'.$produk->foto); ?>" class="img-responsive img-rounded">
          </div>

          <hr>
          <div class="clearfix"></div>

          <div class="form-group">
            <label for="id" class="col-md-2 control-label">#ID</label>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Nama Produk" value="<?= $produk->id; ?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <label for="nama" class="col-md-2 control-label">Nama Produk</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="<?= $produk->nama; ?>" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-2 control-label">Harga</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="harga_produk" placeholder="Tulis angka saja. Ex: 120000" value="<?= $produk->harga; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
              <textarea class="form-control" name="deskripsi_produk" placeholder="Deskripsi lengkap mengenai produk" rows="10" required><?= str_replace("<br>", "\n", $produk->desk); ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="ubahfoto" name="ubahfoto" onclick="disFoto()"> Ubah foto
                </label>
              </div>
            </div>
          </div>

          <div id="fotobaru" class="form-group" style="display: none">
            <label for="harga" class="col-md-2 control-label" required>Foto</label>
            <div class="col-md-10">
              <input type="file" name="foto_produk">
            </div>
          </div>

        </div>

        <div class="box-footer">
          <input type="submit" name="edit_produk" class="btn btn-success" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function disFoto(){
  var s = document.getElementById("ubahfoto");
  if(s.checked){
    document.getElementById('fotobaru').style.display = 'block';
  }
  else {
    document.getElementById('fotobaru').style.display = 'none';
  }
}
</script>