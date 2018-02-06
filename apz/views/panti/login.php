<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sign in Metaflorist</title>
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
          <h3 class="section-title">Sign In <a href="<?= site_url(); ?>">Metaflorist</a></h3>
          <div class="section-title-divider"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="form">
            <form action="" method="post" role="form">
              <?= $message; ?>

              <div class="form-group">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              
              <div class="text-center">
                <input type="submit" name="masuk" value="Sign In">
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
