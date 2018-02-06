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
                <li><a href="#">shop</a></li>
                <li><a href="#">promotion</a></li>
                <li><a href="contact.html">contact</a></li>
              </ul>
              <ul class="navbar_user">
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                <li class="checkout">
                  <a href="#">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="checkout_items" class="checkout_items">2</span>
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
              <h5>Product Category</h5>
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
              <li><a href="#">Red</a></li>
              <li class="active"><a href="#">Green</a></li>
              <li><a href="#">Blue</a></li>
              <li><a href="#">Yellow</a></li>
              <li><a href="#">Purple</a></li>
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

                  <!-- Product 1 -->
                  <div class="product-item men">
                    <div class="product discount">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/1.jpg" alt="">
                      </div>
                      <div class="favorite favorite_left"></div>
                      <div class="product_bubble product_bubble_right product_bubble_blue d-flex flex-column align-items-center"><span>-$20</span></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                        <div class="product_price">$520.00<span>$590.00</span></div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 2 -->

                  <div class="product-item women">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/2.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                        <div class="product_price">$610.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 3 -->

                  <div class="product-item women">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/3.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                        <div class="product_price">$120.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 4 -->

                  <div class="product-item accessories">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/4.jpg" alt="">
                      </div>
                      <div class="product_bubble product_bubble_right product_bubble_blue d-flex flex-column align-items-center"><span>sale</span></div>
                      <div class="favorite favorite_left"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                        <div class="product_price">$410.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 5 -->

                  <div class="product-item women men">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/5.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                        <div class="product_price">$180.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 6 -->

                  <div class="product-item accessories">
                    <div class="product discount">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/6.jpg" alt="">
                      </div>
                      <div class="favorite favorite_left"></div>
                      <div class="product_bubble product_bubble_right product_bubble_blue d-flex flex-column align-items-center"><span>-$20</span></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                        <div class="product_price">$520.00<span>$590.00</span></div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 7 -->

                  <div class="product-item women">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/7.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                        <div class="product_price">$610.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 8 -->

                  <div class="product-item accessories">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/8.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                        <div class="product_price">$120.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 9 -->

                  <div class="product-item men">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/2.jpg" alt="">
                      </div>
                      <div class="product_bubble product_bubble_right product_bubble_blue d-flex flex-column align-items-center"><span>sale</span></div>
                      <div class="favorite favorite_left"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                        <div class="product_price">$410.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                  <!-- Product 10 -->

                  <div class="product-item men">
                    <div class="product">
                      <div class="product_image">
                        <img src="<?= base_url(); ?>uploads/p/3.jpg" alt="">
                      </div>
                      <div class="favorite"></div>
                      <div class="product_info">
                        <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                        <div class="product_price">$180.00</div>
                      </div>
                    </div>
                    <div class="blue_button add_to_cart_button"><a href="#">add to cart</a></div>
                  </div>

                </div>

                <!-- Product Sorting -->

                <div class="product_sorting_container product_sorting_container_bottom clearfix">
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

                </div>

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
