<div class="row">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Produk</h3>
      </div>

      <div class="box-body">
        <a href="<?= site_url('in/tambah-produk'); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a><br><br>
        <div class="clearfix"></div>

        <table id="datatable" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach($produk as $item): ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $item->nama; ?></td>
                <td><?= number_format($item->harga, 0, ',', '.'); ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?= site_url('in/edit-produk/'.$item->id); ?>" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>