<?php

include "includes/db.php";

include "functions.php";

// geting cutomer id
if (isset($_GET['c_id'])) {

    $customer_id = $_GET['cid'];
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

// $qty 
// code qty start here




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
