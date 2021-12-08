<?php

/* 
 *  proses_keranjang.php fungsinya sama dengan cart_data.php
 *  lebih sederhana dan lebih lengkap dengan tambahan fitur kosongkan keranjang
 *  Error di awal karena blm ada pengecekan, mau betulin mager hhhh.. :D
 *
 */

session_start();

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    
    $result = [
        "id" => $id,
        "jumlah" => "1",
    ];

    if (isset($_SESSION['cart'])) {
        // kalo data lama 
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));
        
        // if ($index) {
        if ($id == $_SESSION['cart'][$index]['id']) {
            $_SESSION['cart'][$index]['jumlah'] += 1;
            // }
        } else {
            $cart = $_SESSION['cart'];
            array_push($cart, $result);
            $_SESSION['cart'] = $cart;
        }
    } else {
        // kalo data baru bikin array baru
        $cart = [];
        array_push($cart, $result);
        $_SESSION['cart'] = $cart;
    }
    header("location: keranjang.php");
}

if (isset($_GET["min"])) {
    $id = $_GET["min"];

    if (isset($_SESSION['cart'])) {
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));
    
        if ($_SESSION['cart'][$index]['jumlah'] > 1) {
            $_SESSION['cart'][$index]['jumlah'] -= 1;
        }
    }
    header("location: keranjang.php");
}

if (isset($_GET["del"])) {
    $id = $_GET["del"];
    
    if (isset($_SESSION['cart'])) {
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));

        $cart = $_SESSION['cart'];
        unset($cart[$index]);
        $_SESSION['cart'] = array_values($cart);
    }
    header("location: keranjang.php");
}

if (isset($_GET["kosongkan"])) {
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    header("location: index.php");
}


echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";
?>