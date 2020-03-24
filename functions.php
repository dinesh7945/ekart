<?php

$db = mysqli_connect("localhost", "root", "", "ekart");


// carpro function--->carousel products
function carPro()

{
    global $db;
    $get_products = "select * from products order by rand() LIMIT 0,3";
    $run_products = mysqli_query($db, $get_products);
    while ($row_products = mysqli_fetch_array($run_products)) {
        $prod_id = $row_products['product_id'];
        $prod_title = $row_products['product_title'];
        $prod_cat = $row_products['cat_id'];
        $prod_brand = $row_products['brand_id'];
        $prod_desc = $row_products['product_descthem'];
        $prod_price = $row_products['product_price'];
        $prod_img = $row_products['product_img1'];
        $prod_img2 = $row_products['product_img2'];
        $prod_img3 = $row_products['product_img3'];
        echo "<li class='span3'><div class='thumbnail'>
<a href='product_details.html'><img style='height: 40%;object-fit: contain;' src='admin-area/product-images/$prod_img' alt='' /></a>
<div class='caption'>
<h5>$prod_title</h5>


<h4 style='text-align:center'><a class='btn' href='product_details.html'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>$prod_price</a></h4>
</div>
</div>
";
    }
}


// getpro()----->fetching products randomly
function getPro()

{
    global $db;
    $get_products = "select * from products order by rand()";
    $run_products = mysqli_query($db, $get_products);
    while ($row_products = mysqli_fetch_array($run_products)) {
        $prod_id = $row_products['product_id'];
        $prod_title = $row_products['product_title'];
        $prod_cat = $row_products['cat_id'];
        $prod_brand = $row_products['brand_id'];
        $prod_desc = $row_products['product_descthem'];
        $prod_price = $row_products['product_price'];
        $prod_img = $row_products['product_img1'];
        $prod_img2 = $row_products['product_img2'];
        $prod_img3 = $row_products['product_img3'];
        echo "<li class='span3'><div class='thumbnail'>
                                        <a href='product_details.html'><img style='height: 40%;object-fit: contain;' src='admin-area/product-images/$prod_img' alt='' /></a>
                                        <div class='caption'>
                                            <h5>$prod_title</h5>
                                            

                                            <h4 style='text-align:center'><a class='btn' href='product_details.html'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>$prod_price</a></h4>
                                        </div>
                                    </div>
                                        ";
    }
}
// function getbrand()----->getting brand in side bar
function getbrand()

{
    global $db;
    $get_brands = "select * from brands ";
    $run_brands = mysqli_query($db, $get_brands);
    while ($row_brands = mysqli_fetch_array($run_brands)) {

        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
        // $prod_img = $row_brands['product_img1'];
        echo "<li><a href='products.php?brand=$brand_id'><i class='icon-chevron-right'></i>$brand_title </a></li>";
    }
}


// function getcategory()----->getting category in side bar

function get_cat()
{
    global $db;
    $get_cat = "select * from categories";
    $run = mysqli_query($db, $get_cat);
    // perform query and connected db 
    while ($row_cat = mysqli_fetch_array($run)) {
        // Fetch array in associative array in looop

        $cat_id = $row_cat['cat_id'];
        //declare  new var and feteching column data--->row_cat and row Id particluar
        $cat_title = $row_cat['cat_title'];

        echo "<li><a class='active' href='products.php?cat=$cat_id'><i class='icon-chevron-right'></i>$cat_title </a></li>";
        // declare variables $cat_title
    };
}

// product.php--->getting products by category id
function get_prodlist()

{
    global $db;
    // if (isset($_GET['cat'])) {

        $category_id = $_GET['cat'];
        $get_cat_product = "select * from products where cat_id = $category_id";

        $run_cat_products = mysqli_query($db, $get_cat_product);
        while ($row_cat_products = mysqli_fetch_array($run_cat_products)) {
            $prod_id = $row_cat_products['product_id'];
            $prod_title = $row_cat_products['product_title'];
            $prod_cat = $row_cat_products['cat_id'];
            $prod_brand = $row_cat_products['brand_id'];
            $prod_desc = $row_cat_products['product_descthem'];
            $prod_price = $row_cat_products['product_price'];
            $prod_img = $row_cat_products['product_img1'];
            $prod_img2 = $row_cat_products['product_img2'];
            $prod_img3 = $row_cat_products['product_img3'];
            echo "<li class='span3'><div class='thumbnail'>
                                        <a href='product_details.html'><img style='height: 40%;object-fit: contain;' src='admin-area/product-images/$prod_img' alt='' /></a>
                                        <div class='caption'>
                                            <h5>$prod_title</h5>
                                            

                                            <h4 style='text-align:center'><a class='btn' href='product_details.html'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>$prod_price</a></h4>
                                        </div>
                                    </div>
                                    </li>
                                        ";
        }
    }
// }
?>