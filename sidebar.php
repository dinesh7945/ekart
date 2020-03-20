  <? include "includes/db.php";
    ?>

  <div id="sidebar" class="span3">
      <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart <span class="badge badge-warning pull-right">$155.00</span></a></div>
      <ul id="sideManu" class="nav nav-tabs nav-stacked">
          <li class="subMenu open"><a> Categories</a>



              <ul>
                  <!-- display db categories in looped -->


                  <!-- sql-query -->
                  <?php $get_cat = "select * from categories";
                    $run = mysqli_query($con, $get_cat);
                    // perform query and connected db 
                    while ($row_cat = mysqli_fetch_array($run)) {
                        // Fetch array in associative array in looop

                        $cat_id = $row_cat['cat_id'];
                        //declare  new var and feteching column data--->row_cat and row Id particluar
                        $cat_title = $row_cat['cat_title'];

                        echo "<li><a class='active' href='products.html'><i class='icon-chevron-right'></i>$cat_title </a></li>";
                        // declare variables $cat_title
                    };

                    ?>
                  <!-- <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li> -->

              </ul>
          </li>
          <li class="subMenu"><a> Brands </a>
              <ul style="display:none">



                  <?php $get_brand = "select * from brands";

                    $run_brand = mysqli_query($con, $get_brand);

                    while ($row_brand = mysqli_fetch_array($run_brand)) {

                        $get_brand_id = $row_brand['brand_id'];
                        $get_brand_title = $row_brand['brand_title'];

                        echo "<li><a href='products.html'><i class='icon-chevron-right'></i>$get_brand_title </a></li>";
                    }




                    ?>
                  <!-- <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li> -->
                  
              </ul>
          </li>
          <!-- <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
              <ul style="display:none">
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves (35)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard (45)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
                  <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
              </ul>
          </li>
          <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
          <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
          <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
      </ul> -->
      <br />
      <div class="thumbnail">
          <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera" />
          <div class="caption">
              <h5>Panasonic</h5>
              <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
          </div>
      </div><br />
      <div class="thumbnail">
          <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
          <div class="caption">
              <h5>Kindle</h5>
              <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
          </div>
      </div><br />
      <div class="thumbnail">
          <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
          <div class="caption">
              <h5>Payment Methods</h5>
          </div>
      </div>
  </div>
  <!-- Sidebar end=============================================== -->