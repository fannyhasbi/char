<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Imperial Boootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Sign Up <a href="<?= site_url(); ?>">Metaflorist</a></h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sudah punya akun? Silahkan masuk <a href="<?= site_url('signin'); ?>">disini</a></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="form">
            <form action="" method="post" role="form">
              <div class="form-group">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
              </div>

              <div class="form-group">
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Passowrd" required>
              </div>
              
              <div class="form-group">
                <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password" required>
              </div>
              
              <div class="text-center">
                <input type="submit" name="daftar" value="Sign Up">
              </div>
            </form>
          </div>

          <div class="clearfix"></div>
          <hr>

          <div class="pull-right">
            <p>Kembali ke <a href="<?= site_url(); ?>">beranda</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
