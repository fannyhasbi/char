<!DOCTYPE html>
<html lang="en">
<head>
<title>Metaflorist Products</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/lib/bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/products_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/products_responsive.css">
</head>

<body>

<div class="super_container">
  <!-- Header -->
  <header class="header trans_300">
    <!-- Main Navigation -->
    <div class="main_nav_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-right">
            <div class="logo_container">
              <a href="<?= site_url(); ?>">Meta<span>florist</span></a>
            </div>
            <nav class="navbar">
              <ul class="navbar_menu">
                <li><a href="<?= site_url(); ?>">kontak</a></li>
              </ul>
              <ul class="navbar_user">
                <li class="checkout">
                  <a href="<?= site_url('cart'); ?>">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
              <div class="hamburger_container">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

  </header>

  <div class="fs_menu_overlay"></div>

  <div class="container product_section_container">
    <div class="row">
      <div class="col product_section clearfix">
        
        <!-- Sidebar -->
        <div class="sidebar">
          <div class="sidebar_section">
            <div class="sidebar_title">
              <h5>Kategori</h5>
            </div>
            <form class="btn-group" action="" method="get">
              <input type="text" class="form-control" name="q" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </form>
            <ul class="sidebar_categories">
              <li class="active"><a href="#">Semua</a></li>
              <li><a href="#">Merah</a></li>
              <li><a href="#">Orange</a></li>
              <li><a href="#">Kuning</a></li>
              <li><a href="#">Putih</a></li>
            </ul>
          </div>
        </div>

        <!-- Main Content -->

        <div class="main_content">

          <!-- Products -->

          <div class="products_iso">
            <div class="row">
              <div class="col">
                
                <!-- Product Grid -->
                <div class="product-grid">
                  <?php if($results){ ?>
                    <?php foreach($results as $item): ?>

                      <div class="product-item">
                        <div class="product">
                          <div class="product_image">
                            <img src="<?= site_url('uploads/p/'.$item->foto); ?>" alt="" class="img-responsive">
                          </div>
                          <div class="product_info">
                            <h6 class="product_name"><a href="single.html"><?= $item->nama; ?></a></h6>
                            <div class="product_price"><?= 'Rp ' . number_format($item->harga, 0, ',', '.'); ?></div>
                          </div>
                        </div>
                        <div class="blue_button add_to_cart_button"><a href="#">tambah ke keranjang</a></div>
                      </div>

                    <?php endforeach; ?>
                  <?php } else { ?>
                    <div class="text-warning text-center">
                      <i class="fa fa-bell"></i> Belum ada produk
                    </div>
                  <?php } ?>
                </div>

                <!-- Product Sorting -->

                <?php if(isset($links)){ ?>
                  <?php echo $links; ?>
                <?php } ?>


                <!-- <div class="product_sorting_container product_sorting_container_bottom clearfix">
                  <span class="showing_results">Showing 1–3 of 12 results</span>
                  <div class="pages d-flex flex-row align-items-center">
                    <div class="page_current">
                      <span>1</span>
                      <ul class="page_selection">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                      </ul>
                    </div>
                    <div class="page_total"><span>of</span> 3</div>
                    <div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_nav_container text-center">
            <div class="cr">&copy; Copyright <b>Metaflorist</b> All Righst Reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</div>

<script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/bootstrap4/js/popper.js"></script>
<script src="<?= base_url(); ?>assets/lib/bootstrap4/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/js/products_custom.js"></script>
</body>

</html>
