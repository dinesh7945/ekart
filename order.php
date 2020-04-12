<?php

include "includes/db.php";

include "functions.php";

// geting cutomer id
if (isset($_GET['c_id'])) {

    $customer_id = $_GET['c_id'];
}
// getting prd price and no. of items
$ip_add = getrealipaddres();
// get ip add function with local variable store ip addres
// global $db;

$total = 0;
// initalization value starting total==0    

$sel_price = "SELECT * FROM cart WHERE ip_add ='$ip_add'";
// cart tble--->ip address--->detect and 

$run_price = mysqli_query($db, $sel_price);

// status pending
$status = 'pending';

// random invoice
$invoice_no = mt_rand();

$count_pro = mysqli_num_rows($run_price);

while ($record = mysqli_fetch_array($run_price)) {
    // while ($record = mysqli_fetch_assoc($run_price)) {
    // mysqli_result::fetch_assoc -- mysqli_fetch_assoc — 
    // Fetch a result row as an associative array

    $pro_id = $record['p_id'];
    // fetch product_id from table which user--->selected 

    $pro_price = "SELECT * FROM products where product_id = $pro_id";
    // so now gng to product tbl-->where product_id--->$prod_id
    // this is called relation between product id
    $run_pro_price = mysqli_query($db, $pro_price);

    while ($p_price = mysqli_fetch_array($run_pro_price)) {

        // fetching array 
        $product_price = array($p_price['product_price']);
        // multiple production--->thts y array.about

        // inside array--->product_price-
        $values = array_sum($product_price);
        // array_sum()functions. inbuild functions
        // array--->sums *(product_price)
        $total += $values;
        // total values-->0
    }
}
// echo $total;



// getting qty from cart

$get_cart = "select * from cart where ip_add = '$ip_add'";

$run_cart = mysqli_query($con, $get_cart);


$get_qty = mysqli_fetch_array($run_cart);

$qty = $get_qty['qty'];



if ($qty == 0) {

    $qty = 1;
    $sub_total = $total;
} else {
    $qty = $qty;

    $sub_total = $total * $qty;
}

$insert_order = "INSERT INTO customer_orders (order_id,customer_id,due_amount,invoice_no,
total_products,order_date,order_status) VALUES 
('$customer_id','','$sub_total','$invoice_no','$count_pro','NOW()','$status')";



$run_order = mysqli_query($con, $insert_order);


if (!$run_order) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
if ($run_order) {

    echo "<script>alert('Order Successfull thanks!')</script>";
    echo "<script>window.open('index.php','_self')</script>";

 

    $empty_cart = "DELETE from cart where ip_add = $ip_add";

    $run_query = mysqli_query($con, $empty_cart);

    if (!$run_query) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    $insert_to_pending_orders = "INSERT INTO pending_orders (customer_id,invoice_no,product_id,qty,order_status) VALUES ('$customer_id','$invoice_no','$prod_id','$status')";

    $run_pending_query = mysqli_query($con, $insert_to_pending_orders);
} else {
    echo "error";
}
